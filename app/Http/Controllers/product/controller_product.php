<?php

namespace App\Http\Controllers\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Hash;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class controller_product extends Controller
{
    //Tampil Product
    public function ProductAktif()
    {
        $data = DB::select('select * from products WHERE status = 1
        ORDER BY name ASC');
        $ambilcatagory = DB::select('select * from catagory');
        //dd($data);
        return view('Loyout_product/content_product/v_shop',[
            'data'=> $data,
            'ambilcatagory' =>$ambilcatagory,
            'title' => 'Product'
            ]);
    }

    // public function Tampilcatagorysosis($id)
    // {
        
    //     $data = DB::table('products')
    //         ->join('catagory', 'products.catagories', 'catagory.id')
    //         ->where('catagories',$id)
    //         ->orderBy('products.name', 'ASC');
    //         $data = $data->get();
    //      $ambilcatagory = DB::select('select * from catagory');
    //      return view('Loyout_product/content_product/v_shop',[
    //         'data'=> $data,
    //         'ambilcatagory' =>$ambilcatagory,
    //         'title' => 'Product'
    //         ]);
    // }

    public function Productsosis($id)
    {
        
        $data = DB::table('products')
            ->join('catagory', 'products.catagories', 'catagory.id')
            ->where('catagories',$id)
            ->orderBy('products.name', 'ASC');
            $data = $data->get();
            //dd($data);
         $ambilcatagory = DB::select('select * from catagory');
         return view('Loyout_product/content_product/v_shop',[
            'data'=> $data,
            'ambilcatagory' =>$ambilcatagory,
            'title' => 'Product'
            ]);
    }

    public function Productnugget()
    {
        
        $data = DB::table('products')
            ->join('catagory', 'products.catagories', 'catagory.id')
            ->where('catagories',3)
            ->orderBy('products.name', 'ASC');
            $data = $data->get();
            //dd($data);
         $ambilcatagory = DB::select('select * from catagory');
         return view('Loyout_product/content_product/v_shop',[
            'data'=> $data,
            'ambilcatagory' =>$ambilcatagory,
            'title' => 'Product'
            ]);
    }
}
