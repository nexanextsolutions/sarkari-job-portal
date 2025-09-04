@extends('layouts.app')
@include('admin.includes.errors')
@section('content')
<div class="container">
<h2 class="text-center">Trashed Job List</h2>
<div class="card">
<div class="card-body">
<table class="table table-hover">
    <thead>
        <th>
            Project Name
        </th>
        <th>
            Restore
        </th>
        <th>
            Delete
        </th>
    </thead>
    <tbody>
    @if($posts->count() > 0)
    @foreach($posts as $post)
            <tr>
                <td>
                <p>Exam Name: {{ $post->examname }}<br/>
                    Created At: {{ $post->created_at }}<br/>
                    Updated At: {{ $post->updated_at }}</p>
                </td>
                <td>
                <p>Name: {{ $post->user->name }}<br/>
                    Email: {{ $post->user->email }}<br/>
                    Contact: {{ $post->user->contact }}</p>
                </td>
                <td>
                <a href="{{route('post.restore', ['id' =>$post->id])}}" class="btn btn-success">Restore</a>
                </td>
                <td>
                <a href="{{route('post.kill', ['id' =>$post->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        @else
        <tr>
            <th colspan="5" class="text-center">No Trashed Job</th>
        </tr>
    @endif 
    </tbody>
</table>
</div>
    {{ $posts->links() }}
</div>
</div>
@stop