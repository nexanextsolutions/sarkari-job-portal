@extends('layouts.app')
@include('admin.includes.errors')
@section('content')
<div class="container">
<h2 class="text-center">Users List</h2>
<div class="card">
<div class="card-body">
<table class="table table-hover">
    <thead>
        <th>
            Name
        </th>
        <th>
            Email ID
        </th>
        <th>
            Contact 
        </th>
        <th>
            Permission
        </th>
        <th>
            Delete
        </th>
    </thead>
    @if($users->count() > 0)
        @foreach($users as $user)
            <tr>
                <td>
                {{ $user->name }}
                </td>
                <td>
                {{ $user->email }}
                </td>
                <td>
                {{ $user->contact }}
                </td>
                <td>
                @if($user->admin)
                    <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-danger">Remove permissions</a>
                @else
                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-success">Make admin</a>
                @endif
                </td>
                <td>
                @if(Auth::id() != $user->id)
                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                @endif
                </td>
            </tr>
            @endforeach
        @else
        <tr>
            <th colspan="5" class="text-center">No Users Found</th>
        </tr>
    @endif 
</table>
</div>
    <div>
        {{ $users->links() }}
    </div>
</div>
</div>
@stop