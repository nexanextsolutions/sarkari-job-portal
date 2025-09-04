<!DOCTYPE html>
<html>
<title>applysarkarijob.in</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="rating" content="general">
<meta http-equiv="content-language" content="en">
@include('includes.header')
<!-- <div align="center">
    <div id="marquee0" align="center">
        <a href="#" target="_blank"><b>
                <font size="4">Sarkari Result Android Apps</font>
            </b></a> || <a href="#" target="_blank"><b>
                <font size="4">Sarkari Result Window Apps</font>
            </b></a> || <a href="#" target="_blank"><b>
                <font size="4">Sarkari Result Apple / IOS Apps</font>
            </b></a>|| <a href="#" target="_blank"><b>
                <font size="4">Follow on Twitter</font>
            </b></a>
    </div> -->
<!-- ====== Headline & Social Links ====== -->
<div align="center" style="margin:15px 0;">
    <h3>Sarkari Result : SarkariResultForum.Com Sarkari Naukri Latest Jobs Online Form at Sarkari Results 2025</h3>
    <h4 style="color:red; font-weight:bold;">
        Welcome to No. 1 Education Portal Sarkari Result 2025
    </h4>

    <p>
        <a href="#">Join on Telegram</a> ||
        <a href="#">Subscribe YouTube</a> ||
        <a href="#">Follow Facebook</a> ||
        <a href="#">Instagram</a> ||
        <a href="#">Join Whatsapp</a> ||
        <a href="#">Follow on X / Twitter</a>
    </p>
</div>

<!-- ====== Important Links (Scrolling Text) ====== -->
<div id="marquee1" align="center">
    <marquee behavior="alternate" scrollamount="3"
        onmouseover="this.stop();" onmouseout="this.start();">

        @if($first_post)
            <a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">
                <b>{{ $first_post->examname }}</b>
            </a> ||
        @endif

        @if($second_post)
            <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}">
                <b>{{ $second_post->examname }}</b>
            </a>
        @endif

    </marquee>
</div>

<div id="marquee1" align="center">
    <marquee behavior="alternate" scrollamount="3"
        onmouseover="this.stop();" onmouseout="this.start();">

        @if($third_post)
            <a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}">
                <b>{{ $third_post->examname }}</b>
            </a> ||
        @endif

        @if($four_post)
            <a href="{{ route('post.single', ['slug' => $four_post->slug ]) }}">
                <b>{{ $four_post->examname }}</b>
            </a>
        @endif

    </marquee>
</div>

<div id="marquee1" align="center">
    <marquee behavior="alternate" scrollamount="3"
        onmouseover="this.stop();" onmouseout="this.start();">

        @if($five_post)
            <a href="{{ route('post.single', ['slug' => $five_post->slug ]) }}">
                <b>{{ $five_post->examname }}</b>
            </a> ||
        @endif

        @if($six_post)
            <a href="{{ route('post.single', ['slug' => $six_post->slug ]) }}">
                <b>{{ $six_post->examname }}</b>
            </a>
        @endif

    </marquee>
</div>

<!-- ====== Colored Job Boxes ====== -->
<div class="job-boxes" align="center" style="margin-top:20px;">
    <table cellpadding="10" cellspacing="10">
        <tr>
            <td style="background:#6b8e23; color:#fff; font-weight:bold;">
                UP Police SI 2025<br>Apply Online
            </td>
            <td style="background:#000080; color:#fff; font-weight:bold;">
                IBPS RRB PO 2025<br>Apply Online
            </td>
            <td style="background:#ff6600; color:#fff; font-weight:bold;">
                LIC AO/AE 2025<br>Apply Online
            </td>
            <td style="background:#800000; color:#fff; font-weight:bold;">
                RPSC SI 2025<br>Apply Now
            </td>
        </tr>
        <tr>
            <td style="background:#cc0000; color:#fff; font-weight:bold;">
                UPPSC Asst. Teacher<br>(UP LT Grade 2025)
            </td>
            <td style="background:#008000; color:#fff; font-weight:bold;">
                RRB NTPC 10+2 2024<br>Exam City/Admit Card
            </td>
            <td style="background:#ff1493; color:#fff; font-weight:bold;">
                UPSSSC UP PET 2025<br>Admit Card/Exam City
            </td>
            <td style="background:#1e90ff; color:#fff; font-weight:bold;">
                IBPS RRB Clerk 2025<br>Apply Online
            </td>
        </tr>
    </table>
</div>

<br>


<br><br>
<div class="center-tables" align="center" style="height: auto !important;">
    <table style="height: auto !important;">
        <tbody>
            <tr style="height: auto !important;">
                <td style="height: auto !important;">
                    &nbsp;
                    <div align="center" style="height: auto !important;">
                        <table width="75%" align="center">
                            <tbody>
                                <td align="left">
                                    <div class="table-center" id="box2" align="left" style="height:1450px">
                                        <div id="heading">
                                            <div align="center"><a href="#" target="_blank">Govt Job</a></div>
                                            <div style="margin-top:1380px">
                                                <div id="view" align="center"><a href="{{ route('govt') }}" target="_blank">View More</a></div>
                                            </div>
                                        </div>
                                        @if($govts->count() > 0)
                                        <div id="post">
                                            @foreach($govts as $govt)
                                            <ul>
                                                <li> <a href="{{ route('post.single', ['slug' => $govt->slug ]) }}">{{ $govt->examname }}</a> </li>
                                            </ul>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </td>
                                <td align="left">
                                    <div class="table-center" id="box2" align="left" style="height:1450px">
                                        <div id="heading">
                                            <div align="center"><a href="#" target="_blank">Private Job</a></div>
                                            <div style="margin-top:1380px">
                                                <div id="view" align="center"><a href="{{ route('private') }}" target="_blank">View More</a></div>
                                            </div>
                                        </div>
                                        @if($privates->count() > 0)
                                        <div id="post">
                                            @foreach($privates as $private)
                                            <ul>
                                                <li><a href="{{ route('post.single', ['slug' => $private->slug ]) }}">{{ $private->examname }}</a> </li>
                                            </ul>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </td>
                                <td align="left">
                                    <div class="table-center" id="box2" align="left" style="height:1450px">
                                        <div id="heading">
                                            <div align="center"><a href="#" target="_blank">Results</a></div>
                                            <div style="margin-top:1380px">
                                                <div id="view" align="center"><a href="{{ route('private') }}" target="_blank">View More</a></div>
                                            </div>
                                        </div>
                                        @if($results->count() > 0)
                                        <div id="post">
                                            @foreach($results as $result)
                                            <ul>
                                                <li><a href="{{ route('post.single', ['slug' => $result->slug ]) }}">{{ $result->examname }}</a> </li>
                                            </ul>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </td>

            </tr>
            
        </tbody>
    </table>
</div>
</td>
</tr>
</tbody>
</table>
</div>



<div class="content_area">
    <div class="container-fluid">

        <h2 class="heading">Why Should I Consider Government Jobs?</h2>
        <p>
            Sarkari jobs are the most secure and reliable jobs in India. Every year, millions of candidates
            apply for government recruitment exams like SSC, UPSC, Railway, Banking, Teaching, Defence,
            and more. These jobs provide job security, good salary, pension facilities, and social respect.
        </p>

        <h2 class="heading">What are the Competitive Exams for Government Jobs?</h2>
        <p>
            Popular competitive exams include SSC CGL, SSC MTS, RRB NTPC, Railway Group D, UP Police,
            Bihar Police, UP TGT PGT, UPSC Civil Services, IBPS PO, IBPS Clerk, Airforce, Army Rally,
            NIELIT CCC, and many more.
        </p>

        <h1 class="heading">Results</h1>
        <p>
            Sarkari Result is the best place to check your latest exam results online. You can easily find
            updates on RRB NTPC Result, SSC CGL Result, UP Police Result, Banking Exam Results, UPSC Result,
            and all other competitive exams.
        </p>

        <h1 class="heading">Admit Card</h1>
        <p>
            Download your latest admit card for Railway, SSC, UPSC, Banking, Police, and State level exams.
            Just click on the admit card link and get all the details related to your exam center, exam date,
            and reporting time.
        </p>

        <h1 class="heading">Syllabus</h1>
        <p>
            The detailed exam syllabus for SSC, UPSC, Railway, Banking, Police, and other government exams
            is available. Candidates can download the PDF syllabus and start preparing according to the exam
            pattern.
        </p>

        <h1 class="heading">Answer Keys</h1>
        <p>
            Sarkari Result provides official and unofficial answer keys of all government exams including
            SSC, Railway, Banking, and State Exams. Candidates can cross-check their answers before the final
            result is announced.
        </p>

        <h1 class="heading">Why Choose Sarkari Job Portal?</h1>
        <p>
            Sarkari Job portal brings all latest job notifications, online forms, admit cards, results, and
            syllabus in one place. Candidates don’t need to search multiple websites; everything is updated
            daily here in one portal.
        </p>

    </div>
</div>



</a>

@include('includes.footer')