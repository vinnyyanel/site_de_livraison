@extends('layouts.app')

@section('header')
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/images/AEWY_DEV.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Course
    </a>
  </div>
</nav>
@endsection

@section('content')
<div>
<div>
    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">

            {{ session('success') }}
        </div>
    @endif
    <a type="submit" class="btn btn-primary" href="{{ route('admin.create') }}">ajouter</a>
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
            @foreach ($admins as $admin)
          <tr>
            <th scope="row">{{$admin['id']}}</th>
            <td>{{$admin['Nom']}}</td>
            <td>{{$admin['Prenom']}}</td>
            <td>{{$admin['mail']}}</td>
            <td>{{$admin['telephone']}}</td>
          </tr>
           @endforeach
        </tbody>
      </table>
</div>

 @endsection
