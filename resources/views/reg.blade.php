<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchJob</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="rating" content="general">
    <meta http-equiv="content-language" content="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #F9F9F9;
        }

        .required label {
            font-weight: bold;
            margin-right: 10px;
            /* float: right; */
        }

        .required label:after {
            color: #e32;
            content: '*';
            display: inline;
            font-size: 18px;
        }
    </style>
</head>

<body>
    @include('admin.includes.errors')
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('info'))
    <div class="alert alert-info" role="alert">
        {{Session::get('info')}}
    </div>
    @endif

    <br><br>
    <div role="alert" class="alert alert-warning" id="loginNOte">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-13 col-sm-13">
                <div class="">
                    <table>
                        <tbody>
                            <tr>
                                <td style="vertical-align:top;">
                                    <span style="color:red;">
                                        <h5><b>Important Note :</b></h5>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 1px;">

                                    <span style="color:black;">
                                        <h5>

                                            1. On successful registration, you will receive the Login ID and Password on your registered email. Use these to login and fill your online application form.
                                            <br><br>

                                        </h5>
                                    </span>
                                    <span style="color:black;">
                                        <h5>

                                            2. The application for this post is a 2 step process. <br>
                                            <b>Step 1</b> - Registration and profile creation. <br>
                                            <b>Step 2</b> - After login with credentials you will receive Login ID and Password in your registered email ID for completion of Application form and online payment.<br><br>


                                        </h5>
                                    </span>

                                    <!-- <span style="color:black;">
                                    <h5>
                                        3) In case of any difficulties you may contact the helpdesk through e-Mail <b>ucilrect2020@gmail.com</b> and Phone No. <b>022-61306250</b> from 10 AM to 5 PM on working days.
                                    </h5>
                                </span> -->

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <h3 class="mypost01"><u>Registration Details</u></h3><br />
        <form action="{{ route('reg.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-5">
                    <div class="form-group required">
                        <label>Post Applied :</label>
                        <input type="text" name="post_applied" class="form-control" required id="" aria-describedby="" placeholder="Post Applied">
                    </div>
                    <div class="form-group required">
                        <label>Category:</label>
                        <select class="form-control" name="category" required>
                            <option value="">Select</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC/ST/PH">SC/ST/PH</option>
                            <!-- <option value="Result">Result</option> -->
                        </select>
                    </div>
                    <div class="form-group required">
                        <label>Gender :</label>
                        <select class="form-control" name="gender" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <!-- <option value="Result">Result</option> -->
                        </select>
                    </div>
                    <div class="form-group required">
                        <label>Candidate's Full Name :</label>
                        <input type="text" class="form-control" name="full_name" id="" required aria-describedby="" placeholder="Candidate's Full Name">
                    </div>
                    <div class="form-group required">
                        <label>Mobile Number :</label>
                        <input type="number" class="form-control" id="mobile" name="mobile" required aria-describedby="" placeholder="Mobile Number">
                    </div>
                    <div class="form-group required">
                        <label>Email ID :</label>
                        <input type="email" class="form-control" id="email" required name="email" aria-describedby="" placeholder="Email ID">
                    </div>
                    <div class="form-group required">
                        <label>Are you an Indian Citizen :</label>
                        <select class="form-control" name="citizen" required>
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <!-- <option value="Result">Result</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Aadhaar :</label>
                        <input type="number" class="form-control" id="aadhaar" name="aadhaar" aria-describedby="" placeholder="Aadhaar">
                    </div>
                    <div class="form-group">
                        <label>PAN</label>
                        <input type="text" class="form-control" id="pan" name="pan" aria-describedby="" placeholder="PAN">
                    </div>
                    <div class="form-group required">
                        <label>Father's Name</label>
                        <input type="text" class="form-control" id="father" required name="father" aria-describedby="" placeholder="Father's Name">
                    </div>
                    <div class="form-group required">
                        <label>Current Location</label>
                        <input type="text" class="form-control" id="location" required name="location" aria-describedby="" placeholder="Current Location">
                    </div>
                    <!-- <div class="form-group required">
                        <label>Fees</label> -->
                    <input type="hidden" class="form-control" id="fees" name="fees" aria-describedby="" placeholder="Fees" value="{{ $post->fees }}">
                    <input type="hidden" class="form-control" id="obc" name="obc" aria-describedby="" placeholder="Fees" value="{{ $post->obc }}">
                    <input type="hidden" class="form-control" id="sc" name="sc" aria-describedby="" placeholder="Fees" value="{{ $post->sc }}">
                    <input type="hidden" class="form-control" id="female" name="female" aria-describedby="" placeholder="Fees" value="{{ $post->female }}">
                    <!-- </div> -->
                    <div class="form-group required">
                        <label>Educational Qualification</label>
                        <select class="form-control" name="qualification">
                            <option value="">Select Qualification</option>
                            <option value="Postgraduate">Postgraduate</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="12th">12th</option>
                            <option value="10th">10th</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group required">
                        <label>Experience</label>
                        <select class="form-control" name="experience">
                            <option value="">Select Experience</option>
                            <option value="Fresher">Fresher</option>
                            <option value="0 to 1 Yrs">0 to 1 Yrs</option>
                            <option value="1 to 3 Yrs">1 to 3 Yrs</option>
                            <option value="3 to 5 Yrs">3 to 5 Yrs</option>
                            <option value="5+ Yrs">5+ Yrs</option>
                        </select>
                    </div>
                    <!-- <input type="hidden" custom="Hidden Element" name="hidden"> -->
                    <button type="submit" class="btn btn-primary btn-lg float-right">Proceed To Payment</button>
                </div>
            </div>
        </form>


</body>

</html>