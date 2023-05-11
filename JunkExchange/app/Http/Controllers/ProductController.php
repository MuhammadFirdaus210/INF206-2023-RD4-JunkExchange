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
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        
        $item = Datas::find($id);
        $userTarget = User::find($item->user_id);
        $userAct = Auth::user();
        Product::create([
            'user_id' => auth()->user()->id,
            'status' => null,
            'name' => $request->name,
            'weight'=> $request->weight,
            'category' => $request->category,
            'description' => $request->description,
            'number' => $request->number,
            'photo' => $path
        ]);
        Notification::send($userTarget, new exchangeNotif($item->name, $userAct->id));
        return redirect('kirimpengajuan');
    }
}