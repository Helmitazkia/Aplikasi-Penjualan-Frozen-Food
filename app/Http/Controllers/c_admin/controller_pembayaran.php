<?php

namespace App\Http\Controllers\c_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class controller_pembayaran extends Controller
{
    public function ShowPembayaran()
    {
        $data = DB::select('select id_pembayaran, image_pembayaran,Nama_pembayaran,nama_penerima,rekening,name_status,tabel_status.id_status ,tabel_pembayaran.id_status from tabel_pembayaran
        inner join tabel_status on tabel_pembayaran.id_status = tabel_status.id_status');
        $ambilstatus = DB::table('tabel_status')->get();
        //dd($data);
        return view('v_admin/v_pembayaran/index_pembayaran',[
            'data'  =>$data,
            'ambilstatus' =>$ambilstatus,
            'title' => 'Data Pembayaran',
            'webname' => 'Data Pembayaran'
           ]);
    }

    public function Vformaddpembayaran()
    {
        $status = DB::select('select id_status , name_status from tabel_status');
        return view('v_admin/v_pembayaran/v_add_pembayaran',[
         'status'  => $status, 
         'title'   => 'Add New Pembayaran',
         'webname' => 'Pembayaran'
        ]);
    }
    
    
    public function Tambahpembayaran(Request $request)
    {
        $this->validate($request,[
            'rekening'         => 'required',
            'Nama_pembayaran'  => 'required',
            'nama_penerima'    => 'required',
            'image_pembayaran' => 'required|image|file|max:2024|mimes:jpg,png',
            'id_status'        => 'required', 
        ]);
       
        //Jika ada file yang di upload
        if($request->file('image_pembayaran')){
           $uploadgambar = $request->file('image_pembayaran')->store('post-image'); 
        }
                         
        $Addpengiriman = DB::table('tabel_pembayaran')->insert([
            'Nama_pembayaran'  => $request->Nama_pembayaran,
            'nama_penerima'    => $request->nama_penerima,
            'rekening'         => $request->rekening,
            'image_pembayaran' => $uploadgambar,
            'id_status'        => $request->id_status,
           
        ]);
        //dd($Addpengiriman);
        if($Addpengiriman){
            //redirect dengan pesan sukses
            return redirect('DataPembayaran')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('DataPembayaran')->with(['error' => 'Data failed to save !']);
        }
    }

    public function DeleteDatapembayaran($id)
    {
        $deleted = DB::delete("DELETE FROM tabel_pembayaran WHERE id_pembayaran = $id ");
        return redirect('DataPembayaran');

    }

    public function Updatepembayaran(Request $request, $id)
    {
      $request->validate([
        'rekening'         => 'required',
        'Nama_pembayaran'  => 'required',
        'nama_penerima'    => 'required',
        'image_pembayaran' => 'image|file|mimes:jpg,png',
        'id_status'        => 'required',
      ]);
     
     //jika ada file yang di upload
     if($request->file('image_pembayaran')){
          //Maka cek , ada ga foto lamanya 
          if($request->fotolama){
              //jika ada maka delete
              Storage::delete($request->fotolama);   
          }
          //ganti nama dengan foto yang baru
          $uploadgambar = $request->file('image_pembayaran')->store('post-image');   
      }else{
          //jika tidak ada file yang di upload maka pake  foto yang lama
          $uploadgambar  = $request->fotolama;
      }
      

       $UpdatePembayaran = DB::table('tabel_pembayaran')->where('id_pembayaran',$id)->update([
        'Nama_pembayaran'  => $request->Nama_pembayaran,
        'nama_penerima'    => $request->nama_penerima,
        'rekening'         => $request->rekening,
        'image_pembayaran' => $uploadgambar,
        'id_status'        => $request->id_status,
       ]);

       //dd($UpdatePembayaran);

       if($UpdatePembayaran){
          //redirect dengan pesan sukses
          return redirect('DataPembayaran')->with(['updatesuccess' => 'Data Edited Successfully !']);
      }else{
          //redirect dengan pesan error
          return redirect('DataPembayaran')->with(['updateerorr' => 'Data Failed to Edit !']);
      }
    }


}
