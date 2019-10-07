@extends('layouts.app');

@section('content')



<div>
    <ul>
        <li> {{ $client->name }}</li>
        <li> {{ $client->status }}</li>
        <li> {{ $client->email }}</li>
        <li><a href="{{ url('clients') }}/{{ $client->id }}/edit" class="btn btn-primary my-3">Editer</a></li>



        <form action="{{ url('clients') }}/{{ $client->id }}" method='POST'>
        @method('DELETE')
        @csrf
            <button type="submit" class="btn btn-primary">Supprimer</button>
        </form>

    </ul>
</div>


@endsection
