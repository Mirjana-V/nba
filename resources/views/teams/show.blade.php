@extends('layout.master')

@section('title', 'Team')

@section('content')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
<h2>{{ $team->name }}</h2>
<p>Ovaj tim je iz: {{ $team->city }}, na adresi: {{ $team->address }}</p>
<p>Kontaktirajte nas na: {{ $team->email }}</p>

@foreach ($team->players as $player)
<li>
    <a href="{{ route('players', ['id' => $player->team->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a>
</li>
</div>
@endforeach
@endsection