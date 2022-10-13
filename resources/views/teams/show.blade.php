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

<div>
    <h4>Comments:</h4>
    <ul>
        @foreach ($team->comments as $comment)
        <li>
            {{ $comment->content }}
            by: {{ $comment->user->name }}
        </li>
        @endforeach
    </ul>
</div>

<form method="POST" action="/teams/{{ $team->id }}/comments">
@csrf

<div class="mb-3">
    <label class="form-label" >Leave a comment:</label>
    <textarea class="form-control" name="content" rows="4" ></textarea>
</div>

@error('body')
    @include('partials.error')
@enderror

    <button type="submit" class="btn brn-primary">Submit</button>
    <hr>
</form>
@endsection