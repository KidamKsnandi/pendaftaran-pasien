<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spesialis = Spesialis::all();
        return view('admin.spesialis.index', compact('spesialis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spesialis = Spesialis::all();
        return view('admin.spesialis.create', compact('spesialis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_spesialis' => 'required',
            'akomodasi' => 'required'
        ]);

        $spesialis = new Spesialis();
        $spesialis->nama_spesialis = $request->nama_spesialis;
        $spesialis->akomodasi = $request->akomodasi;
        $spesialis->save();
        return redirect()->route('spesialis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function show(Spesialis $spesialis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit(Spesialis $spesialis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spesialis $spesialis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spesialis $spesialis, $id)
    {
        $spesialis = Spesialis::findOrFail($id);
        $spesialis->delete();
        return redirect('administrator/spesialis');
    }
}
