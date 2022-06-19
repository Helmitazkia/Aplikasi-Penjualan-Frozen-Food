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
    public function AllProductdanAktif()
    {
        $data = DB::select('select * from products WHERE status = 1
        ORDER BY name ASC');
        return view('Loyout_product/content_product/v_shop',[
            'data'=> $data,
            'title' => 'Product'
            ]);
    }

    public function ProductSosis()
    {
        
        $data = DB::table('products')
        ->where('catagories', 1)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }

    public function ProductNugget()
    {
        
        $data = DB::table('products')
        ->where('catagories', 2)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }

    public function ProductCireng()
    {
        
        $data = DB::table('products')
        ->where('catagories', 3)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }

    public function ProductBakso()
    {
        
        $data = DB::table('products')
        ->where('catagories', 4)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }

    public function ProductBuah()
    {
        
        $data = DB::table('products')
        ->where('catagories', 5)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }

    public function Productsambal()
    {
        
        $data = DB::table('products')
        ->where('catagories', 6)->get();
        return view('Loyout_product/content_product/v_shop',[
        'data'=> $data,
        'title' => 'Product'
        ]);
    }


    public function Detailproductaktif($id)
    {
        
    $datadetail = DB::table('products')
        ->join('catagory', 'products.catagories', 'catagory.id')
        ->where('products.id',$id)->get();
        $product = DB::select('select *from products ORDER BY id DESC LIMIT 12');
     return view('Loyout_product/content_product/V_detail_Product/v_detail_product',[
        'datadetail'=> $datadetail,
        'product' =>$product,
        'title' => 'Detail | Sistus Belanja Online Frozen food'
        ]);
    }

}
