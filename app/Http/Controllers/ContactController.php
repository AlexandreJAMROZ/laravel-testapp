<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        // route --> /contact
        return view('contact.index');
    }
}
