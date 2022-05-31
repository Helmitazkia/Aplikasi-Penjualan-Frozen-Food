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

class controller_bukti_pembayaran extends Controller
{
    public function Showbuktipembayaran()
    {
        $data = DB::select('select id_bukti, tabel_bukti.image,tanggal_kirim_bukti,tabel_customer.name_customer,phone, tanggal_transaksi ,products.name,total_transaksi from tabel_bukti
        inner join tabel_transaksi on tabel_bukti.id_transaksi = tabel_transaksi.id_transaksi
        inner join products on tabel_bukti.id_product  = products.id
        inner join tabel_customer on tabel_bukti.id_customer  = tabel_customer.id_customer');
        $ambilcustomer = DB::table('tabel_customer')->get();
        $ambilproduct = DB::table('products')->get();
        //dd($data);
        return view('v_admin/v_bukti_pembayaran/v_index_bukti',[
            'data'  =>$data,
            'ambilcustomer' =>$ambilcustomer,
            'ambilproduct' =>$ambilproduct,
            'title' => 'Data Bukti Pembayaran',
            'webname' => 'Bukti Pembayaran'
           ]);
    }

    
    public function Deletebuktipembayaran($id)
    {
        $deleted = DB::delete("DELETE FROM tabel_bukti WHERE id_bukti = $id ");
        return redirect('BuktiPembayaranCustomer');

    }
}
