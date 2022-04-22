<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customer_controller extends Controller
{
    public function Showcustomer(Request $request)
    {
        $data = DB::table('tabel_customer')->get();
        //dd($data);
        return view('v_customer/v_index_customer',compact('data',$data),[
         'title' => 'Data Pelanggan',
         'webname' => 'Customer'
        ]);
    }
}
