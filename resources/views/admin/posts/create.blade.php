@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf
        <label class="control-label">Titolo</label>
        <input type="text" name="title" id="title" placeholder="Titolo">
        <label class="control-label">Contenuto</label>
        <textarea class="form.controll" name="content" id="content" placeholder="contenuto"></textarea>
        <button type="submit">Salva</button>
    </form>
@endsection