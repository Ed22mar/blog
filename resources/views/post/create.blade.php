@extends('layouts.main')
@section('title','Dashboard')
@section('content')

<h1>CRIAR UM NOVO POST</h1>
<form action="/posts" method="post">
    @csrf
    <label for="">Title</label>
    <input type="text" name="" id="">

    <label for="">Body</label>
    <input class="" type="text" name="" id="">

    <button type="submit">Salvar</button>

</form>

@endsection
