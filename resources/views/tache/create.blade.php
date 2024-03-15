@extends('layouts.app')


@section('content')

<div class="container">
<form method="POST" action="{{ route('stor',['id'=>$id]) }}">
    @csrf
    <div class=" mb-3">
        {{$id}}
      <label for="Titre" class="form-label">Titre:</label>
      <input type="text" class="form-control" id="Titre" name="Titre" aria-describedby="nomHelp">
    </div>
    <div class="mb-3">
      <label for="Description" class="form-label">Description:</label>
      <input type="text" class="form-control" name="Description" id="Description">
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">Prix:</label>
      <input type="integer" class="form-control" name="prix" id="prix">
    </div>
    <button type="submit" class="btn btn-primary">enregistrer</button>
  </form>
</div>
@endsection
