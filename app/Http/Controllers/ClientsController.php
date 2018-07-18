<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return view('cadastrar', ['res' => getenv('APP_URL')]);
    }

    public function cadastrar()
    {
        return view('cadastrar', ['res' => getenv('APP_URL')]);
    }
}
