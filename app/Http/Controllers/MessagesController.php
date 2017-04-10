<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function index(){
        return view('message');
    }

    public function send(Request $request)
    {
        $message = new Message;
        $message->author = $request->author;
        if ( $request->topic ){
            $topic = $request->topic;
        } else {
            $topic = 'Not Specified';
        }
        $message->topic = $topic;
        $content = $request->content;
        $content = str_replace("\r\n", "<br>", $content);
        $message->content = $content;
        $message->save();
        
        return view('message');
    }

    public function read()
    {
        if (Auth::check() && Auth::user()->role === "ADMIN"){
            $messages = Message::all();
            return view('read', ['messages' => $messages]);
        }
        return view('home');
    }
}
