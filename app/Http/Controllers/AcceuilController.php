<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcceuilRequest;
use App\Models\Client;
use App\Models\Portfeuille;
use App\Models\Tache;
use Illuminate\View\View;

class AcceuilController extends Controller
{

    public function Acceuil(string $id):View
    {

        $client = Client::find($id);
        $taches = Tache::where('Client_id',$id)->get();
        $portfeuille = Portfeuille::where('Client_id',$id)->first();

        return view('client.Acceuil',['client'=>$client,
                                    'taches'=>$taches,
                                'portefeuille'=>$portfeuille ]);
    }
}
