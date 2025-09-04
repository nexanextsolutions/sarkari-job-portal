    <div class="row">  
    @if(Auth::user()->admin)
    <div class="offset-md-3 col-md-2 col-6 col-sm-3 text-center">
    <a href="{{route('users')}}">
        <button class="btn btn-md btn-primary">
           All Users
        </button>
    </a>
    </div>
    <div class="col-md-2 text-center col-6 col-sm-3">
    <a href="{{route('user.create')}}">
        <button class="btn btn-md btn-success">
           New User
        </button>
    </a>
    </div>
    <div class="col-md-2 text-center col-6 col-sm-3">
    <a href="{{route('post')}}">
        <button class="btn btn-md btn-warning">
            All Exams
        </button>
    </a>
    </div>
    <div class="col-md-2 text-center col-6 col-sm-3">
    <a href="{{route('post.trashedall')}}">
        <button class="btn btn-md btn-danger">
            All Trashed
        </button>
    </a>
    </div>
    @endif
</div>
<br/>



