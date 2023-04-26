<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Datas;


class DataController extends Controller
{
    public function index() 
    {
        $datas = Datas::all();
        return view ('daftar')->with('datas', $datas);
    }
 
    public function create()
    {
        return view('dasbor');
    }
 
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = $path;
        Datas::create($requestData);
        return redirect('datas')->with('flash_message', 'data Added!');  
    }
}