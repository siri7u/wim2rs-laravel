<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $clients = \App\Client::all();
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


}
