<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function cadastrarCliente()
    {
        return view('clients.create');
    }

    public function cadastrar(Request $request)
    {
        $c = new Client();
        $c->name = $request->get('name');
        $c->email= $request->get('email');
        $c->save();
        return redirect()->to('/cliente/');
    }
}
