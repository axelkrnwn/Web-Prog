<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatRoomController extends Controller
{

    public function index(){
        return view('home.chatroom');
    }
}
