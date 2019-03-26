<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{

    //Submit message from contact form
    public function submit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'

      ]);

      //Create a new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      //Save message
      $message->save();

      //Redirect
      return redirect('/')->with('success', 'Message Sent');
    }


    //Get messages from Message table
    public function getMessages(){
      $messages = Message::all();
      return view('messages')->with('messages', $messages);
    }
}
