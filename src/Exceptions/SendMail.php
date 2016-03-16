<?php namespace ExceptionMail\Exceptions;

use  Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Request;
use  Illuminate\Support\Facades\Session;
    
class SendMail 
{
   protected $data = [];


   public function __construct()
   {
        $this->setData();
   }

   public function send($e)
   { 
        $this->data['e'] = $e;
        Mail::send('exceptionmail::exception',['data' =>  $this->data], function ($message) use($e){
            $message->to(config('exeptionmailconfig.email'))->subject($e->getMessage());
            foreach (config('exeptionmailconfig.cc') as $email) {
               $message->cc($email);
            }
        });

   }

   public function setData()
   {
        $this->data['request']  = Request::all();
        $this->data['header']   = [ 'header' => Request::header(), 
                                    'url' => Request::fullUrl(),
                                    'ip' =>  Request::ip() ];
        $this->data['session']  = Session::all();
        $this->data['user']     = Auth::user()->toArray();
   }

}