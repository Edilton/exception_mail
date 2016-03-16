<?php namespace ExceptionMail\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use SendMail;

class ExceptionMailHandler extends ExceptionHandler {
    

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        $send = new SendMail();
        $send->send($e);        
        return parent::render($request, $e);
    }



}