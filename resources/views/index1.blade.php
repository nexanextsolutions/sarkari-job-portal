@include('includes.title')
<title>Job | Naukri | Exam Result | Admit Card</title>
<meta name="description" content="Sarkari Job | Naukri | Exam Result | Admit Card - Apply now">
<link rel="canonical" href="" />
<meta property="og:image" content="/assets/pics/home.jpg" />
<meta name="twitter:image" content="/assets/pics/home.jpg" />
@include('includes.header')
<div class="page-background">
        <div class="container rounded text-center mybigfont text-white">
            <h2>Browse Job</h2>
            <form method="GET" action="/result">
                <div class="row"> 
                    <div class="col-md-4 offset-md-1 col-6">
                    <select class="form-control form-control-lg mr-2" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                            <option value="prof">Job By Profession</option>
                            <option value="edu">Job By Education</option>
                            <option value="state">Job By State</option>
                    </select>
                    </div>
                    <div class="col-md-4 col-6">
                    <select class="form-control form-control-lg mr-2" id="ddl2" name="query1">
                            <option value="Government">Government</option> 
                            <option value="Banking">Banking</option>
                            <option value="Teaching">Teaching</option>
                            <option value="Defence">Defence</option>
                            <option value="Defence">Doctors</option>
                            <option value="Research">Research</option>
                            <option value="Railway">Railway</option> 
                    </select>
                    </div>
                    <div class="col-md-2 col-12">
                    <button type="submit" class="btn btn-lg btn-primary">Search Naukri</button>
                    </div>
                </div>
            </form> 
        </div> 
    </div>

    <script type="text/javascript">
            function configureDropDownLists(ddl1,ddl2) {
    var prof = ['Banking', 'Teaching', 'Defence', 'Research', 'Doctors',
                 'Government', 'Railway'
                ];
    var edu = ['10th','12th', 'Graduate', 'Post Graduate','M.A./M.Com','B.A./B.Com','MBBS',
                    'B.Tech/M.Tech','Diploma/ITI','MBA/PGDBM','M.Phil/Ph.D', 'CA/ICwA'];

    var state = ['Andaman & Nicobar','Arunachal Pradesh', 'Assam', 'Bihar',
                'Chandigarh','Chhattisgarh', 'Dadra and Nagar Haveli', 'Daman and Diu',
                'Delhi','Goa', 'Gujrat', 'Haryana',
                'Himachal Pradesh','Jammu and Kashmir', 'Jharkhand', 'Karnataka',
                'Kerala','Lakshadweep', 'Madhya Pradesh', 'Maharashtra',
                'Manipur','Meghalaya', 'Mizoram', 'Nagaland',
                'Odisha','Puducherry', 'Rajasthan', 'Sikkim',
                'Tamil Nadu','Telangana', 'Tripura', 'Uttar Pradesh',
                  'Uttarakhand', 'West Bengal'];


    switch (ddl1.value) {
        case 'prof':
            ddl2.options.length = 0;
            for (i = 0; i < prof.length; i++) {
                createOption(ddl2, prof[i], prof[i]);
            }
            break;
        case 'edu':
            ddl2.options.length = 0; 
        for (i = 0; i < edu.length; i++) {
            createOption(ddl2, edu[i], edu[i]);
            }
            break;
        case 'state':
            ddl2.options.length = 0;
            for (i = 0; i < state.length; i++) {
                createOption(ddl2, state[i], state[i]);
            }
            break;
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }       
</script>  

<!-- Header -->
<div class="marginbottom marginlr">
    <div class="row">
        
<!--        Starting of Row 1--> 
        <div class="col-md-8">
            <div class="header1 text-center"><br/>
            <h2 class="text-center"><u>Latest Sarkari Jobs</u></h1>
            </div>
            <br/>
    @if($posts->count() > 0)
    <div class="row">
    @foreach($posts as $post)
     <div class="col-md-6">
    <div class="container marginbottom">
        <div class="mymargin">
        <a href="{{ route('post.single', ['slug' => $post->slug ]) }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-3 col-sm-3">
                          <img src="{{ $post->gallery_one }}" class="img-rounded" alt="Exam Logo" title="Exam Logo" width="60%" height="70">
                        </div>
                    <div class="col-md-9 col-9 col-sm-9">
                    <h6 class="text-black">{{ $post->examname }}</h6>
                    <p class="text-black">Last Date: {{ $post->lastday }}<br/>
                        Number of Vacancy: <b>{{ $post->vacancy }}</b></p>
                    <h5 class="text-red">Apply Now</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div> 
        </a>
        </div>
    @endforeach
    </div>
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
<div align="center">
   <u> <h3><a href="{{ route('allexams') }}"><b>Click to View All Exams</b></a></h3></u>
</div>
    </div>
        
        
<!--Strating of Row 2        -->
            <div class="col-md-4">
            <div class="header1 text-center"><br/>
            <h2 class="text-center"><u>Latest Job Results</u></h1>
            </div>
            <br/>
    @if($rents->count() > 0)
    <div class="row">
    @foreach($rents as $rent)
     <div class="col-md-12">
    <div class="container marginbottom">
        <div class="mymargin">
        <a href="{{ $rent->lastmonth }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-3 col-sm-3">
                          <img src="{{ $post->gallery_one }}" class="img-rounded" alt="Exam Logo" title="Exam Logo" width="60%" height="70">
                        </div>
                    <div class="col-md-9 col-9 col-sm-9">
                    <h6 class="text-black">{{ $rent->examname }}</h6>
                    <h5 class="text-red">View Now</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div> 
        </a>
        </div>
    @endforeach
    </div>
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
<div align="center">
   <u> <h3><a href="{{ route('allexams') }}"><b>Click to View All Results Declared!</b></a></h3></u>
</div>
    </div>
<!--Ending of Row 2    -->
</div>
</div>
<br/><br/>
@include('includes.footer')