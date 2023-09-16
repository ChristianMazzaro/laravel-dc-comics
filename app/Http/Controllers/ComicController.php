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
        $data = $request->all();
        
        
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = json_encode($data['artists']);
        $comic->writers = json_encode($data['writers']);
    
        
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
