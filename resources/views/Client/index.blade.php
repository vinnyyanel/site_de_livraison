@extends('layouts.app')

@section('content')
<div>
<div>
    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">

            {{ session('success') }}
        </div>
    @endif
    <a type="submit" class="btn btn-primary" href="{{ route('client.create') }}">ajouter</a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">telephone</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($clients as $client)
          <tr>
            <th scope="row">{{$client['id']}}</th>
            <td>{{$client['Nom']}}</td>
            <td>{{$client['Prenom']}}</td>
            <td>{{$client['mail']}}</td>
            <td>{{$client['telephone']}}</td>
          </tr>
           @endforeach
        </tbody>
      </table>
</div>

 @endsection
