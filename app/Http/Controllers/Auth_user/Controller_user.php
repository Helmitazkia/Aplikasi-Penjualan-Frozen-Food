<?php

namespace App\Http\Controllers\Auth_user;

use App\Models\User;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;
use\Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Validation\ValidationExecption;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Controller_user extends Controller
{
    public function Showuser(Request $request)
    {
        $data = DB::table('users')->get();
        //dd($product);
        return view('v_admin/v_user/index',compact('data',$data),[
         'title' => 'Data User',
         'webname' => 'User'
        ]);
    }

    public function Formadduser()
    {
        
        return view('v_admin/v_user/v_add_user',[
            'title' => 'Data User',
            'webname' => 'User'
           ]);
    }

    //Tambah User
    public function Adduser(Request $request)
    {
        
    
        $request->validate([
            'name'    => ['required', 'string', 'min:5'],
            'email'   => ['required', 'email', 'unique:Users'],
            'addres'  => ['required', 'string', 'min:15'],
            'phone'   => ['required'],
            'image'    => 'required|image|file|max:2024|mimes:jpg,png',
            'password' => ['required', 'min:6'],
         

        ]);

        if($request->file('image')){
            $upload = $request->file('image')->store('Profil-image'); 
         }
            

        $createuser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'addres' => $request->addres,
            'phone' => $request->phone,
            'image' => $upload, 
            'password' => Hash::make($request->password)

        ]);

        //dd($createuser);
        if($createuser){
            //redirect dengan pesan sukses
            return redirect('/Datauser')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('/Datauser')->with(['error' => 'Data failed to save !']);
        }
    }

    //Delete Users
    public function DeleteDatauser($id)
    {
        $deleteuser = User::find($id);
        $deleteuser->delete();
        return redirect('/Datauser');

    }

        //Update Users
      public function updateuser(Request $request, $id)
      {
        $request->validate([
           
            'name'    => 'required', 'string', 'min:5',
            'email'   => 'required', 'email', 'unique:Users',
            'addres'  => 'required', 'string', 'min:15',
            'phone'   => 'required',
            'image'   => 'image|file|max:2024|mimes:jpg,png',
            'password' =>'required', 'min:6',
        ]);
        
        //jika ada file yang di upload
        if($request->file('image')){
            //Maka cek , ada ga foto lamanya 
            if($request->fotolama){
                //jika ada maka delete
                Storage::delete($request->fotolama);
                   
            }
            //ganti nama dengan foto yang baru
            $upload = $request->file('image')->store('Profil-image');   
        }else{
            //jika tidak ada file yang di upload maka pake foto yang lama
            $upload  = $request->fotolama;
         }
            
         $updatedata = DB::table('Users')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'addres' => $request->addres,
            'phone' => $request->phone,
            'image' => $upload, 
            'password' => Hash::make($request->password),
            //'updated_at' => gmDate("Y-m-d"),
         ]);

         //dd($data);

         if($updatedata){
            //redirect dengan pesan sukses
            return redirect('/Datauser')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('/Datauser')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
        

      }

      //menambhakna data 
      public function shhow(request $request)
      {
        return redirect('/DataUser')->with(['success' => 'Data telah di simpan !']);
      
      }

   


    
      

       
      

   
  
   
}
