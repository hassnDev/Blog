@extends('layout.app')
@section('title')
    show
@endsection
@section('Allposts')
    All Post
@endsection
@section('content')
    <!--    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">POSTED BY {{ $post->Posted_by }}</li>
                                <li class="list-group-item">DESCRIPTION {{ $post->description }}</li>
                                <li class="list-group-item">CREATE AT {{ $post->create_at }}</li>
                            </ul>
                        </div>
                        !-->
    <div class="container mt-5">
        <h2>Post Data</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at </th>
                </tr>
                <th scope="row">{{ $post->id }}</th>
                <th scope="row">{{ $post->Title }}</th>
                <th scope="row">{{ $post->description }}</th>
                <th scope="row">{{ $post->user_id == null ? 'not found' : $post->user->name }}</th>
                <th scope="row">{{ $post->user_id == null ? 'not found' : $post->user->email }}</th>
                <th scope="row">{{ $post->created_at }}</th>
            </thead>
            </tbody>
        </table>
    </div>
@endsection
