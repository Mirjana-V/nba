@extends('layout.master')

@section('title', 'Login')

@section('content')

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Email:</label>
            <input class="form-control" type="emil" name="email" />
        </div>

        @error('email')
            @include('partials.error')
        @enderror



        <div class="mb-3">
            <label class="form-label" >Password:</label>
            <input class="form-control" type="password" name="password" />
        </div>

        @error('password')
            @include('partials.error')
        @enderror



        <div class="form-group">
            <label for="password_confirmation">Password confirm:</label>
            <input type="password" class="form-control" name="password_confirmation"/>
        </div>
        <br>

        <button type="submit" class="btn brn-primary">Submit</button>
        <hr>
    </form>
    <br>

@endsection