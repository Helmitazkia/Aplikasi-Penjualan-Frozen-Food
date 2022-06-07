<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Validator;
use\Illuminate\Support\Facades\DB;

//Buat email
use Mail;
use App\Mail\Emailcustomer;
use Illuminate\Support\Str;

class controller_auth extends Controller
{
    public function VformRegistrasi()
    {
        return view('Loyout_product/content_product/v_acount', [
            'title' => 'Acount | Sistus Belanja Online Frozen food'
        ]);
    }

    public function Registrasticustomer(Request $request)
    {   

         //Membuat validasi inputan 
         $request->validate([
            'name_customer' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email', 'unique:tabel_customer', 'min:7'],
            'jenis_kelamin'      => ['required'],
            'phone' => ['required','unique:tabel_customer'],
            'alamat_customer' => ['required', 'string', 'min:15'],
            'password' => ['required','min:6','confirmed','required_with:password_confirmation'],
        ]);
        $createcustomer = DB::table('tabel_customer')->insert([
            'name_customer' => $request->name_customer,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'email_verified_at'=>Null,
            'email_verification_code' =>Str::random(40),
            'phone' => $request->phone, 
            'alamat_customer' => $request->alamat_customer, 
            'password' => Hash::make($request->password)
        ]);
        //dd($createcustomer);
        Mail::to($request->email)->send(new Emailcustomer($createcustomer));
            session()->flash('message', 'Terima kasih, Anda telah Terdaftar. Silakan periksa email Anda untuk memverifikasi akun Anda');
           return redirect('/Registrasi');
        }  

        public function verify_email(){     
            return view('emails/Vformverif_customer',[
                'title' => 'Verifition Email | situs belanja online frozen food'
            ]);
        }
        
    //Proses Update Verifikasi
    public function aktifasi_email(Request $request, $email){     
       
        $email = $request->email;
        $verifon = 1;
        $updateverif = DB::table('users')
        ->where('email', $email)
        ->update(['email_verified_at' => $verifon]);

       if ($updateverif) {
        return redirect('konfirmasi')->with(['updatesuccess' => 'Email Verification Successfully.Please Login!']);
       }else{
        return redirect('konfirmasi')->with(['updateerorr' => 'Your email failed to verify !']);
       }
        
    }
    }

