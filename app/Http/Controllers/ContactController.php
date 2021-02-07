<?php
namespace App\Http\Controllers;
use Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getContract(){
        Log::info('getContract----------------------');
        return view('contact');
    }

    public function postContract(Request $request) {

            Log::info('postContract----------------------');

            Log::info('txtName  : '.$request->get('txtName'));
            Log::info('txtEmail : '.$request->get('txtEmail'));
            Log::info('txtPhone : '.$request->get('txtPhone'));
            Log::info('txtMsg   : '.$request->get('txtMsg'));

            $mail_to = "ng.atsadawut@gmail.com";

            $data['txtName'] = $request->get('txtName');
            $data['txtEmail'] = $request->get('txtEmail');
            $data['txtPhone'] = $request->get('txtPhone');
            $data['txtMsg'] = $request->get('txtMsg');

            Mail::send('emails.mail', $data, function($message) {

                $message->to(['ng.atsadawut@gmail.com','patpolpatpol@gmail.com'], 'Receiver Name')
    
                        ->subject('Tuts Make Mail');
            });

            // Mail::raw('Hi, welcome to laravelarticle.com!', function ($mail) {
            //     $mail->from('info@example.com');
            //     $mail->to($mail_to);
            //     $mail->subject('Welcome E-mail');
            //     });
        
                
            return 'Successfully send';
    }

    
}

