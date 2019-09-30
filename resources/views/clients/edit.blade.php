@extends('layouts.app');
@section('content')


<h2>Modifier client</h2>
<form action=" /clients/{{ $client->id }}" method='POST'>
@method('PATCH')
@csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Entrez votre pseudo" {{ old('champ') ?? $client->name }} value ="{{ $client->name }}">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Entrez votre email" {{ old('champ') ?? $client->champ }} value ="{{ $client->email }}">
    </div>

    <select class="custom-select @error('status') is-invalid @enderror" name="status">
            <option value="">Status...</option>
            <option value="1" {{ (old('status') ?? $client->status) === 1 ? "selected":"" }}>
            Actif
            </option>
            <option value="0" {{ (old('status') ?? $client->status) === 0 ? "selected":"" }}>
            Inactif
            </option>
           </select>

    <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

@endsection
