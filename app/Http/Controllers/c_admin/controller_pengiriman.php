<?php

namespace App\Http\Controllers\c_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;


class controller_pengiriman extends Controller
{
    public function ShowPengiriman()
    {
        $data = DB::select('select tabel_pengiriman.id_status, id_pengiriman,products.id,products.name,tabel_customer.id_customer,name_customer,phone,alamat_customer,tabel_pengiriman.tanggal_pengiriman,name_status from tabel_pengiriman
        inner join tabel_customer on tabel_pengiriman.id_customer = tabel_customer.id_customer
        inner join tabel_status on tabel_pengiriman.id_status = tabel_status.id_status
        inner join products on tabel_pengiriman.id_product = products.id');
        $ambilcustomer = DB::table('tabel_customer')->get();
        $ambilproduct = DB::table('products')->get();
        $ambilstatus = DB::table('tabel_status')->get();
        //dd($data);
        return view('v_admin/v_pengiriman/v_index_pengiriman',[
            'data'  =>$data,
            'ambilproduct' =>$ambilproduct,
            'ambilcustomer' =>$ambilcustomer,
            'ambilstatus' =>$ambilstatus,
            'title' => 'Pengiriman-Barang',
            'webname' => 'Data Pengiriman Barang'
           ]);
    } 

    //
    public function VformAddpengiriman ()
    {
        $ambilcustomer = DB::table('tabel_customer')->get();
        $ambilproduct = DB::table('products')->get();
        $ambilstatus = DB::table('tabel_status')->get();
        return view('v_admin/v_pengiriman/v_add_pengiriman',[
            'ambilproduct' =>$ambilproduct,
            'ambilcustomer' =>$ambilcustomer,
            'ambilstatus' =>$ambilstatus,
            'title' => 'Add-Pengiriman',
            'webname' => 'Add New Pengiriman'
           ]);
    } 

        
    public function AddDatapengiriman(Request $request)
    {   
        $request->validate([
            'id_product'                 => 'required',            
            'id_customer'                => ['required'],
            'tanggal_pengiriman'         => ['required'],
            'id_status'                   => 'required'
        ]);
        $Addpengrirmanbarang = DB::table('tabel_pengiriman')->insert([
            'id_product'                => $request->id_product,
            'id_customer'               => $request->id_customer,
            'tanggal_pengiriman'        => $request->tanggal_pengiriman,
            'id_status'                 => $request->id_status
        ]);

        if($Addpengrirmanbarang){
            //redirect dengan pesan sukses
            return redirect('Datapengiriman')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('Datapengiriman')->with(['error' => 'Data failed to save !']);
        }    
    }

    public function Updatedatapengiriman(Request $request, $id)
    {
      $request->validate([
        'id_product'                 => 'required',            
        'id_customer'                => ['required'],
        'tanggal_pengiriman'         => ['required'],
        'id_status'                   => 'required'  
      ]);
       $UpdateData = DB::table('tabel_pengiriman')->where('id_pengiriman',$id)->update([
        'id_product'                => $request->id_product,
        'id_customer'               => $request->id_customer,
        'tanggal_pengiriman'        => $request->tanggal_pengiriman,
        'id_status'                 => $request->id_status
       ]);
      //dd($UpdateData);
       if($UpdateData){
          //redirect dengan pesan sukses
          return redirect('Datapengiriman')->with(['updatesuccess' => 'Data Edited Successfully !']);
      }else{
          //redirect dengan pesan error
          return redirect('Datapengiriman')->with(['updateerorr' => 'Data Failed to Edit !']);
      }
    }

    //Delete Data customer
    public function DeleteDatapengiriman($id)
    {
        $deleted = DB::delete("DELETE FROM tabel_pengiriman WHERE id_pengiriman = $id ");
        return redirect('Datapengiriman');
    }
    
}
