<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\MarkdownContactFormMail;

class PageController extends Controller
{

    public function index()
    {
        return view('guest.welcome');
    }

    public function about()
    {
    }
}
