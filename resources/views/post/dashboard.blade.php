@extends('layouts.main')
@section('title','Home')
@section('content')

<h1>Lista de Posts</h1>

@if ($posts->isNotEmpty())
<table class="table table-striped table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Conteúdo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td>{{ $post->title }}</td>
      <td>{{ Str::limit($post->body, 50) }}</td>
      <td>
        <a href="/posts/{{ $post->id }}" class="btn btn-info btn-sm">Ver</a>
        <a href="" class="btn btn-primary btn-sm">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
    <p>Nenhum post foi encontrado.</p>
@endif



@endsection
