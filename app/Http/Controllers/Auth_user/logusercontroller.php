<?php

namespace App\Http\Controllers\Auth_user;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logusercontroller extends Controller
{
   

    public function loginuser(){
        return view('v_shopcoffe/v_auth/v_login',[
            'title' => 'Login'
        ]);
    }
    public function Logwebusers(){
        dd('Login Users');
     }
     public function FormlogiAdmin(){
        return view('v_acount_admin/v_login',[
            'title' => 'Login'
        ]);
    }
    public function LogwebAdmin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'email_verified_at' => 1])) {
            $request->session()->regenerate();
            return redirect('Dashboardshow');  
            //dd('sukses');
            } else {
                return redirect()->intended('LoginAdmin')->with('logerror','Password salah ! email belum di verifikasi ');
            }
   
    }
    public function keluar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('LoginAdmin')->with('Logout','You Successfully Logout');
    }

    //Proses Update Verifikasi
    public function aktifasi_email(Request $request,$email)
    {   
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $email = $request->email;
        $verifon = 1;
        $verif = DB::table('users')
        ->where('email', $email)
        ->update(['email_verified_at' => $verifon ]);

        if($verif){
            return redirect('konfirmasi')->with(['updatesuccess' => 'Verifikasi Email Berhasil. Silakan Login!']);  
        }
        return redirect('verify_email')->with(['updateerorr' => 'Verifikasi Email Gagal !, Ketikan Emal Yang anda daftarkan!']);

         
    }

    public function verify_email(){     
        return view('emails/auth/formverif',[
            'title' => 'Verifition Email'
        ]);
    }

    public function konfirmasi_email()
    {
            return view('emails/auth/konfirmasi');
       
    }
    
    
    

      
    



    
}
