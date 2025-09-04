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
                        Post Applied
                    </th>
                    <th>
                        Post Code
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th>
                        Mobile
                    </th>
                    <th>
                        Email
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
                            {{ $post->post_applied }}
                        </td>
                        <td>
                            {{ $post->post_code }}
                        </td>
                        <td>
                            {{ $post->full_name }}
                        </td>
                        <td>
                            {{ $post->mobile }}
                        </td>
                        <td>
                            {{ $post->email }}
                        </td>
                        <td>
                            <a href="{{route('reg.delete', ['id' =>$post->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">Not Listed.</th>
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