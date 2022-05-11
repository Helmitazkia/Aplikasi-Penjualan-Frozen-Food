<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class controller_alamat_customer extends Controller
{
    public function ShowAlamatdetail(Request $request)
    {
        $data = DB::select('select tabel_customer.id_customer , name_customer ,tabel_alamat_detail.id_alamat,tabel_alamat_detail.alamat_detail,tabel_alamat_detail.kode_pos from tabel_customer
        inner join tabel_alamat_detail on tabel_customer.id_customer = tabel_alamat_detail.id_customer');    
        $ambilcustomer = DB::table('tabel_customer')->get();
        return view('v_customer/v_detail_alamat/v_idex_detail',[
            'ambilcustomer' =>$ambilcustomer,
            'data'=> $data,
            'title' => 'Alamat-Show',
            'webname' => 'Data Detail Alamat'
            ]);
    }

    public function VformAddAlamat ()
    {
        $ambilcustomer = DB::table('tabel_customer')->get();
        return view('v_customer/v_detail_alamat/v_add_detail_alamat',[
            'ambilcustomer' => $ambilcustomer,
            'title' => 'Customer-show',
            'webname' => 'Add New Alamat'
        ]);
    } 
    
    public function Addalamatcustomer(Request $request)
    {   
        $request->validate([
            'id_customer'           => 'required',
            'alamat_detail'         => 'required',
            'kode_pos'              => 'required'
        ]);
        $createdetailalamat = DB::table('tabel_alamat_detail')->insert([
            'id_customer'       => $request->id_customer,
            'alamat_detail'     => $request->alamat_detail,
            'kode_pos'          => $request->kode_pos
        ]);
        //dd($createdetailalamat);
        if($createdetailalamat){
            //redirect dengan pesan sukses
            return redirect('DetailAddres')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('DetailAddres')->with(['error' => 'Data failed to save !']);
        }    
    }

     //Delete Data customer
     public function DeleteDetailalamat($id)
     {
         $deleted = DB::delete("DELETE FROM tabel_alamat_detail WHERE id_alamat = $id ");
         return redirect('DetailAddres');
     }
 
     public function Updatealamat(Request $request, $id)
     {
       $request->validate([
           'id_customer'       => 'required',
           'alamat_detail'     => 'required',
           'kode_pos'          => ['required','min:5'] 
       ]);
        $UpdateData = DB::table('tabel_alamat_detail')->where('id_alamat',$id)->update([
           'id_customer'      => $request->id_customer,
           'alamat_detail'    => $request->alamat_detail,
           'kode_pos'         => $request->kode_pos,
  
        ]);
       //dd($UpdateData);
        if($UpdateData){
           //redirect dengan pesan sukses
           return redirect('DetailAddres')->with(['updatesuccess' => 'Data Edited Successfully !']);
       }else{
           //redirect dengan pesan error
           return redirect('DetailAddres')->with(['updateerorr' => 'Data Failed to Edit !']);
       }
     }
}
