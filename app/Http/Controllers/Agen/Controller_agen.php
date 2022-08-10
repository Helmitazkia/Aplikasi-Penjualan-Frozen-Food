<?php

namespace App\Http\Controllers\Agen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class Controller_agen extends Controller
{
    public function Showagen()
    {
        $data = DB::table('tabel_agen')->get();
        return view('v_admin.v_agen.index_agen',compact('data',$data),[
            'title' => 'Agen | Sistus Belanja Online Frozen Food',
            'webname' => 'Data Agen Product'
           ]);
    }

    public function Profil()
    {
        $data = DB::select('select id,users.name,email,tabel_status.name_status , addres ,users.password ,phone,image from users
        inner join tabel_status on users.email_verified_at = tabel_status.id_status');
        return view('v_layouts_admin/v_header_admin.blade',compact('data',$data));
    }

    //Delete catagory
    public function DeteleAgen($id)
    {
        $deleted = DB::table('tabel_agen')->where('kode_agen',$id)->delete();
        return redirect('Agenshow');

    }

    public function AdddataAgen(Request $request)
    {
        $this->validate($request,[
            'nama_agen' => 'required|max:200|unique:tabel_agen,nama_agen',
            'alamat' => 'required|max:400|unique:tabel_agen,alamat',
            'phone' => 'required|min:10|max:20|unique:tabel_agen,phone',
        ]);
        $addagen = DB::table('tabel_agen')->insert([
            'nama_agen'=> $request->nama_agen,
            'alamat'=> $request->alamat,
            'phone'=> $request->phone,
        ]);
        if($addagen){
            //redirect dengan pesan sukses
            return redirect('Agenshow')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('Agenshow')->with(['error' => 'Data failed to save !']);
        }
       
    }

    public function UpdateDataAgen(Request $request, $id)
    {
        $request->validate([
            'nama_agen' => 'required',
            'alamat' => 'required',
            'phone' => 'required',    
        ]);
        $data = DB::table('tabel_agen')->where('kode_agen',$id)->update([
            'nama_agen'=> $request->nama_agen,
            'alamat'=> $request->alamat,
            'phone'=> $request->phone,
         ]);

         if($data){
            //redirect dengan pesan sukses
            return redirect('Agenshow')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('Agenshow')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
       
}
}
