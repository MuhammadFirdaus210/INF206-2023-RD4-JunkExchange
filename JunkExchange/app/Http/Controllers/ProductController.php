<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Datas;
use App\Http\Controllers\DataController;



class ProductController extends Controller
{
   
    public function index($id) 
    {    
        return view('product', [
            "item" => Datas::find($id),
            "id" => $id
        ]);
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