<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class Controller_barang extends Controller
{
    public function Databarangmasuk()
    {
        $data = DB::select('select id_barang,nama_barang ,products.name,tabel_barang_masuk.catagories ,tabel_agen.nama_agen,harga_beli,kode_agen,catagory.name_catagory ,jumlah_stok,tanggal_masuk,id_produk from tabel_barang_masuk
        inner join catagory  on tabel_barang_masuk.catagories = catagory.id
        inner join tabel_agen on tabel_barang_masuk.nama_agen = tabel_agen.kode_agen
        inner join products on tabel_barang_masuk.id_produk = products.id');
        $ambilkategori = DB::Table('Catagory')->get();
        $ambilagen = DB::Table('tabel_agen')->get();
        return view('v_admin/Barang/v_barang_masuk',[
            'data' =>$data,
            'ambilagen' =>$ambilagen,
            'ambilkategori'=>$ambilkategori,
            'title' => 'Barang Masuk | Halaman Admin Online Frozen Food',
            'webname' => 'Data Barang Masuk'
           ]);
    }

    


    public function FormAddBarang()
    {
        $ambilproduk = DB::Table('products')->get();
        $ambilagen = DB::Table('tabel_agen')->get();
        $ambilkategori = DB::Table('Catagory')->get();
        return view('v_admin/Barang/add_barang_masuk',[
            'ambilagen' =>$ambilagen,
            'ambilproduk'=>$ambilproduk,
            'ambilkategori'=>$ambilkategori,
            'title' => 'Barang Masuk| Halaman Admin Online Frozen Food',
            'webname' => 'Add Barang Masuk'
           ]);
       
    }

    public function AddBarangNew(Request $request)
    {
        $this->validate($request,[
            'nama_barang'     => 'required|max:200|unique:tabel_barang_masuk,nama_barang',
            'nama_agen'       => 'required',
            'harga_beli'      => 'required|min:4',
            'catagories'      => 'required', 
            'jumlah_stok'     => 'required', 
            'id_produk'       => 'required',
            'tanggal_masuk'   => 'required',

        ]);

        $addbarang = DB::table('tabel_barang_masuk')->insert([
            'nama_barang'=> $request->nama_barang,
            'nama_agen'=> $request->nama_agen,
            'harga_beli'=>str_replace(".","",$request->harga_beli),
            'catagories'=> $request->catagories,
            'jumlah_stok'=> $request->jumlah_stok,
            'id_produk'=> $request->id_produk,
            'tanggal_masuk'=> $request->tanggal_masuk,
        ]);

        if($addbarang){
            return redirect('DataBarangMasuk')->with(['success' => 'Data successfully save !']);
        }else{
            return redirect('DataBarangMasuk')->with(['error' => 'Data failed to save !']);
        }
       
    }



    public function Updatebrg(Request $request,$id)
    {
        $this->validate($request,[
            'nama_barang'     => 'required|max:200',
            'nama_agen'       => 'required',
            'harga_beli'      => 'required|min:4',
            'catagories'      => 'required', 
            'jumlah_stok'     => 'required', 
            'tanggal_masuk'   =>'required',

        ]);
        $UpdateBarang = DB::table('tabel_barang_masuk')->where('id_barang',$id)->update([
            'nama_barang'=> $request->nama_barang,
            'nama_agen'=> $request->nama_agen,
            'harga_beli'=>$request->harga_beli,
            'catagories'=> $request->catagories,
            'jumlah_stok'=> $request->jumlah_stok,
            'tanggal_masuk'=> $request->tanggal_masuk,
         ]);

         if($UpdateBarang){
            //redirect dengan pesan sukses
            return redirect('DataBarangMasuk')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('DataBarangMasuk')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
        
       
    }

    //Delete Barang
    public function DeleteDataBarang($id)
    {
        $deleted = DB::delete("DELETE FROM tabel_barang_masuk WHERE id_barang = $id ");
        return redirect('DataBarangMasuk');

    }

    // public function CetakLaporan()
    // {

        
    //     $data = DB::select('select id_barang,nama_barang ,products.name,tabel_barang_masuk.catagories ,tabel_agen.nama_agen,harga_beli,kode_agen,catagory.name_catagory ,jumlah_stok,tanggal_masuk,id_produk from tabel_barang_masuk
    //     inner join catagory  on tabel_barang_masuk.catagories = catagory.id
    //     inner join tabel_agen on tabel_barang_masuk.nama_agen = tabel_agen.kode_agen
    //     inner join products on tabel_barang_masuk.id_produk = products.id');
    //     $ambilkategori = DB::Table('Catagory')->get();
    //     $ambilagen = DB::Table('tabel_agen')->get();
    //     return view('v_admin/Barang/v_barang_masuk',[
    //         'data' =>$data,
    //         'ambilagen' =>$ambilagen,
    //         'ambilkategori'=>$ambilkategori,
    //         'title' => 'Barang Masuk | Halaman Admin Online Frozen Food',
    //         'webname' => 'Data Barang Masuk'
    //        ]);
    // }

}