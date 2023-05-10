<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;
use App\Models\User;
use App\Notifications\NotifContri;
use Illuminate\Support\Facades\Notification;


class ProductController extends Controller
{
    public function index($id)
    {
        $user = User::all();
        Notification::send($user, new NotifContri($id->name));
        return view('product', ["item" => Datas::find($id)]);
    }
}
