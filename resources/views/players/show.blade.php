@extends('layout.master')

@section('title', 'Player')

@section('content')
<div class="jumbotron p-3 p-md-5 text-dark rounded bg-white">
    <h2>Player: {{ $player->first_name }} {{ $player->last_name }}</h2>
    <p>Email: {{ $player->email }}</p>
    <p><a href="{{ route('single-team-page', ['id' => $player->team->id]) }}">Team: {{ $player->team->name }}</a></p>
</div>
@endsection