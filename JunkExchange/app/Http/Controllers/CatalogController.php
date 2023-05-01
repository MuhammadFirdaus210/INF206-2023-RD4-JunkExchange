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
 
 
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = $path;
        Datas::create($requestData);
        return redirect('datas')->with('flash_message', 'data Added!');}
}