@extends('layouts.app')
@section('content')
@include('admin.includes.errors')
<link rel="stylesheet" href="{{ asset('/css/mycustom.css') }}">
<div class="container">
    <h3 class="text-center"><u>Edit Exam List</u></h3>
    <form action="{{route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr class="required">
                        <td><label for="examname">Exam Name</label></td>
                        <td><input type="text" required name="examname" size="100%" value="{{ $post->examname }}" class="form-control input-sm" placeholder="Enter Exam Name"></td>
                    </tr>
                    <tr class="required">
                        <td><label for="category">Select Category</label></td>
                        <td>
                            <select class="form-control" name="category">
                                <option value="{{ $post->category }}">{{ $post->category }}</option>
                                <option value="Govt Job">Govt Job</option>
                                <option value="Private Job">Private Job</option>
                                <option value="Result">Result</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="text-center">
                <label for="description"><b>Post Description</b></label>
            </div>
            <textarea name="description" id="howtoapply" cols="30" rows="12" class="form-control" placeholder="Enter description.">{{ $post->description }}</textarea>
        </div>
        <div class="form-group">
            <div class="text-center">
                <button class="btn btn-danger btn-lg mypostbtn" type="submit">
                    Update Post
                </button>
            </div>
        </div>
    </form>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
    $('#age').summernote({
        tabsize: 2,
        height: 100
    });
    $('#edu').summernote({
        tabsize: 2,
        height: 100
    });
    $('#examdate').summernote({
        tabsize: 2,
        height: 100
    });
    $('#appli').summernote({
        tabsize: 2,
        height: 100
    });
    $('#payscale').summernote({
        tabsize: 2,
        height: 100
    });
    $('#howtoapply').summernote({
        tabsize: 2,
        height: 400
    });
</script>
@stop