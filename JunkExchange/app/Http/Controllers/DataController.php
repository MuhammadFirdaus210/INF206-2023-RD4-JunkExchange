<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Datas;


class DataController extends Controller
{
    public function index() 
    {
        $datas = Datas::all();
        return view ('daftar')->with('datas', $datas);
    }
 
    public function dash()
    {   
        $user = Auth::user();
        return view('dasbor')->with('user', $user);
    }
 
    public function store(Request $request)
    {
        // $requestData->user_id = auth()->user()->id;
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        Datas::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'category' => $request->category,
            'weight'=> $request->weight,
            'photo' => $path,
            'number' => $request->number
        ]);
        return redirect('datas')->with('flash_message', 'data Added!');  
    }
}