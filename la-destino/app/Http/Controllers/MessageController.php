<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
    {
//        show view
    public function message(){
        return view('font-panel.message');
    }



    public function saveMessage(Request $request){
//        save view
        Message::create($request->all());
    }
}
