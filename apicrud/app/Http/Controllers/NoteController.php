<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes,200);
    }

    public function create(NoteRequest $request)
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    
    public function store(NoteRequest $request)
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    
    public function show($id)
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

  
    public function edit(string $id)
    {
        //
    }

   
    public function update(NoteRequest $request, $id)
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        
    }

    
    public function destroy(string $id)
    {
        //
    }
}