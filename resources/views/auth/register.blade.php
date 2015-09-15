@extends('layout')

@section('content')

    <div class="medium-6 medium-centered columns">
        <h1>Register</h1>

        <hr>

        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div class="row">
                <div class="small-3 columns">
                    <label for="name" class="right inline">Name:</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class="row">
                <div class="small-3 columns">
                    <label for="email" class="right inline">Email:</label>
                </div>
                <div class="small-9 columns">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="row">
                <div class="small-3 columns">
                    <label for="password" class="right inline">Password:</label>
                </div>
                <div class="small-9 columns">
                    <input type="password" name="password" id="password" required>
                </div>
            </div>

            <div class="row">
                <div class="small-3 columns">
                    <label for="password_confirmation" class="right inline">Confirm Password:</label>
                </div>
                <div class="small-9 columns">
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
            </div>

            <div class="row">
                <div class="medium-6 medium-centered columns">
                    <button type="submit" class="button round">Register</button>
                </div>
            </div>
        </form>

        @include('errors')

    </div>
@stop