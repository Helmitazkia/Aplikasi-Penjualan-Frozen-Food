<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Illuminate\Validation\ValidationExecption;
use Illuminate\Support\Facades\Validator;
use\Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class controller_home extends Controller
{
    //Tampil New Product
    public function Newproduct()
    {
        $data = DB::select('select * from products ORDER BY id DESC LIMIT 12');
        return view('Loyout_product/content_product/v_home',[
            'data'=> $data,
            'title' => 'Katalog | Sistus Belanja Online Frozen food'
            ]);
    }
}
