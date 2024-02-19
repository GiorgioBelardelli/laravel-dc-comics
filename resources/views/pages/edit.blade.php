@extends('layouts.main-layout')
@section('head')
    <title>Update</title>
@endsection
@section('content')
    <h1>MODIFICA FUMETTO</h1>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)    
                <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>

        @endif
        <form 
        action=" {{ route('comics.update', $comic -> id) }} "
        method="POST"
        >
            @csrf
            @method('PUT')

            <label for="Title">Titolo:</label>
            <input type="text" name="Title" id="Title" value=" {{ $comic -> Title }} ">
            <br>
            <label for="Volume_number">N.Volume:</label>
            <input type="text" name="Volume_number" id="Volume_number" value=" {{ $comic -> Volume_number }} ">
            <br>
            <label for="Author">Scritto da:</label>
            <input type="text" name="Author" id="Author" value=" {{ $comic -> Author }} ">
            <br>
            <label for="Price">Prezzo di vendita:</label>
            <input type="text" name="Price" id="Price" value=" {{ $comic -> Price }} ">
            <br>
            <input type="submit" value="Modifica" class="submit blue-sub">
        </form>
    </div>
@endsection
