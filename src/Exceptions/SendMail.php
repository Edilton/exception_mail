<?php namespace ExceptionMail\Exceptions;

use Illuminate\Support\Facades\Mail;

class SendMail {
   

   public function send($e)
   {
        Mail::send('exceptionmail.exeption', ['e' => $e, 'session' => \Session::all()], function ($message) use($e){
            $message->to(config('exeptionmailconfig.mail'))->subject($e->getMessage());
            foreach (config('exeptionmailconfig.cc') as $email) {
               $message->cc($email);
            }
        });

   }

}