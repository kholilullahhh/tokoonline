<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::get();
        $c = 1;
        return view('admin.page.crud.index', [
            'name'      => "crud",
            'title'     => 'crud',
            'buku'      => $buku,
            'c'         => $c
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.crud.create' ,[
            'name'      => "crud",
            'title'     => 'crud',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Buku::create($data);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Buku::findOrFail($id);
        return view('admin.page.crud.show', [
            'name'      => "crud",
            'title'     => 'crud',
            'product'   => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Buku::find($id);
        return view('admin.page.crud.edit', [
            'name'      => "crud",
            'title'     => 'crud',
            'edit'      => $edit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = $request->all();
        $buku = Buku::find($id);
        $buku->update($update);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $buku = Buku::findOrfail($id);
        $buku->delete();
        return redirect()->route('index');
    }
}