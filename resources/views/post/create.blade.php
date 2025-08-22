@extends('layouts.main')
@section('title','Cadastro')
@section('content')

<h1>CRIAR UM NOVO POST</h1>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" id="">

    <label for="">Body</label>
    <input class="" type="text" name="body" id="">

    <button type="submit">Salvar</button>

</form>

@endsection
