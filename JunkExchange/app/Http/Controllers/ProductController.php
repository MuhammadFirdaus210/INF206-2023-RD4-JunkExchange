<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Datas;
<<<<<<< HEAD
use App\Models\User;
use App\Notifications\NotifContri;
use Illuminate\Support\Facades\Notification;
=======
use App\Http\Controllers\DataController;

>>>>>>> main


class ProductController extends Controller
{
<<<<<<< HEAD
    public function index($id)
    {
        $user = User::all();
        Notification::send($user, new NotifContri($id->name));
        return view('product', ["item" => Datas::find($id)]);
=======
   
    public function index($id) 
    {    
        return view('product', [
            "item" => Datas::find($id),
            "id" => $id
        ]);
>>>>>>> main
    }
    public function create(Request $request)
    {
        $requestProduct = $request->all();
        
        Product::create($requestProduct);
        return view('product');
    }
 
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = $path;
        Product::create($requestData);
        return redirect('kirimpengajuan');
    }
}