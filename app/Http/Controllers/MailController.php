<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ConfirmationEmail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        Mail::to('cducourtieux@student.efp.be')
        ->cc($request->email)
        ->send(new confirmationEmail());

        return redirect('/');
    }
}
