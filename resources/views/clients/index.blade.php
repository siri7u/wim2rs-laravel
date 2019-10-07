@extends('layouts.app');
@section('content')

<ul>
    @foreach ($clients as $client)
    <li><a href="{{ url('clients') }}/{{ $client->id }}"->{{ $client->name }}</a> </li>
    @endforeach
</ul>

<h2>Nouveau Client</h2>
<a href="{{ url('clients') }}/create" class="btn btn-primary my-3">Nouveau client</a>

@endsection
