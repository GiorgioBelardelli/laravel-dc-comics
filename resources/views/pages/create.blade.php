@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>NUOVO FUMETTO</h1>
    <div class="container">
        <form 
        action=" {{ route('comics.store') }} "
        method="POST"
        >
            @csrf
            @method('POST')

            <label for="Title">Titolo:</label>
            <input type="text" name="Title" id="Title">
            <br>
            <label for="Volume_number">N.Volume:</label>
            <input type="text" name="Volume_number" id="Volume_number">
            <br>
            <label for="Author">Scritto da:</label>
            <input type="text" name="Author" id="Author">
            <br>
            <label for="Price">Prezzo di vendita:</label>
            <input type="text" name="Price" id="Price">
            <br>
            <input type="submit" value="Inserisci" id="submit">
        </form>
    </div>
@endsection
