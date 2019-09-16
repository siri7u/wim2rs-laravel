@extends('layouts.app');
@section('content')

<ul>
    <?php foreach ($clients as $client): ?>
    <li><?= $client->name ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    @foreach ($clients as $client)
    <li>{{ $client->name }}</li>
    @endforeach
</ul>

<h2>Nouveau Client</h2>
<form action="clients" method="post">
@csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Entrez votre pseudo">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Entrez votre email">
    </div>

    <select class="custom-select @error('status') is-invalid @enderror"name="status">
    <option value="" selected>Status...</option>
    <option value="1">Actif</option>
    <option value="0">Inactif</option>
    </select>

    <button type="submit" class="btn btn-primary">Ajouter le client</button>
</form>
@endsection
