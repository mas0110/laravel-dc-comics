<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.comicsView.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic => $new_comic->id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.comicsView.index', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.comicsView.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();

        $comic = comic::find($id);

        $comic->update($formData);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
