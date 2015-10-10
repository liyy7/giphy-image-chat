<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Todo;

class AppController extends Controller
{
    public function getApp()
    {
        $todos = Todo::whereStatus(2)->get();
        return view('app', ['todos' => $todos]);
    }
}
