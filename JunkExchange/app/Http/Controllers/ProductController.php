<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;

class ProductController extends Controller
{
    public function index($id) 
    {    
        return view('product', [
            "item" => Datas::find($id)
        ]);
    }
}
