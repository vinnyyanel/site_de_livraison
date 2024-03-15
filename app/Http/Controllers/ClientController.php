<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Portfeuille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $clients = Client::all();
        return view('Client.index',['clients'=>$clients]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $clientData = $request->all();
        if (isset($clientData['Password'])) {
            $clientData['Password'] = Hash::make($clientData['Password']);
        }
        $client =  Client::create($clientData);
         Portfeuille::create(['Client_id'=>$client['id']]);
        return redirect()->route('client.index')->with('success', 'client créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
