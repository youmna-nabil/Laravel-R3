<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyEmail;

class ExampleController extends Controller
{
    //method
    public function show(){
        return "welcome to my first controller";
    }

    public function upload(Request $request){

        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';

    }
    public function createSession(){

        session()->put('testsession', 'session value');
        session()->forget('testsession');
        return "session created" . "<br>". session('testsession');
    }

    public function sendcontactinfo(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'phone'=>'required|string',
            'subject'=>'required',
            'message'=>'required'
        ]);
        Contact::create($data);
        Mail::to('info@example.com')->send(
            new NotifyEmail($data)

        );

        return 'send contact info'. $data['name'];
    }

    public function message(){
        return [
            'name.required'=>'name is required',
            'email.required'=>'email is required',
            'phone.required'=>'phone is required',
            'subject.required'=>'subject is required',
            'message.required'=>'message is required',
            ];
        }
}
