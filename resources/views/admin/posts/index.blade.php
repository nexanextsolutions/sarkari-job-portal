@extends('layouts.app')
@include('admin.includes.errors')
@section('content')
<div class="container">
<h2 class="text-center">Job List</h2>
<div class="card">
<div class="card-body">
<table class="table table-hover">
    <thead>
        <th>
            Exam Information
        </th>
        <th>
            Posted By
        </th>
        <th>
            Edit
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
                <a href="{{route('post.edit', ['id' =>$post->id])}}" class="btn btn-info">Edit</a>
                </td>
                <td>
                <a href="{{route('post.delete', ['id' =>$post->id])}}" class="btn btn-danger">Trash</a>
                </td>
            </tr>
            @endforeach
        @else
        <tr>
            <th colspan="5" class="text-center">Job Not Listed.</th>
        </tr>
    @endif 
    </tbody>   
</table>
</div>
        <div>
            {{ $posts->links() }}
        </div>
</div> 
</div>
@stop