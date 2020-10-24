<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class ContactController extends Controller
{
    public function __invoke(){
        return view('Contact');
    }
    //Manage Message
    public function manageMes(){
        $messages = Message::all();
        return view('ManageMessage',['messages' => $messages]);
    }
    public function send(Request $request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect('/contact');
        
    }
    public function delete($id){
        $messages = Message::find($id);
        $messages->delete();
        return redirect('/message');
    }
}
