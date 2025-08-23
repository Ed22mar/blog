@extends('layouts.main')
@section('title','Home')
@section('content')


    <h1>Bem vindo ao meu blog</h1>
@if ($posts->isNotEmpty())
    @foreach ($posts as $post)
    <div class="col-md-3 offset-md-1">
        <div class="row">
            <div id="info-container" class="col-md-6">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title}}</h2>
                    <p class="card-participantes">{{ $post->body }}</p>
                    <p class="card-date">Actualizado: {{date('d/m/Y', strtotime($post->updated_at))}}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-info btn-sm">Ver</a>
                </div>
            </div>

        </div>
    </div>
    @endforeach
@else
    <p>Nenhum post foi encontrado.</p>
@endif
@endsection
