<?php

namespace App\View\Components;

use App\Models\ChatRoom;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd(Auth::user()->id);
        $history = ChatRoom::where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->get();
        // dd($history);    
        return view('components.sidebar',compact('history'));
    }
}
