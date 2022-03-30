<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $req){
      $data = [
        'email' => $req -> email,
        'message' => $req -> message,
      ];
      Mail::to($data['email']) -> send(new ContactMail($data));
      return 'Thanks for reaching out!';
    }
}
