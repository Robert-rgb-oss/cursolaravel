<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Note;

class NoteController extends Controller
{
    
    public function index():JsonResponse
    {
        //$notes = Note::all();
        return response()->json(Note::all(),200);
    }

    
    public function create(NoteRequest $request):JsonResponse
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    
    public function store(NoteRequest $request):JsonResponse
    {
        Note::create($request->all());
        return response()->json([
            'success'=> true
        ],201);
    }

    
    public function show($id):JsonResponse
    {
        //$note = Note::find($id);
        return response()->json(Note::find($id), 200);
    }

    
    
    public function update(NoteRequest $request, $id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return response()->json([
            'success'=> true
        ],200);
    }

    
    public function destroy($id):JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success'=> true
        ],200); 
    }
}