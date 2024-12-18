<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Http\Request;

class ChatRoomController extends Controller
{

    public function index($id = null){

        if($id != null){
            $chats = ChatRoom::find($id)->chat;
            // dd($chats);
            return view('home.chatroom', compact('id','chats'));
        }else{
            $id = null;
        }
        return view('home.chatroom', compact('id'));
    }

    public function delete($id){
        ChatRoom::destroy($id);
        return redirect()->route('chat.index');
    }

}
