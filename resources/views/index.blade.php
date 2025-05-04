@extends('layout.app')
@section('title')
    index
@endsection
@section('Allposts')
    Posts
@endsection
@section('content')
    <div class="mt-4">
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
        </div>
    </div>
    <div class="mt-4">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">POST BY</th>
                    <th scope="col">CREAT AT</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }} </td>
                    <td scope="row">{{ $post->Title }}</td>
                    <td scope="row">{{ $post->description }}</td>
                    <td scope="row"> {{ $post->user_id == null ? 'not found' : $post->user->name }}</td>
                    <td scope="row">{{ $post->created_at->format('Y-m-d-') }}</td>
                    <th>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('posts.edite', $post->id) }}" type="submit" class="btn btn-info">Edite</a>
                        <form style="display: inline;" action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </th>
            @endforeach
            </tr>
        </table>
    </div>
@endsection
