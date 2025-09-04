<!DOCTYPE html>
<html>
<title>SearchJob</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="rating" content="general">
<meta http-equiv="content-language" content="en"> 
@include('includes.header')
<br><br>
<table width="75%" align="center">
    <tbody>
        <tr>
            <td style="width:50%; background-color:#ffffff; border:1px; border-color:#000000; border-style:solid" valign="top">
                <h1 align="center" id="heading">Latest Result</h1>
                @if($posts->count() > 0)
                <div id="post">
                    @foreach($posts as $post)
                    <ul>
                    <li><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->examname }}</a> </li>
                    </ul>
                    @endforeach
                </div>
                @endif
        </tr>
    </tbody>
</table>

@include('includes.footer')