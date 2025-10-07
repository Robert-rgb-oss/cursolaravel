@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
    <h1>Detalle de la nota</h1>
    <!-- <p>Id de la nota: {{ $note->id }}</p>
    <p>Título: {{ $note->title}}</p>
    <p>Descripción: {{ $note->description }}</p>
    <p>Fecha de creación: {{ $note->created_at }}</p> -->

    <table>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha</th>
        </tr>
        <tr>
            <td>{{$note->id}}</td>
            <td>{{$note->title}}</td>
            <td>{{$note->description}}</td>
            <td>{{$note->created_at}}</td>
        </tr>

    </table>
@endsection