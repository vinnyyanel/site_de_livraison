<?php

namespace App\Http\Controllers;

use App\Http\Requests\TachesRequest;
use App\Models\Client;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tache = Tache::all();
        return view('tache.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tache.create');
    }

    public function creat(string $id)
    {
        return view('tache.create',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TachesRequest $request,$id)
    {
        $tache = $request->all();

        Tache::create($tache);

        $client = Client::find($id);
        $taches = Tache::where('Client_id',$client['id'])->get();

        return view('client.Acceuil',['client'=>$client,
                                    'taches'=>$taches ]);
    }

    public function stor(TachesRequest $request,string $id)
    {
        $tacheData = $request->all();
        $tache = [
            'Titre'=> $tacheData['Titre'],
            'Description'=> $tacheData['Description'],
            'prix'=> $tacheData['prix'],
            'Client_id'=> $id,
        ];
        Tache::create($tache);

        $client = Client::find($id);
        $tache = Tache::where('Client_id',$client['id'])->get();

        return view('client.Acceuil',['client'=>$client,
                                    'taches'=>$tache ]);
                                    return response()->json($tache);
    }



    /**
     * Display the specified resource.
     */
    public function show(Tache $tache)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tache $tache)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $tache)
    {
        //
    }
}
