<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreurRequest;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $livreur = Livreur::all();
        return view('Livreur.index',['livreurs'=>$livreur]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Livreur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivreurRequest $request)
    {
        $livreurData = $request->all();
        if (isset($livreurData['Password'])) {
            $livreurData['Password'] = Hash::make($livreurData['Password']);
        }
         Livreur::create($livreurData);
        return redirect()->route('livreur.index')->with('success', 'inscription reussie avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livreur $livreur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livreur $livreur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livreur $livreur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livreur $livreur)
    {
        //
    }
}
