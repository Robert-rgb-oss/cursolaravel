<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\NoteRequest;
use App\Models\Note;
use App\Http\Resources\NoteResource;


class NoteController extends Controller
{
    
    public function index():JsonResponse
    {
        //$notes = Note::all();
        // return response()->json(Note::all(),200);
        return NoteResource::collection(Note::all());
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
        $note = Note::create($request->all());
        return response()->json([
            'success'=> true,
            'data'=> $note
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
            'success'=> true,
            'data' => $note
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