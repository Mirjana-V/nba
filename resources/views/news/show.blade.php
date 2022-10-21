@extends('layout.master')

@section('title', 'Single news')

@section('content')

<a href="/news">Back to all news</a>
<br>
<div>
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
</div>

<br>
Author: {{ $news->user->name }}


@foreach ($news->teams as $team)
<div>
    <a href="{{route('newsForTeam', ['teamName' => $team->name]) }}">
    {{ $team->name }}
    </a>
</div>
@endforeach

@endsection
