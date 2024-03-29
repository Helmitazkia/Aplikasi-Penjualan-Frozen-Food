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
        $data = DB::select('select * from tabel_customer');
        return view('v_customer/v_index_customer',[
            'data'=> $data,
            'title' => 'Customer-show',
            'webname' => 'Add New Customer'
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
            'name_customer'      => ['required', 'string'],
            'jenis_kelamin'      => ['required'],
            'email'              => ['required', 'email', 'unique:tabel_customer', 'min:10'],
            'phone'              => ['required','unique:tabel_customer','min:11'],
            'alamat_customer'     => ['required','min:10'],
        ]);
        $createcustomer = DB::table('tabel_customer')->insert([
            'name_customer' => $request->name_customer,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'phone' => $request->phone, 
            'alamat_customer' => $request->alamat_customer, 
           
        ]);
        //dd($createcustomer);
        if($createcustomer){
            //redirect dengan pesan sukses
            return redirect('Datacustomer')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('Datacustomer')->with(['error' => 'Data failed to save !']);
        }    
    }

    //Delete Data customer
    public function DeleteDatacustomer($id)
    {
        $deleted = DB::delete("DELETE FROM tabel_customer WHERE id_customer = $id ");
        return redirect('Datacustomer');
    }

    public function Updatedatacustomer(Request $request, $id)
    {
      $request->validate([
          'name_customer'    => 'required',
          'jenis_kelamin'    => 'required',
          'email'            => 'required',
          'phone'            => 'required',   
          'alamat_customer'  => ['required','min:10']    
      ]);
       $UpdateData = DB::table('tabel_customer')->where('id_customer',$id)->update([
          'name_customer'    => $request->name_customer,
          'alamat_customer'   => $request->alamat_customer,
          'jenis_kelamin'    => $request->jenis_kelamin,
          'email'            => $request->email,
          'phone'            => $request->phone,
          
       ]);
       if($UpdateData){
          //redirect dengan pesan sukses
          return redirect('Datacustomer')->with(['updatesuccess' => 'Data Edited Successfully !']);
      }else{
          //redirect dengan pesan error
          return redirect('Datacustomer')->with(['updateerorr' => 'Data Failed to Edit !']);
      }
    }

}
