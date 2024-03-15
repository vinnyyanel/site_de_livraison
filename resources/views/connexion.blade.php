<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>connexion</title>
</head>
<body>
<div class="container" style="margin-top: 5%">
    @if (session('error'))
    <div style="background-color: red">
        <p>erreur bien</p>
    </div>
    @endif
    <h2>connexion</h2>
    <form method="POST" action="{{ route('connexion') }}" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prenom:</label>
          <input type="text" class="form-control" name="Prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe:</label>
          <input type="password" class="form-control" name="Password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">se connecter</button>
      </form>
</div>
</body>
</html>
