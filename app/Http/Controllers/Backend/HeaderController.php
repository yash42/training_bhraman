<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Officename;

class headercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serial_number = 1;

        // Use paginate() instead of get()
        $data = Officename::orderBy('id', 'DESC')->paginate(5); // Assuming you want 5 items per page

        return view('backend.header.index', compact('data', 'serial_number'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //       dd($request->all());
        $validated = $request->validate([
            'gov_level_np' => 'required',
            'ministryname_np' => 'required',
            'officename_np' => 'required',
            'provincename_np' => 'required',
            'officecode_np' => 'required'

        ]);

        $data = new Officename();
        //Data in Nepali saved in Database
        $data->gov_level_np = request('gov_level_np');
        $data->ministryname_np = request('ministryname_np');
        $data->officename_np = request('officename_np');
        $data->provincename_np = request('provincename_np');
        $data->officecode_np = request('officecode_np');
        //Data in English saved in Database
        $data->gov_level = request('gov_level');
        $data->ministryname = request('ministryname');
        $data->officename = request('officename');
        $data->provincename = request('provincename');
        $data->officecode = request('officecode');
        $data->save();
        return redirect()->route('header.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
