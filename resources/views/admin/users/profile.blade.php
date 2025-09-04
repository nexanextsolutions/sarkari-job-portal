@extends('layouts.app')
@include('admin.includes.errors')
@section('content')
<div class="container">

<div class="card-header">
    Edit your profile
</div>
<div class="card-body">
    <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Passsword</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="contact">Primary Contact</label>
            <input type="text" name="contact" value="{{ $user->contact }}" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                Update profile
            </button>
        </div>
    </form>
</div>
@endsection