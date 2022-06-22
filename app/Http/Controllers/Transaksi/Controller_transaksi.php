<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;


class Controller_transaksi extends Controller
{
    public function Datatypetransaksi()
    {
        $data = DB::table('tabel_type_transaksi')->get();
        return view('v_admin.v_transaksi.v_type_transaksi',compact('data',$data),[
            'title' => 'Type Transaksi | Sistus Belanja Online Frozen Food',
            'webname' => 'Data Type Transaksi'
           ]);
    }


    public function Adddatatype(Request $request)
    {
        $this->validate($request,[
            'name_type' => 'required|max:200|unique:tabel_agen,nama_agen',
        ]);
        $addtype = DB::table('tabel_type_transaksi')->insert([
            'name_type'=> $request->name_type,
        ]);
        if($addtype){
            //redirect dengan pesan sukses
            return redirect('TypeTransaksi')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('TypeTransaksi')->with(['error' => 'Data failed to save !']);
        }
       
    }

    public function UpdateDatatype(Request $request, $id)
    {
        $request->validate([
            'name_type' => 'required',   
        ]);
        $data = DB::table('tabel_type_transaksi')->where('id_type',$id)->update([
            'name_type'=> $request->name_type,
         ]);

         if($data){
            //redirect dengan pesan sukses
            return redirect('TypeTransaksi')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('TypeTransaksi')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
       
}
}
