@extends('layouts.main-layout')
@section('head')
    <title>Comics list</title>
@endsection
@section('content')
    
    <div class="container">
        <h1>IL FUMETTO:</h1>
        <br>
        <div class="card">
            <h3>
                Titolo: {{ $comic -> Title }}  
            </h3>
            <h3>
                Volume numero: #{{ $comic -> Volume_number }}
            </h3>
            <h3>
                Scritto da: {{ $comic -> Author }}
            </h3>
            <p>
                Prezzo: {{ $comic -> Price }}
            </p>
        </div>
    </div>
@endsection
