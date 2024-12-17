<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class TestController extends Controller
{
    public function sendEmail()
    {
        // You can replace this with any email you want for testing
        $email = 'testuser@example.com';

        // Send the email
        Mail::to($email)->send(new WelcomeMail((object) ['name' => 'Test User']));

        return back()->with('success', 'Email has been sent!');
    }
}
