@include('includes.title')
<title>{{ $post->examname }} - JobInSarkari</title>
<meta name="description" content="{{ $post->examname }} - Apply now by visiting JobInSarkari">
<link rel="canonical" href="/posts/{{$post->slug}}" />

@include('includes.header')
<br/><br/>
<div class="row">
    <div class="col-sm-6 col-xs-6">
        @if($prev)
        <a href="{{ route('post.single', ['slug' => $prev->slug]) }}" class="previous pull-left">&laquo; Previous
        <div class="subtitleprev">{{$prev->examname}}</div>
        </a>
        @endif
    </div>
    <div class="col-sm-6 col-xs-6">
        @if($next)
        <a href="{{ route('post.single', ['slug' => $next->slug]) }}" class="next pull-right">Next &raquo;<br/>
        <div class="subtitlenext">{{$next->examname}}</div>
        </a>
        @endif
    </div>
</div>
<br/>
<div class="container"> 
    <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="card"> 
                <div class="card-footer">
                <br/>
                <h1 class="myh3"><i class="fa fa-pen"></i> {{ $post->examname }}</h1>
                    <div class="row">
                        <div class="col-md-9">
                                    <h5>Post Name: {{ $post->postname }}</h5>
                                    <h6>Job Location: {{ $post->joblocation }}</h6>
                                    <h6>Number of Vacancy: {{ $post->vacancy }}</h6>
                        </div>    
                
                        <div class="col-md-3" align="center">
                            <img src="{{ $post->gallery_one }}" class="img-rounded" alt="Exam Logo" title="Exam Logo" width="`100%" height="150">
                        </div>
                    </div>
        <br/><br/> 
        <div class="row">
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            IMPORTANT DATES
                            </h4> 
                            <p>
                            Starting Last Date of Form Filling: {{ $post->startingdt }}<br/>
                            Last Date of Form Filling: {{ $post->lastday }}<br/>
                            Last Date of Payment: {{ $post->lastpayday }}<br/>
                            </p>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            Pay Scale
                            </h4> 
                            <p class="mymedfont">{!! $post->payscale !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/>
                  <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            Educational Qualification
                            </h4> 
                                <p class="mymedfont">{!! $post->eduqualification !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/>
            <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            Age Relaxation
                            </h4> 
                            <p class="mymedfont">{!! $post->agerelaxation !!}</p>
                            <h4 class="myh3">
                            Age Limitation
                            </h4> 
                            <p>
                            Minimum Age Limitation: {{ $post->agelimitmin }}<br/>
                            Maximum Age Limitation: {{ $post->agelimitmax }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            Important Links
                            </h4> 
                            <p class="mymedfont"><u><a href="{{ $post->applylink }}" title="Sarkari Job Apply Link" target="_blank">Apply Link</a></u><br/>
                                <a href="{{ $post->paylink }}" title="Sarkari Job Payment Link" target="_blank"><u>Official Notification/ PDF Link</u></a><br/>
                                <a href="{{ $post->websitelink }}" title="Sarkari Job Official Website Link" target="_blank"><u>Official Website Link</u></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <br/><br/>
            <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                            <h4 class="myh3">
                            Description {{ $post->examname }}
                            </h4> 
                            <p class="mymedfont">{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>                      
             </div>
             </div>    
    
        </div>
    </div> 

<br/>
<div class="row">
    <div class="col-sm-6 col-xs-6">
        @if($prev)
        <a href="{{ route('post.single', ['slug' => $prev->slug]) }}" class="previous pull-left">&laquo; Previous
        <div class="subtitleprev">{{$prev->examname}}</div>
        </a>
        @endif 
    </div>
    <div class="col-sm-6 col-xs-6">
        @if($next)
        <a href="{{ route('post.single', ['slug' => $next->slug]) }}" class="next pull-right">Next &raquo;<br/>
        <div class="subtitlenext">{{$next->examname}}</div>
        </a>
        @endif
    </div>
</div>
<br/><br/>
@include('includes.footer')