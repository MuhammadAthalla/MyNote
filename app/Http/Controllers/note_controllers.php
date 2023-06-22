<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class note_controllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = note::get();
        
        $data = [
            'post' => $post
        ];
        return view('note.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        note::create([
            'judul' => $judul,
            'deskripsi' => $deskripsi
        ]);

        return redirect('note');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selengkapnya = note::where('id',$id)->first();

        $data = [
            'post' => $selengkapnya
        ];
        return view('note.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_update = note::where('id',$id)->first();
        $data = [
            'post'=>$data_update
        ];
        return view('note.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        note::where('id',$id)->update([
            'judul'=>$judul,
            'deskripsi'=>$deskripsi
        ]);

        return redirect('/note');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        note::find($id)->delete();
        return redirect('/note');
    }
}
