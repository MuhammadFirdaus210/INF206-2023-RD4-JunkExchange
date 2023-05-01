<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;

class CatalogController extends Controller
{   



    public function index() 
    {
        $blog_posts = [
                "title" => "pertama",
                "slug" => "item-pertama"
        ];

        $datas = Datas::all();
        return view ('catalog', [
            "singleItem" => $blog_posts
        ])->with('datas', $datas);
    }

}