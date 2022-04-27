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

class customer_controller extends Controller
{
    public function Showcustomer(Request $request)
    {
        $data = DB::table('tabel_customer')->get();
        //dd($data);
        return view('v_customer/v_index_customer',compact('data',$data),[
         'title' => 'Customer-show',
         'webname' => 'Data Customer'
        ]);
    }

    public function FormaddCustomer(){
        return view('v_customer/v_add_customer',[
            'title' => 'Customer-show',
            'webname' => 'Add New Customer'
        ]);
    }

    public function Addcustomer(Request $request)
    {
        
        $request->validate([
            'name_customer'      => 'required', 'string', 'min:5',
            'jenis_kelamin'      => 'required', 'email',
            'email'              => 'required', 'unique:tabel_customer', 'min:15',
            'email_verified_at'  => 'required',
            'password'           => 'required',
            'phone'              => 'required', 'unique:tabel_customer',
        ]);

        $createcustomer = DB::table('tabel_customer')->insert([
            'name_customer' => $request->name_customer,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'phone' => $request->phone, 
            'password' => Hash::make($request->password)
        ]);

        dd($createcustomer);
           
    }
}
