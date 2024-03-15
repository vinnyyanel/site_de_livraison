<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;
use Psy\Readline\Hoa\Console;

class ConnexionController extends Controller
{
    public function index():View
    {
        return view('connexion');
    }

    public function store(ConnexionRequest $request)
    {

        $userData = $request->all();
        $user = Client::where('Prenom',$userData['Prenom'])->first();

        if ($user && Hash::check($userData['Password'],$user['Password'])) {
            Auth::login($user);
            return redirect()->route('acceuil',['id'=>$user['id']]);
        }
        else

        return response()->json($user);
    }

    public function logout(ConnexionRequest $request)
    {
        Auth::logout();
        return redirect()->route('connexion');
    }
}
