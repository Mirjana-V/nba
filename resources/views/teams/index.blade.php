@extends('layout.master')

@section('title', 'Teams')

@section('content')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
<h3>Teams</h3>
<ul>
    @foreach ($teams as $team)
        <h2>
            <a href="{{ route('single-team-page', ['id' => $team->id ]) }}">
                <li>{{ $team->name }}</li>
            </a>
        </h2>
    @endforeach
</ul>
</div>
@endsection
