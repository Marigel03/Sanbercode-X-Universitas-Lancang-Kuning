<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\genre;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function  index()
    {
        $genre = genre::all();
        return view("genre.tampil", ['genre' => $genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
        ],
        [
                'name.required'=> 'name harus diisi tidak boleh kosong',
        ]);

        $genre = new genre;
 
        $genre->name = $request->input('name');
 
        $genre->save();
 
        return redirect('/genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = genre::find($id);
        return view("genre.detail", ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = genre::find($id);
        return view("genre.edit", ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name' => 'required|min:5',
        ],
        [
                'name.required'=> 'name harus diisi tidak boleh kosong',
        ]);

        genre::where('id', $id)
                ->update(
                    [
                        'name' => $request->input('name')
                    ]
                );
                return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        genre::where('id', $id)->delete();
        return redirect('/genre');
    }
}
