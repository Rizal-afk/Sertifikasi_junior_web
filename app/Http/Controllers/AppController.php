<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::where('user_id',auth()->user()->id)->get();
        
        return view('Store.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'nama_barang'=>'required|max:255',
            'kategori'=>'required|max:20',
            'merek'=>'required|max:20',
            'deskripsi'=>'required|min:6',
            'media'=>"asd",
        ]);

        Items::create([
            'nama_barang' => $validated['nama_barang'],
            'kategori' => $validated['kategori'],
            'merek' => $validated['merek'],
            'deskripsi' => $validated['deskripsi'],
            'media' => $validated['media'],
            'user_id' => auth()->user()->id,
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Items::findOrFail($id);
        return view('Store.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
