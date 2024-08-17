<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        $toEmail='basharatalidogar15@gmail.com';
        $moreuser='basharatalidogar14@gmail.com';
        $message='Hello Mail send you by Basharat Ali to check mail is working or not !';
        $subject="for check mail confirmation";
        $details=[
           'name'=>'John Doe',
           'product'=>'Test Product',
           'price'=>'$3400',
        ];
        Mail::to($toEmail)->cc($moreuser)->send(new welcomeMail($message,$subject,$details));
    }
}
