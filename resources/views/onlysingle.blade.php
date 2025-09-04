<!DOCTYPE html>
<html>
<title>SearchJob</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="rating" content="general">
<meta http-equiv="content-language" content="en">
<style>
    .example_b {
        color: #fff !important;
        text-transform: uppercase;
        text-decoration: none;
        background: #60a3bc;
        padding: 20px;
        border-radius: 50px;
        display: inline-block;
        border: none;
        transition: all 0.4s ease 0s;
    }

    .example_b:hover {
        text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
        -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
        -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
        transition: all 0.4s ease 0s;
    }

    table h1 {
        display: block;
        font-size: 22px;
        color: #0F3063;
        margin-left: 0;
        margin-right: 0;
    }

    td {
        font-size: 20px;
    }

    h2 {
        font-size: 28px;
    }

    li {
        font-size: 21px;
        margin-left: 10px;
    }

    @media (max-width: 991px) {
        td {
            font-size: 28px;
        }

        h2 {
            font-size: 25px;
        }
    }

    @media (max-width: 767px) {
        h2 {
            font-size: 32px;
        }

        td {
            font-size: 30px;
        }

        ul li {
            font-size: 30px;
        }
    }
</style>
@include('includes.header')
<br><br>
<table width="70%" align="center">
    <tbody>
        <tr valign="top">
            <td>
                <div align="left">
                    <table align="center" style="margin-left:10px">
                        <tbody>
                            <tr>
                                <td colspan="5" valign="top" width="638">
                                    <h1 align="center"><span style="color: #008000;"><b>{{ $post->examname }}</b></span></h1>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" valign="top" width="317">
                                    {!! $post->description !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- <div style="margin: auto; width: 50%;">
        <table align="center" style="margin-left:10px">
            <tbody>
                <tr>
                    <td colspan="5" valign="top" width="317">
                        <table border="1" cellspacing="0" cellpadding="0" style="font-family: &quot;Times New Roman&quot;;">
                            <tbody>
                                <tr>
                                    <td colspan="2" valign="top" width="320" style="font-size: 20px;">
                                        <h2 align="center" style="font-size: 28px;"><span style="color: rgb(255, 0, 255);"><b>Apply Link</b></span></h2>
                                    </td>
                                    <td colspan="3" valign="top" width="318" style="font-size: 20px;">
                                        <h2 align="center" style="font-size: 28px;"><a href="{{ route('post.pay', ['slug' => $post->slug ]) }}" target="_blank"><b>Click Here</b></a></h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->

<!-- <div class="button_cont" align="center"><a class="example_b" href="{{ route('post.pay', ['slug' => $post->slug ]) }}" target="_blank">Apply Link</a></div> -->

@include('includes.footer')