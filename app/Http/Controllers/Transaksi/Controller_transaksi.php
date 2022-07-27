<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use\Illuminate\Support\Facades\Auth;
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
    //Data Transaksi
    public function TransaksiData()
    {
        $Transaksi = DB::select('select no_transaksi,tanggal_transaksi,customer,id_product,type_transaksi,tabel_customer.name_customer , products.name ,jumlah_beli,users.name AS nama_user ,tabel_type_transaksi.name_type, total_transaksi  from tabel_transaksi
        inner join products on tabel_transaksi.id_Product = products.id
        inner join tabel_customer on tabel_transaksi.customer = tabel_customer.id_customer 
        inner join tabel_type_transaksi on tabel_transaksi.type_transaksi = tabel_type_transaksi.id_type
        inner join users on tabel_transaksi.staf = users.id');
        $ambilproducts = DB::table('products')->get();
        $ambilcustomer = DB::table('tabel_customer')->get();
        $Type = DB::table('tabel_type_transaksi')->get();
        $log = (Auth::User()->id);
        return view('v_admin.v_transaksi.transaksi',[
            'title' => 'Transaksi | Halaman Admin Online Frozen Food',
            'Transaksi' =>$Transaksi,
            'webname' => 'Data Transaksi',
            'ambilproducts' => $ambilproducts,
            'log' => $log,
            'ambilcustomer' => $ambilcustomer,
            'Type' =>$Type,
           ]);
    }

    public function FormAddTransaksi()
    {
        //Nomor Otomatis
        $q = DB::Table('tabel_transaksi')->select(DB::raw('MAX(RIGHT(no_transaksi,4)) as kode '));
        $kd ="";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s",$tmp);
            }
        }else{
            $kd = "0001";
        }
        $log = (Auth::User()->id);
        $products = DB::table('products')->get();
        $customer = DB::table('tabel_customer')->get();
        $Type = DB::table('tabel_type_transaksi')->get();
        return view('v_admin/v_transaksi/AddForm',[
            'title' => 'Transaksi | Halaman Admin Online Frozen Food',
            'products' => $products,
            'customer' => $customer,
            'Type' =>$Type,
            'kd'=>$kd,
            'log' => $log,
            'webname' => 'Data Transaksi'
           ]);
    }


    public function AddTransaksi(Request $request)
    {
        $this->validate($request,[
            'no_transaksi'        => 'required',
            'tanggal_transaksi'   => 'required',
            'customer'            => 'required',
            'id_product'          => 'required', 
            'jumlah_beli'         => 'required', 
            'staf'                => 'required', 
            'type_transaksi'      => 'required', 
            'total_transaksi'     => 'required', 

        ]);
        $AddTransaksi = DB::table('tabel_transaksi')->insert([
            'no_transaksi'=> $request->no_transaksi,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'customer'=>$request->customer,
            'id_product'=> $request->id_product,
            'jumlah_beli'=> $request->jumlah_beli,
            'staf'=> $request->staf,
            'type_transaksi'=> $request->type_transaksi,
            'total_transaksi'=>str_replace(".","",$request->total_transaksi),
        ]);
        //dd($AddTransaksi);
        if($AddTransaksi){
            return redirect('Transaksi')->with(['success' => 'Data successfully save !']);
        }else{
            return redirect('Transaksi')->with(['error' => 'Data failed to save !']);
        }
       
    }

    public function UpdateDataTransaksi(Request $request, $id)
    {

        $UpdateTransaksi = DB::table('tabel_transaksi')->where('no_transaksi',$id)->update([
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'customer'=>$request->customer,
            'id_product'=> $request->id_product,
            'jumlah_beli'=> $request->jumlah_beli,
            'staf'=> $request->staf,
            'type_transaksi'=> $request->type_transaksi,
            'total_transaksi'=>$request->total_transaksi,
         ]);

         if($UpdateTransaksi){
            //redirect dengan pesan sukses
            return redirect('Transaksi')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('Transaksi')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
       
    }

    public function LaporanData()
    {
        $Transaksi = DB::select('select no_transaksi,tanggal_transaksi,customer,id_product,type_transaksi,tabel_customer.name_customer , products.name ,jumlah_beli,users.name AS nama_user ,tabel_type_transaksi.name_type, total_transaksi  from tabel_transaksi
        inner join products on tabel_transaksi.id_Product = products.id
        inner join tabel_customer on tabel_transaksi.customer = tabel_customer.id_customer 
        inner join tabel_type_transaksi on tabel_transaksi.type_transaksi = tabel_type_transaksi.id_type
        inner join users on tabel_transaksi.staf = users.id
        ORDER BY no_transaksi DESC');
        $ambilproducts = DB::table('products')->get();
        $ambilcustomer = DB::table('tabel_customer')->get();
        $Type = DB::table('tabel_type_transaksi')->get();
        $log = (Auth::User()->id);
        return view('v_admin.v_transaksi.v_report.laporan',[
            'title' => 'Laporan Data | Halaman Admin Online Frozen Food',
            'Transaksi' =>$Transaksi,
            'webname' => 'Data Laporan',
            'ambilproducts' => $ambilproducts,
            'log' => $log,
            'ambilcustomer' => $ambilcustomer,
            'Type' =>$Type,
           ]);
    }

    public function CetakLaporan()
    {

        
        $Transaksi = DB::select('select no_transaksi,tanggal_transaksi,customer,id_product,type_transaksi,tabel_customer.name_customer , products.name ,jumlah_beli,users.name AS nama_user ,tabel_type_transaksi.name_type, total_transaksi  from tabel_transaksi
        inner join products on tabel_transaksi.id_Product = products.id
        inner join tabel_customer on tabel_transaksi.customer = tabel_customer.id_customer 
        inner join tabel_type_transaksi on tabel_transaksi.type_transaksi = tabel_type_transaksi.id_type
        inner join users on tabel_transaksi.staf = users.id
        ORDER BY no_transaksi DESC LIMIT 25');
        $ambilproducts = DB::table('products')->get();
        $ambilcustomer = DB::table('tabel_customer')->get();
        $Type = DB::table('tabel_type_transaksi')->get();
        $log = (Auth::User()->id);

        return view('v_admin.v_transaksi.v_report.cetak',[
            'title' => 'Laporan Data | Halaman Admin Online Frozen Food',
            'Transaksi' =>$Transaksi,
            'webname' => 'Data Laporan',
            'ambilproducts' => $ambilproducts,
            'log' => $log,
            'ambilcustomer' => $ambilcustomer,
            'Type' =>$Type,
           ]);
    }

    
}
