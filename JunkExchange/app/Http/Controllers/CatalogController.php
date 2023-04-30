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
 
 
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = $path;
        Datas::create($requestData);
        return redirect('datas')->with('flash_message', 'data Added!');}
}