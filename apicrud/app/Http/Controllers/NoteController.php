<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NoteRequest $request)
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $note = Note::find($id);
        return response()->json($note, 200);
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
    public function update(NoteRequest $request, $id)
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}