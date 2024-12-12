<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //

    public function add(Request $request, $id=null){

        // dd($id);
        if ($id == null){
            $chatRoom = ChatRoom::create([
                "user_id" => Auth::user()->id
            ]);
            $id = $chatRoom->id;
        }

        $chat = Chat::create([
            "chat_room_id" => $id,
            "content" => $request->content,
            "is_generated"=>0
        ]);
        $chatResponse = Chat::create([
            "chat_room_id" => $id,
            "content" => $request->content,
            "is_generated"=>1
        ]);

        // $response = Chat::create([
        //     "chat_room_id" => $chatRoom->id,
        //     "content" => $request->content,
        //     "is_generated"=>1
        // ]);
        return redirect("chat/".$id);
    }


}
