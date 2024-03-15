
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" style="margin-top: 3%">
        <h2 >Bienvenue {{$livreur['Nom']}}</h2>
    </div>
    <div class="row">
        <div class="col-9">
            <div>
                @if (session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                   <h3>taches accepté</h3>
                </div>
                <div class="row">
                    <a type="submit" class="btn btn-primary" href="{{ route('creat',['id'=>$livreur['id']]) }}">ajouter</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Description</th>
                    <th scope="col">supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($taches as $tache)
                    <tr>
                    <th scope="row">{{$tache['id']}}</th>
                    <td>{{$tache['Titre']}}</td>
                    <td>{{$tache['Etat']}}</td>
                    <td><a class="btn btn-primary" href="#" role="button">voir</a></td>
                    <td><a class="btn btn-primary" href="#" role="button">supprimer</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-3">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Vos Informations</div>
                <div class="card-body">
                  <p class="card-text">Nom: {{$livreur['Nom']}}</p>
                  <p class="card-text">Prenom: {{$livreur['Prenom']}}</p>
                  <p class="card-text">telephone: {{$livreur['mail']}}</p>
                  <p class="card-text">e-mail: {{$livreur['mail']}}</p>
                </div>
              </div>
              <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Portefeuille</div>
                <div class="card-body">
                  <p class="card-text">Solde: {{$portefeuille['solde']}} Fcfa</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
