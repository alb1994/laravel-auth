@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>
            @endif 
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Titolo" value="{{ old('title') ?? $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') ?? $post->content }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    @if($post->cover_image)
                        <div>
                            <img src="{{ asset('storage/' . $post->cover_image) }}">
                        </div>
                    @endif
                    <label for="cover_image" class="form-label">Immagine di copertina</label>
                    <input type="file" name="cover_image" id="cover_image" class="form-control"> 
                    @error('cover_image') 
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection