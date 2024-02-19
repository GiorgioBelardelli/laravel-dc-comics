<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comics = Comic::all();
    
        return view('pages.index', compact('comics'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request ->all());

        // $data = $request -> all();

        $data = $request -> validate([
            
            'Title' => 'required|string|min:3|max:255', 
            'Volume_number' => 'required|numeric|min:1|max:99',
            'Author' => 'required|string|min:3|max:255',
            'Price' => 'required|decimal:2',           
         
        ], [
            'Title' => "E' richiesto un titolo",
            'Title.min' => "Il Titolo non puó contenere meno di 3 caratteri",
            'Title.max' => "Il Titolo non puó contenere piú di 255 caratteri",
            'Volume_number' => "E' richiesto il numero del Volume",
            'Volume_number.min' => "Il numero del Volume non puó essere minore di 1",
            'Volume_number.max' => "Il numero del Volume non puó essere maggiore di 100",
            'Author' => "E' richiesto il nome dell'autore",
            'Author.min' => "Il nome dell'autore non puó contenere meno di 3 caratteri",
            'Author.min' => "Il nome dell'autore non puó contenere piú di 255 caratteri",
            'Price' => "Devi inserire il prezzo",
            'Price.decimal' => "Il prezzo deve avere anche i due decimali",

        ]);

        $newComic = new Comic();

        $newComic -> Title = $data['Title'];
        $newComic -> Volume_number = $data['Volume_number'];
        $newComic -> Author = $data['Author'];
        $newComic -> Price = $data['Price'];

        $newComic -> save();

        return redirect() -> route('comics.show', $newComic -> id);
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('pages.show', compact('comic') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);
        
        //$data = $request -> all();
        
        $data = $request -> validate([
            
            'Title' => 'required|string|min:3|max:255', 
            'Volume_number' => 'required|numeric|min:1|max:99',
            'Author' => 'required|string|min:3|max:255',
            'Price' => 'required|decimal:2',           
         
        ], [
            
            'Title' => "E' richiesto un titolo",
            'Title.min' => "Il Titolo non puó contenere meno di 3 caratteri",
            'Title.max' => "Il Titolo non puó contenere piú di 255 caratteri",
            'Volume_number' => "E' richiesto il numero del Volume",
            'Volume_number.min' => "Il numero del Volume non puó essere minore di 1",
            'Volume_number.max' => "Il numero del Volume non puó essere maggiore di 100",
            'Author' => "E' richiesto il nome dell'autore",
            'Author.min' => "Il nome dell'autore non puó contenere meno di 3 caratteri",
            'Author.min' => "Il nome dell'autore non puó contenere piú di 255 caratteri",
            'Price' => "Devi inserire il prezzo",
            'Price.decimal' => "Il prezzo deve avere anche i due decimali",

        ]);

        $comic -> Title = $data['Title'];
        $comic -> Volume_number = $data['Volume_number'];
        $comic -> Author = $data['Author'];
        $comic -> Price = $data['Price'];
        $comic -> save();

        return redirect() -> route('comics.show', $comic -> id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic -> delete();


        return redirect() -> route('comics.index');
    }
}
