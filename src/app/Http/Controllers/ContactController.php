<?php

namespace App\Http\Controllers;

use Facade\Ignition\Exceptions\ViewExceptionWithSolution;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);
    }
}
