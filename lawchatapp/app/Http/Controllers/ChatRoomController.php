<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatRoomController extends Controller
{

    public function index($id = null){

        $history = ChatRoom::where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->get();
        if($id != null){
            $chats = ChatRoom::find($id)->chat;

            // dd($chats);
            return view('home.chatroom', compact('id','chats','history'));
        }else{
            $id = null;
        }
        return view('home.chatroom', compact('id','history'));
    }

    public function delete($id){
        ChatRoom::destroy($id);
        return redirect()->route('chat.index');
    }

}
