@extends('layout.app')
@section('title')
    edit
@endsection
@section('Allposts')
    Allposts
@endsection
@section('content')
    <div class="container mt-5">
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @method('put')
            @csrf
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group mt-3">
                <label for="title">Title</label>
                <input name="Title" type="text" class="form-control" value="{{ $post->Title }}">
            </div>
            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $post->description }}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="postCreator">Post Creator</label>
                <select class="form-control" name="PostCreator">
                    @foreach ($user as $user)
                        <option @selected( $user->id == $post->user_id) value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
@endsection
