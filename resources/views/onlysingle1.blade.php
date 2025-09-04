<!DOCTYPE html>
<html>
<title>SearchJob</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="rating" content="general">
<meta http-equiv="content-language" content="en">
<style>
table h1 {
    display: block;
    font-size: 22px;
    color: #0F3063;
    margin-left: 0;
    margin-right: 0;
}
td { font-size: 20px;}
    h2 { font-size: 28px;}
     li{ font-size: 21px;
        margin-left: 10px;
    }
@media (max-width: 991px){
    td { font-size: 28px;}
     h2 { font-size: 25px;}
    }
@media (max-width: 767px){
     h2 { font-size: 32px;}
    td { font-size: 30px;}
    ul li{ font-size: 30px;}
}
</style>
@include('includes.header')
<br><br>
<table width="70%" align="center">
    <tbody>
        <tr valign="top">
            <td>
                <div align="left">
                    <table border="1" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td colspan="5" valign="top" width="638">
                                    <h2 align="center"><span style="color: #ff00ff;"><b>{{ $post->examname }}
                                            </b></span></h2>
                                    <h2 align="center"><span style="color: #008000;"><b>{{ $post->postname }}
                                            </b></span></h2>
                                    <h2 style="text-align: center;"><span style="color: #ff0000;"><a href="/" target="_blank"><span style="color: #ff0000;"><strong>WWW.SEARCHJOB.COM</strong></span></a></span></h2>
                                </td>
                            </tr>
                            @if($post->fees)
                            <tr>
                                <td colspan="3" valign="top" width="325">
                                    <h2 align="center"><span style="color: #008000;"><b>Important Dates</b></span></h2>
                                    <p> {!! $post->examdate !!}</p>
                                </td>
                                <td colspan="2" valign="top" width="313">
                                    <h2 align="center"><span style="color: #008000;"><b>Application Fee<span style="color: #ff00ff;"></span>
                                            </b></span></h2>
                                            <p> {!! $post->fees !!}</p>
                                </td>
                            </tr>
                            @endif 
                            @if($post->eduqualification)
                            <tr>
                                <td colspan="5" valign="top" width="325">
                                    <h2 align="center"><span style="color: #008000;"><b>Eligibility & Qualification</b></span></h2>
                                    <p>{!! $post->eduqualification !!}</p>
                                </td>
                            </tr>
                            @endif 
                            @if($post->payscale)
                            <tr>
                                <td colspan="5" valign="top" width="325">
                                    <h2 align="center"><span style="color: #008000;"><b>Pay Scale</b></span></h2>
                                    <p>{!! $post->payscale !!}</p>
                                </td>
                            </tr>
                            @endif 
                            @if($post->agerelaxation)
                            <tr>
                                <td colspan="5" valign="top" width="325">
                                    <h2 align="center"><span style="color: #008000;"><b>Age Relaxation</b></span></h2>
                                    <p> {!! $post->agerelaxation !!}</p>
                                </td>
                            </tr>
                            @endif 
                            <tr>
                                <td colspan="5" valign="top" width="638">
                                    <h1 align="center"><span style="color: #008000;"><b>Some Useful Important Links</b></span></h1>
                                </td>
                            </tr>
                            @if($post->applylink)
                            <tr>
                                <td colspan="2" valign="top" width="317">
                                    <h1 align="center"><span style="color: #ff00ff;"><b>Apply Link</b></span></h1>
                                </td>
                                <td colspan="3" valign="top" width="321">
                                    <h1 align="center"><a href="{{ $post->applylink }}" target="_blank"><b>Click Here</b></a></h1>
                                </td>
                            </tr>
                            @endif 
                            @if($post->paylink)
                            <tr>
                                <td colspan="2" valign="top" width="317">
                                    <h1 align="center"><span style="color: #ff00ff;"><b>Official Notification Link</b></span></h1>
                                </td>
                                <td colspan="3" valign="top" width="321">
                                    <h1 align="center"><a href="{{ $post->paylink }}" target="_blank"><b>Click Here</b></a></h1>
                                </td>
                            </tr>
                            @endif 
                            @if($post->websitelink)
                            <tr>
                                <td colspan="2" valign="top" width="317">
                                    <h1 align="center"><span style="color: #ff00ff;"><b>Official Website Link</b></span></h1>
                                </td>
                                <td colspan="3" valign="top" width="321">
                                    <h1 align="center"><a href="{{ $post->websitelink }}" target="_blank"><b>Click Here</b></a></h1>
                                </td>
                            </tr>
                            @endif 
                            @if($post->resultlink)
                            <tr>
                                <td colspan="2" valign="top" width="317">
                                    <h1 align="center"><span style="color: #ff00ff;"><b>Result Link</b></span></h1>
                                </td>
                                <td colspan="3" valign="top" width="321">
                                    <h1 align="center"><a href="{{ $post->resultlink }}" target="_blank"><b>Click Here</b></a></h1>
                                </td>
                            </tr>
                            @endif 
                            @if($post->admitcardlink)
                            <tr>
                                <td colspan="2" valign="top" width="317">
                                    <h1 align="center"><span style="color: #ff00ff;"><b>Admit Card Link</b></span></h1>
                                </td>
                                <td colspan="3" valign="top" width="321">
                                    <h1 align="center"><a href="{{ $post->admitcardlink }}" target="_blank"><b>Click Here</b></a></h1>
                                </td>
                            </tr>
                            @endif 
                            @if($post->howtoapply)
                            <tr>
                                <td colspan="5" valign="top" width="638">
                                    <h1 align="center"><span style="color: #008000;"><b>How to Apply & Article Related to the Post</b></span></h1>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" valign="top" width="317">
                                    {!! $post->howtoapply !!}
                                </td>
                            </tr>
                            @endif 
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>

@include('includes.footer')