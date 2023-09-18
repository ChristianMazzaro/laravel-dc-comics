<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);

        foreach ($comics as $comic) {
            $comic->artists = json_decode($comic->artists, true);
            $comic->writers = json_decode($comic->writers, true);
        }

        return view('admin.comics.index',[
            'comics' => $comics
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'thumb' => 'required|url|max:2000',
            'price' => 'required|numeric|between:0,9999.99',
            'series'=> 'required|string|max:255',
            'sale_date' => 'nullable|string|max:20',
            'type' => 'required|string|max:20',
            'artists.*' => 'required|string|max:255',
            'writers.*' => 'required|string|max:255',
        ]);
    
        
        
        $comic = new Comic();
        $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];
        $comic->artists = json_encode($validatedData['artists']);
        $comic->writers = json_encode($validatedData['writers']);
    
        
        $comic->save();
    
        
        return redirect()->route('comics.show', ['id' => $comic->id]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        // dd($comic);
        $comic = Comic::findOrFail($id);

        $comic->artists = json_decode($comic->artists, true);
        $comic->writers = json_decode($comic->writers, true);

        return view('admin.comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
