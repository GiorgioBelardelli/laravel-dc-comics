@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    
    <h1>Il nostro catalogo fumetti: {{ count($comics) }}</h1>
    <div class="container">
        <br>
        
        <button>
            <a href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
        </button>
        <br>

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
                    <td>
                        <form
                        class="d-inline" 
                        action="{{ route('comics.destroy', $comic -> id) }}"
                        method="POST"
                        >
                        @csrf
                        @method('DELETE')
                                <button 
                                onclick="return(confirm('Confermi?'))"
                                id="delete-button">
                                    X
                                </button>

                        </form>
                        <a 
                        href="{{ route('comics.edit', $comic -> id) }}"
                        >
                        MODIFICA
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
