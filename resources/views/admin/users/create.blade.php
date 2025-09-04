@extends('layouts.app')
@include('admin.includes.errors')
@section('content')
<div class="container">

<div class="card-header">
    Create a new user
</div>
<div class="card-body">
    <form action="{{route('user.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">User</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                Add User
            </button>
        </div>
    </form>
</div>
@endsection