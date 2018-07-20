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
        $client = new Client();
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->save();
        return redirect()->to('/cliente/');
    }

    public function editarCliente($id)
    {
        $client = Client::find($id);

        if (!$client) {
            abort(404);
        }

        return view('clients.edit', compact('client'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editar(Request $request, $id)
    {
        $client = Client::find($id);

        if (!$client) {
            abort(404);
        }

        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->save();
        return redirect()->to('/cliente/');
    }

    public function excluir($id)
    {
        $client = Client::find($id);

        if (!$client) {
            abort(404);
        }

        $client->delete();
        return redirect()->to('/cliente/');
    }
}
