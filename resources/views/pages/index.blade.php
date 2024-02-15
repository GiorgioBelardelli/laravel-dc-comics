@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    
    <h1>Il nostro catalogo fumetti: {{ count($comics) }}</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Prezzo($)</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>
                        <a href="{{ route('comics.show', $comic -> id) }}">
                            {{ $comic -> Title }} #{{ $comic -> Volume_number }}
                        </a>
                    </td>
                    <td>{{ $comic -> Author }}</td>
                    <td>{{ $comic -> Price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
