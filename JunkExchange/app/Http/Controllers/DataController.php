<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Notifications\globalNotify;
use App\Models\User;
use App\Models\Datas;
use App\Models\Product;


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
        $status = Product::find($user->id);
        return view('dasbor', [
            'status' => $status
        ])->with('user', $user);
    }

    public function approval($id)
    {   
        $user = Auth::user();
        $userTarget = User::find($id);
        $contact = Datas::find($user->id);
        $status = Product::where('id', $user->id)->update(['status' => 'Disetujui']);
        $message = 'Diterima';
        Notification::send($userTarget, new globalNotify($message, $contact->number));
        return redirect('home');  
    }
    
    public function rejected($id)
    {   
        $user = Auth::user();
        $userTarget = User::find($id);
        $status = Product::where('id', $user->id)->update(['status' => 'Disetujui']);
        $message = 'Ditolak';
        Notification::send($userTarget, new globalNotify($message, $contact->number));
        return redirect('home');  
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