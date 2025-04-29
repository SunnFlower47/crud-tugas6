<?php

namespace App\Http\Controllers;

use App\Models\pertemuan6;
use Illuminate\Http\Request;
use Illuminate\View\View; // Corrected casing
use Illuminate\Http\RedirectResponse;

class Pertemuan6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataArray = pertemuan6::latest()->paginate(10);
        return view('crud.index', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    return view('crud.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);

        //create post
        $dataArray = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ];
        pertemuan6::create($dataArray);

        //redirect to index
        return redirect()->route('pertemuan6.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get by id
        $data = pertemuan6::findOrFail($id);
        return view('crud.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get by id
        $data = pertemuan6::findOrFail($id);
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:5',
            'jurusan' => 'required|min:10'
        ]);

        $data = pertemuan6::findOrFail($id);
       //update
        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        //redirect to index
        return redirect()->route('pertemuan6.index')->with('success', 'Data berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        //get by id
        $data = pertemuan6::findOrFail($id);
        $data->delete();
        return redirect()->route('pertemuan6.index')->with('success', 'Data berhasil dihapus');
    }
}
