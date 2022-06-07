<?php

namespace App\Http\Controllers\Auth_user;

use App\Models\User;

use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Buat email
use Mail;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Str;

class regisusercontroller extends Controller
{

    public function FormUserAdmin()
    {
        return view('v_acount_admin/v_register', [
            'title' => 'Registration'
        ]);
    }
    
    public function CreateUser(Request $request)
    {
        //Membuat validasi inputan 
        $request->validate([
            'username' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email', 'unique:Users'],
            'telepon' => ['required'],
            'alamat' => ['required', 'string', 'min:15'],
            'password' => ['required', 'min:6'],
            'foto' => ['required']

        ]);

        $tambah = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'phone' => $request->telepon,
            'image' => $request->foto,
            'addres' => $request->alamat,
            'password' => Hash::make($request->password),
            // belom
            'email_verified_at'=>Null,
            'email_verification_code' =>Str::random(40),
        ]);
        // belom
        Mail::to($request->email)->send(new EmailVerificationMail($tambah));
        //dd($tambah);
        session()->flash('message', 'Thank you, you have Registered. Please check your email to verify your account');
        //view Users
        return redirect('/LoginAdmin');
    }

}
