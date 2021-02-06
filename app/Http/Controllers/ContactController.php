<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function getContract(){
        Log::info('getContract----------------------');
        return view('contact');
    }

    public function postContract(Request $request) {
        {

            Log::debug('postContract----------------------');
            // // Form validation
            // $this->validate($request, [
            //     'name' => 'required',
            //     'email' => 'required|email',
            //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            //     'subject'=>'required',
            //     'message' => 'required'
            //  ]);
    
            // //  Store data in database
            // Contact::create($request->all());
    
            // //  Send mail to admin
            // \Mail::send('mail', array(
            //     'name' => $request->get('name'),
            //     'email' => $request->get('email'),
            //     'phone' => $request->get('phone'),
            //     'subject' => $request->get('subject'),
            //     'user_query' => $request->get('message'),
            // ), function($message) use ($request){
            //     $message->from($request->email);
            //     $message->to('digambersingh126@gmail.com', 'Admin')->subject($request->get('subject'));
            // });
    
            // return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        }
    }
    
}

