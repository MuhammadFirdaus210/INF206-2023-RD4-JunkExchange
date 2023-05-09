<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;

class CatalogController extends Controller
{   


    
    public function index()
    {   

        if(request('search')) {
            $datas = Datas::where('name', 'LIKE', '%' .request('search'). '%')->get();
        }
        else {
            $datas = Datas::all();
        }
        return view ('catalog')->with('datas', $datas);

    }

}