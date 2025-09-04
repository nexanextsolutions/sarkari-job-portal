<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<style>
  body {
    overflow-x: hidden;
    margin: 0;
    padding: 0;
  }
  .logo {
      padding: 10px 0;
      float: left;
      margin-left: 25px;
    }

  .center-tables table td {
    width: auto;
  }

  .center-tables table td .table-center {
    margin-right: 15px;
    margin-left: 15px;
  }

  .center-tables #heading>div a {
    color: #fff;
    text-decoration: none;
  }

  .center-tables #heading #view a {
    color: inherit;
  }

  #header,
  #wrap,
  #marquee1 {
    max-width: 1010px;
    width: auto;
  }

  #image1,
  #image2,
  #image3,
  #image4,
  #image5,
  #image6,
  #image7,
  #image8 {
    margin: 2px;
    width: 98.5%;
  }

  h1.heading {
    background: #ab183d;
    color: #fff;
    padding: 6px;
    font-size: 1.5em;
  }

  table.box-data {
    max-width: 1000px;
    width: 100%;
  }

  .footer-col a {
    color: rgba(0, 0, 0, 0.75);
  }

  footer {
    float: none;
    width: 74%;
    text-align: center;
    display: block;
    margin: 0 auto;
  }

  .footer-content-wrapper {
    width: 100%;
    margin: 1em auto;
    padding: 2% 0;
  }

  .footer-col {
    display: inline-block;
    padding: 0.5em 0.1em 0.5em 1em;
    box-sizing: border-box;

  }

  .footer-col:nth-child(4) {
    border: none;
  }

  .ta-l {
    text-align: left;
  }

  .flt {
    float: left;
  }

  .flt:nth-child(4):after {
    content: " ";
    visibility: hidden;
    display: block;
    height: 1em;
    clear: both;
  }

  .large-25 {
    width: 25%;
  }

  .large-50 {
    width: 50%;
  }

  .col-3-display {
    display: flex;
    flex-wrap: wrap;
  }

  .col-3-display a {
    display: inline-block;
    width: 33%;
  }

  .footer-col a {
    display: block;
    text-decoration: none;
    margin: 0.3em 0;
    font-size: 13px;
    margin: 0 0 10px;
  }

  .footer-content-wrapper h3 {
    font-size: 1.3rem;
  }

  @media (max-width: 550px) {
    .small-50 {
      width: 50%;
    }

    .footer-col:nth-child(2) {
      border: none;
    }

    #header {
      width: 100%;
    }

  }

  @media (max-width: 300px) {
    .tiny-100 {
      width: 100%;
    }

    .footer-col {
      border: none;
    }

  }
</style>
</head>

<body>
  <div align="center">
    <div id="header" class="text-center clearfix">
      <div class="logo">
        <img src="{{ asset('logo.png') }}" height="132px" width="150px" alt="">
      </div>
      <div id="head-title">SARKARI JOB<br></div>
      <font size="+1" color="#ffffff"><b>WWW.INDIATESTRESULT.IN</b></font>
    </div>
    <div id="wrap">
      <ul class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('private') }}">Latest Job</a></li>
        <li><a href="{{ route('private') }}">Result</a></li>
        <li><a href="{{ route('private') }}">Admit Card</a></li>
        <li><a href="{{ route('private') }}">Answer Key</a></li>
        <li><a href="{{ route('private') }}">Admission</a></li>
        <li><a href="{{ route('private') }}">Syllabus</a></li>
        <li><a href="{{ route('private') }}">Contact Us</a></li>
        <!-- <li><a href="{{ route('onlyresult') }}">Results</a></li> -->
      </ul>
      <br>
    </div>