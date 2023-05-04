<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;

class CatalogController extends Controller
{   



    public function index() 
    {

        $datas = Datas::all();
        return view ('catalog')->with('datas', $datas);
    }

}