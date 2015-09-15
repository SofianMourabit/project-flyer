@extends('layout')

@section('content')

    <div class="medium-6 medium-centered columns">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

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
                <div class="small-6 small-centered columns">
                    <input type="checkbox" name="remember" > Remember me
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns">
                    <button type="submit" class="button round">Login</button>
                </div>
            </div>
        </form>

        @include('errors.errors')


    </div>
@stop