@extends('layout.app')
@section('title')
    Create
@endsection
@section('Allposts')
    Allposts
@endsection
@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ route('posts.store') }}">
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
                <input name="Title" type="text" class="form-control" placeholder="Enter title" value="{{ old('Title') }}">
            </div>
            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
            </div>
            <div class="container mt-3">
                <div class="form-group">
                    <label for="PostCreator">PostCreator</label>
                    <select class="form-control" name="PostCreator">
                        @foreach ($User as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    @endsection
