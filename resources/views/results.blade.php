@include('includes.title')
<title>Job Search Page - JobInSarkari</title>
<meta name="description" content="Job Search Page - Apply now by visiting JobInSarkari">
@include('includes.header')
<div class="header1 text-center"><br/>
<h3 class="text-center"><u>List of all Sarkari Jobs</u></h3>
<br/>
</div>
<div class="container marginbottom">
    <div class="row">
    @if($posts->count() > 0)
    @foreach($posts as $post)
    <div class="container marginbottom">
        <div class="mymargin">
        <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" target="_blank">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-3 col-sm-3">
                          <img src="{{ $post->gallery_one }}" class="img-rounded" alt="Notebook" width="60%" height="70">
                        </div>
                    <div class="col-md-5 col-4 col-sm-4">
                    <h4 class="text-black">{{ $post->examname }}</h4>
                    <h5>Apply Now</h5>
                    </div>
                    <div class="col-md-4 col-5 col-sm-5">
                    <p class="text-black text-red">Last Date: {{ $post->lastday }}
                    <br/>Number of Vacancy: <b>{{ $post->vacancy }}</b>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div> 
        </a>
    @endforeach
    @else 
        <div class="col-md-12">
        <div class="mymargin">
            <div class="card">
                <div class="card-header text-center">
                    <h2>No Results Found!</h2>
                </div>
            </div>
        </div>
        </div>
    @endif     
    </div> 
    {{ $posts->links() }}
</div>   
<br/><br/>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b717463ea0e8bf5"></script>
@include('includes.footer')