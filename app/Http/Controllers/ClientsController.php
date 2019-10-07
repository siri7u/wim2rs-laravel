<?php

namespace App\Http\Controllers;
use App\Client;


use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index(){
        //$clients = \App\Client::all();
        $clients = \App\Client::where('status', 1)->get();

        return view('clients.index', ['clients' => $clients]);
       }

    public function store()
       {

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        $name = request('name');
        $email = request('email');
        $status = request('status');

        $client = new \App\Client();
        $client->name = $name;
        $client->email = $email;
        $client->status = $status;
        $client->save();
        return back();
       }


    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        $name = request('name');
        $email = request('email');
        $status = request('status');

        $client->name = $name;
        $client->email = $email;
        $client->status = $status;

        $client->update();

        return redirect('/clients/'. $client->id);

    }

    public function destroy(Client $client){
        $client->delete();
        return redirect('/clients');
    }

    public function create(){
        $clients = \App\Client::where('status', 1)->get();

        return view('clients.create', ['clients' => $clients]);

    }






}
