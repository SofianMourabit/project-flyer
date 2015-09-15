@extends('layout')

@section('content')

    <div class="medium-12 medium-centered columns">
    <h1>Selling Your Home?</h1>
    @if(count($errors)>0)
        <div data-alert="" class="alert-box alert round">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>

    <form method="post" action="/flyers" enctype="multipart/form-data">
        @include('flyers.form')
    </form>
    </div>
@stop