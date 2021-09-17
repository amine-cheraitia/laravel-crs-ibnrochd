<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('TestMiddleware');
    }
    public function liste()
    {
        return " la liste de(s) client(s)";
    }
}