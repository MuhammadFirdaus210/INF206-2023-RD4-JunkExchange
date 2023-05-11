<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Notifications\exchangeNotif;
use App\Models\Product;
use App\Models\Datas;
use App\Models\User;




class ProductController extends Controller
{

    public function index($id) 
    {    
        $item = Datas::find($id);
        return view('product')->with('item', $item);
    }
 
    public function store(Request $request, $id)
    {   
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = $path;
        Product::create($requestData);
        $users = User::all();
        $item = Datas::find($id);
        Notification::send($users, new exchangeNotif($item->name));
        return redirect('kirimpengajuan');
    }


}