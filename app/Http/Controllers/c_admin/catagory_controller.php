<?php

namespace App\Http\Controllers\c_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;


class catagory_controller extends Controller
{

    public function DataProduct()
    {
        $data = DB::select('select products.id,name,price,description,catagories,stok ,catagory.name_catagory,image ,status ,tabel_status.name_status from products
        INNER JOIN catagory ON products.catagories = catagory.id
        INNER JOIN tabel_status ON products.status = tabel_status.id_status');
        $ambilcatagory = DB::table('catagory')->get();
        $ambilstatus = DB::table('tabel_status')->get();
        //dd($product_count);
        return view('v_admin.product.index_product',[
            'data'=> $data,
            'ambilcatagory' => $ambilcatagory,
            'ambilstatus' => $ambilstatus,
            'title' => 'Data Product | Sistus Belanja Online Frozen food',
            'webname' => 'Semua Product',
            ]);
    }
    public function showcategory()
    {
        $data = DB::table('catagory')->get();
        return view('v_admin.v_catagory.v_index_catagoty',compact('data',$data),[
            'title' => 'Catagory',
            'webname' => 'Data Catagory Product'
           ]);
    }

    public function Adddatacatagory(Request $request)
    {
        $this->validate($request,[
            'catagoryname' => 'required|max:20|unique:catagory,name_catagory'
        ]);
        $addcatagory = DB::table('catagory')->insert([
            'name_catagory'=> $request->catagoryname,
        ]);
        if($addcatagory){
            //redirect dengan pesan sukses
            return redirect('Catagory')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('Catagory')->with(['error' => 'Data failed to save !']);
        }
       
    }

    //
    public function UpdateDataCatagory(Request $request, $id)
    {
        $request->validate([
            'catagoryname'       => 'required'     
        ]);
        $data = DB::table('catagory')->where('id',$id)->update([
            'name_catagory'       => $request->catagoryname,
         ]);

         if($data){
            //redirect dengan pesan sukses
            return redirect('Catagory')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('Catagory')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
       
    } 
    

    //Delete catagory
    public function DeleteCatagory($id)
    {
        $deleted = DB::table('catagory')->where('id',$id)->delete();
        return redirect('Catagory');

    }

    //Data Status
    public function showstatus()
    {
        $data = DB::table('tabel_status')->get();
        //dd($data);
        return view('v_admin/v_catagory/v_status/v_index_status',compact('data',$data),[
            'title' => 'Status-Show',
            'webname' => 'Data Status Product'
           ]);
    }

    public function Adddatastatus(Request $request)
    {
        $this->validate($request,[
            'name_status' => 'required|max:20|unique:tabel_status,name_status'
        ]);
        $addstatus = DB::table('tabel_status')->insert([
            'name_status'=> $request->name_status,
        ]);
        //dd($addstatus);
        if($addstatus){
            //redirect dengan pesan sukses
            return redirect('ShowStatus')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('ShowStatus')->with(['error' => 'Data failed to save !']);
        }
       
    }

    public function UpdateDataStatus(Request $request, $id)
    {
        $request->validate([
            'name_status'       => 'required'     
        ]);
        $data = DB::table('tabel_status')->where('id_status',$id)->update([
            'name_status'       => $request->name_status,
         ]);

         if($data){
            //redirect dengan pesan sukses
            return redirect('ShowStatus')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('ShowStatus')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
       
    } 

       //Delete catagory
       public function DeleteStatus($id)
       {
           $deleted = DB::table('tabel_status')->where('id_status',$id)->delete();
           return redirect('ShowStatus');
   
       }

       public function Showkurir()
    {
        $data = DB::table('tabel_kurir')->get();
        //dd($data);
        return view('v_admin.v_kurir.v_index_kurir',compact('data',$data),[
            'title' => 'Data Kurir',
            'webname' => 'Kurir yang Tersedia'
           ]);
    }

    

    public function CountCatagoty()
    {
        $sosis = DB::table('products')
        ->where('catagories', 1)->count();
        $Nugget  = DB::table('products')
        ->where('catagories', 2)->count();
        $Cireng = DB::table('products')
        ->where('catagories', 3)->count();
        $Bakso = DB::table('products')
        ->where('catagories', 4)->count();
        $Buah = DB::table('products')
        ->where('catagories', 5)->count();
        $Sambal = DB::table('products')
        ->where('catagories', 6)->count();
        return view('Loyout_product/content_product/v_blog',[
            'sosis' =>$sosis,
            'Nugget' =>$Nugget,
            'Cireng' =>$Cireng,
            'Bakso' =>$Bakso,
            'Buah' =>$Buah,
            'Sambal' =>$Sambal,
            'title' => 'Blog | Sistus Belanja Online Frozen Food',
        ]);

       
    } 

    
}
