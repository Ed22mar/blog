@extends('layouts.main')
@section('title','Post - '. $post->title)
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <h1>VER MAIS</h1>
            <div id="info-container" class="col-md-6">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title}}</h2>
                    <p class="card-participantes">{{ $post->body }}</p>
                    <p class="card-date">Actualizado: {{date('d/m/Y', strtotime($post->updated_at))}}</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm">Voltar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
