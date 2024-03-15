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

<div class="container">
<form method="POST" action="{{ route('admin.store') }}">
    @csrf
    <div class=" mb-3">
      <label for="Nom" class="form-label">Nom:</label>
      <input type="text" class="form-control" id="Nom" name="Nom" aria-describedby="nomHelp">
    </div>
    <div class="mb-3">
      <label for="Prenom" class="form-label">Prenom:</label>
      <input type="text" class="form-control" name="Prenom" id="Prenom">
    </div>
    <div class="mb-3">
      <label for="mail" class="form-label">email:</label>
      <input type="email" class="form-control" name="mail" id="mail">
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">numero de telephone:</label>
        <input type="tel" class="form-control" name="telephone" id="telephone">
      </div>
    <div class="mb-3">
        <label for="Password" class="form-label">mot de passe:</label>
        <input type="password" class="form-control" name="Password" id="Password">
      </div>
    <button type="submit" class="btn btn-primary">s'inscrire</button>
  </form>
</div>
@endsection
