@extends('layouts.main')
@section('title','Actualizar - '.$post->title)
@section('content')
<h1>ACTUALIZA O TEU POST</h1>
<form action="/posts/{{$post->id}}/update" method="post">
    @csrf
    @method('PUT')
    <label for="">Titilo</label>
    <input type="text" name="title" id="" placeholder="{{ $post->title }}">
    <label for="">Body</label>
    <input type="text" name="body" id="" placeholder="{{ $post->body }}">
    <button class="btn btn-success" type="submit">Actualizar</button>
</form>

@endsection
