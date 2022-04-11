<?php

namespace App\Http\Controllers\c_admin;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
//use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Menampilkan Data Product
    public function Dashboard()
    {
        $data = DB::select('select products.id,name,price,description,catagories,stok ,catagory.name_catagory,image ,status ,tabel_status.name_status from products
        INNER JOIN catagory ON products.catagories = catagory.id
        INNER JOIN tabel_status ON products.status = tabel_status.id_status');
        $ambilcatagory = DB::table('catagory')->get();
        $ambilstatus = DB::table('tabel_status')->get();
        //dd($ambilcatagory);
        return view('v_admin.v_dashboard',[
            'data'=> $data,
            'ambilcatagory' => $ambilcatagory,
            'ambilstatus' => $ambilstatus,
            'title' => 'Dashboard',
            'webname' => 'Dashboard'
            ]);
    }
    //Menampilkan Form Create Product
    public function formaddproduct()
    {
        $data = DB::select('select id , name_catagory from catagory');
        $status = DB::select('select id_status , name_status from tabel_status');
        //dd($data);
        return view('v_admin.product.v_addproduct',[
         'data'    => $data,
         'status'  => $status, 
         'title'   => 'Add New Product',
         'webname' => 'Product'
        ]);
    }

    //Create Product
    public function tambahproduct(Request $request)
    {
        $this->validate($request,[
            'name'       => 'required',
            'price'      => 'required',
            'catagory'   => 'required',
            'image'      => 'required|image|file|max:2024|mimes:jpg,png',
            'desc'       => 'required',
            'stok'       => 'required'
            
            
        ]);
       
        //Jika ada file yang di upload
        if($request->file('image')){
           $uploadimage = $request->file('image')->store('post-image'); 
        }
                         
        $addproduct = DB::table('Products')->insert([
            'name'        => $request->name,
            'price'       => $request->price,
            'catagories'  => $request->catagory,
            'image'       => $uploadimage,
            'description' => $request->desc,
            'stok'        => $request->stok,
            'status'      => $request->status,
           
        ]);

        //dd($addproduct);
 
        //dd($addproduct);
        if($addproduct){
            //redirect dengan pesan sukses
            return redirect('Dashboardshow')->with(['success' => 'Data successfully save !']);
        }else{
            //redirect dengan pesan error
            return redirect('Dashboardshow')->with(['error' => 'Data failed to save !']);
        }
    }

    //Delete Product
    public function DeleteDataproduct($id)
    {
        $deleted = DB::delete("DELETE FROM products WHERE id = $id ");
        return redirect('Dashboardshow');

    }


    //Update Product
      public function updateproduct(Request $request, $id)
      {
        $request->validate([
            'name'       => 'required',
            'price'      => 'required',
            'catagories'   => 'required',
            'image'      => 'image|file|mimes:jpg,png',
            'desc'       => 'required'     
        ]);
       
       //jika ada file yang di upload
       if($request->file('image')){
            //Maka cek , ada ga foto lamanya 
            if($request->fotolama){
                //jika ada maka delete
                Storage::delete($request->fotolama);   
            }
            //ganti nama dengan foto yang baru
            $uploadimage = $request->file('image')->store('post-image');   
        }else{
            //jika tidak ada file yang di upload maka pake  foto yang lama
            $uploadimage  = $request->fotolama;
        }
        

         $data = DB::table('Products')->where('id',$id)->update([
            'name'       => $request->name,
            'price'      => $request->price,
            'catagories' => $request->catagories,
            'image'      => $uploadimage,
            'description'=> $request->desc,
            'stok'       => $request->stok,
            'status'     => $request->status,
         ]);

         //dd($data);

         if($data){
            //redirect dengan pesan sukses
            return redirect('Dashboardshow')->with(['updatesuccess' => 'Data Edited Successfully !']);
        }else{
            //redirect dengan pesan error
            return redirect('Dashboardshow')->with(['updateerorr' => 'Data Failed to Edit !']);
        }
        //dd($data);
      }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
