@extends('layouts.admin')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $err)
            {{ $err }}
        @endforeach
    @endif 
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label class="control-label">Titolo</label>
        <input type="text" name="title" id="title" placeholder="Titolo" value="{{ old('title') ?? $post->title }}">
       
        <label class="control-label">Contenuto</label>
        <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') ?? $post->content }}</textarea>
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Salva</button>
    </form>
@endsectio