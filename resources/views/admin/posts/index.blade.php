@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>I nostri post</h1>
            </div>
            <div class="col-12 mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Stumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id}}</td>
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->Slug}}</td>
                                <td>
                                    <a href="{{route('admin.posts.show', $post->id )}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.posts.edit', $post->id )}}" class="btn btn-sm btn-warnig">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline-block" action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash">
                                                
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection