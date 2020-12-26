@php
$about=DB::table('about')->first();
$mainabout=DB::table('mainabout')->first();
$skill=DB::table('skills')->first();
$bar=DB::table('skillbars')->get();
@endphp
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anik Acharjya portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('public/front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('public/front/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('public/front/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- animate.css-->
    <link rel="stylesheet" href="{{asset('public/front/vendor/animate.css/animate.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('public/front/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
   <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset($mainabout->photo)}}">

   {{--  alerts --}}
    <link rel="stylesheet" href="{{ asset('public/front/vendor/toaster/toastr.css')}}">
   <link rel="stylesheet" href="{{ asset('public/front/vendor/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
{{--   
      <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> --}}

    <!-- CSS -->


        <style>
 
        .text_1 {
  overflow: hidden;
  white-space: nowrap;
  animation: typewriter;
  display: inline-block;
  position: relative;
  animation-duration: 10s;
  animation-timing-function: steps(25, end);
  animation-iteration-count: infinite;
}
.text_1::after {
  content: "|";
  position: absolute;
  right: 0;
  animation: caret infinite;
  animation-duration: 1s;
  animation-timing-function: steps(1, end);
}

@keyframes text2 {
  0%, 50%, 100% {
    width: 0;
  }
  
  60%, 90% {
    width: 8.1em;
  }
}
@keyframes text1 {
  0%, 50%, 100% {
    width: 0;
  }
  10%, 40% {
    width: 7.9em;
  }
}
.text_1 {
  animation: text1;
}
.text_2 {
  animation: text2;
}
.text_1, .text_2 {
  overflow: hidden;
  white-space: nowrap;
  display: inline-block;
  position: relative;
  animation-duration: 20s;
  animation-timing-function: steps(25, end);
  animation-iteration-count: infinite;
}
.text_1::after, .text_2::after {
  content: "|";
  position: absolute;
  right: 0;
  animation: caret infinite;
  animation-duration: 1s;
  animation-timing-function: steps(1, end);

}

.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 50%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}



.span12{width:940px;}
.span11{width:860px;}
.span10{width:780px;}
.span9{width:700px;}
.span8{width:620px;}
.span7{width:540px;}
.span6{width:460px;}
.span5{width:380px;}
.span4{width:300px;}
.span3{width:220px;}
.span2{width:140px;}
.span1{width:60px;}
.carousel{position:relative;margin-bottom:20px;line-height:1;}
.carousel-inner{overflow:hidden;width:100%;position:relative;}
.carousel-inner>.item{display:none;position:relative;-webkit-transition:0.6s ease-in-out left;-moz-transition:0.6s ease-in-out left;-o-transition:0.6s ease-in-out left;transition:0.6s ease-in-out left;}.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;line-height:1;}
.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block;}
.carousel-inner>.active{left:0;}
.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%;}
.carousel-inner>.next{left:100%;}
.carousel-inner>.prev{left:-100%;}
.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0;}
.carousel-inner>.active.left{left:-100%;}
.carousel-inner>.active.right{left:100%;}
.carousel-indicators .active{background-color:#fff;}
a:hover,a:active{outline:0;}
.input-append .active,.input-prepend .active{background-color:#a9dba9;border-color:#46a546;}
.carousel-control{position:absolute;top:40%;left:15px;width:40px;height:40px;margin-top:-20px;font-size:60px;font-weight:100;line-height:30px;color:#ffffff;text-align:center;background:#222222;border:3px solid #ffffff;-webkit-border-radius:23px;-moz-border-radius:23px;border-radius:23px;opacity:0.5;filter:alpha(opacity=50);}.carousel-control.right{left:auto;right:15px;}
.carousel-control:hover,.carousel-control:focus{color:#ffffff;text-decoration:none;opacity:0.9;filter:alpha(opacity=90);}
.tooltip.left{margin-left:-3px;padding:0 5px;}
.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000000;}
.popover.left{margin-left:-10px;}
.tooltip.right{margin-left:3px;padding:0 5px;}
.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000000;}
.popover.right{margin-left:10px;}
.popover.right .arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999;border-right-color:rgba(0, 0, 0, 0.25);}.popover.right .arrow:after{left:1px;bottom:-10px;border-left-width:0;border-right-color:#ffffff;}
@media (min-width:768px) and (max-width:979px){.hidden-desktop{display:inherit !important;} .visible-desktop{display:none !important ;} .visible-tablet{display:inherit !important;} .hidden-tablet{display:none !important;}}@media (max-width:767px){.hidden-desktop{display:inherit !important;} .visible-desktop{display:none !important;} .visible-phone{display:inherit !important;} .hidden-phone{display:none !important;}}.visible-print{display:none !important;}
      </style>
  </head>
  <body>
    {{-- messenger --}}
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="111951620581305"
  theme_color="#7646ff">
      </div>
      {{-- end messenger --}}
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">  <div  class="logo"><img src="{{asset($mainabout->photo)}}" width="50"></div></a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll">About</a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll">My work</a></li>
              <li class="nav-item"><a href="#certifications" class="nav-link link-scroll">Certifications</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @php
     $cv=DB::table('files')->first();
    @endphp
    <!-- Intro Image-->
    <section id="intro" style="background:linear-gradient(rgb(0,0,0,0.6),rgb(0,0,0,0.6)), url({{asset('public/front/img/vault.jpg')}}) center center no-repeat; background-size: cover;" class="intro-section pb-2">
      <div class="container text-center">
       
        <h3 data-animate="fadeInDown" class="text-shadow mb-2">{{$about->about_tagline}}</h3>
        <!--<p data-animate="slideInUp" class="h3 text-shadow text-400">I am a web designer and developer</p>-->
       
    <h4>
<span class="text_1">Web Developer..</span>
<span class="text_2">Web Designer...</span>
</h4>
        
<a href="#" class="btn btn-success btn-sm rounded text-white" style="text-decoration: none;" role="button" aria-pressed="true" data-toggle="modal" data-target="#largeModal">Know More</a>
<a href="{{route('cv.download',$cv->cv)}}" download="{{$cv->cv}}" class="btn btn-dark btn-sm rounded border border-success" style="text-decoration: none;"><i class="fa fa-download" aria-hidden="true" ></i> Download CV</a>
      </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">About me</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>
            {{$skill->description}}
            </p>
    
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2" data-animate="fadeInDown">
    <img class="img-fluid" src="{{asset('public/front/img/s1.jpg')}}" style="height:112px; width: 169px;" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="{{asset('public/front/img/s2.jpg')}}" style="height:253px;" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="{{asset('public/front/img/s3.jpg')}}" style="height:253px;" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('public/front/img/s4.jpg')}}" style="height:112px; width: 169px;" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{asset('public/front/img/s6.jpg')}}" style="height:105px; width: 169px;" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="{{asset('public/front/img/s5.jpg')}}" style="height:253px;" alt="Card image cap">
  </div>
          </div>
        </div>

        
          
          <div data-animate="fadeInUp" class="col-lg-6">
            @foreach($bar as $row)
            <div class="skill-item">
              <div class="progress-title">{{$row->skill_title}}</div>
              <div class="progress">
                <div role="progressbar rounded" style="width:{{$row->skill_percent}}" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill1 bg-info rounded"></div>
              </div>
            </div>
            @endforeach
      
          </div>
          <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="{{asset('public/front/img/abo.jpg')}}" alt="This is me" class="image rounded-circle img-fluid"></div>
        </div>
      </div>
    </section>
    @php
     $webdesign=DB::table('works')->where('webdesign',1)->orderBy('id','DESC')->limit(8)->get();
     $laravel=DB::table('works')->where('laravel',1)->orderBy('id','DESC')->limit(8)->get();
     $php=DB::table('works')->where('php',1)->orderBy('id','DESC')->limit(8)->get();
     $vuejs=DB::table('works')->where('vuejs',1)->orderBy('id','DESC')->limit(8)->get();
    @endphp
    <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">My work</h2>
           
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="laravel">Laravel</a></li>
            <li><a href="#" data-filter="php">Php</a></li>
            <li><a href="#" data-filter="vuejs">Vue.js</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
                 @foreach($webdesign as $row)
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{asset($row->main_photo)}}" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">{{$row->project_title}}</h3>
                            <p>{{$row->detail}}</p>
                          </div>
                        </div></a>
                      <div data-images="{{asset($row->photo_one)}},{{asset($row->photo_two)}},{{asset($row->photo_three)}}" class="sr-only reference-description">
                        <p>{{$row->description}}</p>
                        <p><b>Using Language:</b>{{$row->Language}}</p>
                        <p class="buttons text-center">
						<a href="{{$row->website_link}}" class="btn btn-outline-primary">
						<i class="fa fa-globe"></i>Visit website</a>
						<a href="{{$row->github_link}}" class="btn btn-outline-primary"><i class="fa fa-github"></i>Visit GitHub</a>
						</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @foreach($laravel as $row)
                  <div data-category="laravel" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{asset($row->main_photo)}}" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">{{$row->project_title}}</h3>
                            <p>{{$row->detail}}</p>
                          </div>
                        </div></a>
                      <div data-images="{{asset($row->photo_one)}},{{asset($row->photo_two)}},{{asset($row->photo_three)}}" class="sr-only reference-description">
                        <p>
                           {{$row->description}}
                        </p>
                        <p><b>Using :</b>{{$row->Language}}</p>
                                     <p class="buttons text-center">
                <a href="{{$row->website_link}}" class="btn btn-outline-primary">
            <i class="fa fa-globe"></i>Visit website</a>
            <a href="{{$row->github_link}}" class="btn btn-outline-primary"><i class="fa fa-github"></i>Visit GitHub</a>
            </p> 
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @foreach($php as $row)
                  <div data-category="php" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{asset($row->main_photo)}}" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">{{$row->project_title}}</h3>
                            <p>{{$row->detail}}</p>
                          </div>
                        </div></a>
                      <div data-images="{{asset($row->photo_one)}},{{asset($row->photo_two)}},{{asset($row->photo_three)}}" class="sr-only reference-description">
                        <p>{{$row->description}}</p>
                        <p><b>Language:</b>{{$row->Language}}</p>
                <p class="buttons text-center">
                <a href="{{$row->website_link}}" class="btn btn-outline-primary">
            <i class="fa fa-globe"></i>Visit website</a>
            <a href="{{$row->github_link}}" class="btn btn-outline-primary"><i class="fa fa-github"></i>Visit GitHub</a>
            </p> 
                      </div>
                    </div>
                  </div>
                  @endforeach
           
                     @foreach($vuejs as $row)
                  <div data-category="vuejs" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{asset($row->main_photo)}}" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">{{$row->project_title}}</h3>
                            <p>{{$row->detail}}</p>
                          </div>
                        </div></a>
                      <div data-images="{{asset($row->photo_one)}},{{asset($row->photo_two)}},{{asset($row->photo_three)}}" class="sr-only reference-description">
                        <p>{{$row->description}}</p>
                        <p><b>Language:</b>{{$row->Language}}</p>
                <p class="buttons text-center">
                <a href="{{$row->website_link}}" class="btn btn-outline-primary">
            <i class="fa fa-globe"></i>Visit website</a>
            <a href="{{$row->github_link}}" class="btn btn-outline-primary"><i class="fa fa-github"></i>Visit GitHub</a>
            </p> 
                      </div>
                    </div>
                  </div>
                  @endforeach
          
                
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Customers-->
  <!-- certificate-->
    <section id="certifications" class="pfblock pfblock-gray">
      <div class="container">
     <header class="text-center">
        <h2 class="title">Certifications</h2>
        </header>


        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div class="span4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->

                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
</div>

    </section>
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
      <div class="container">
     <header class="text-center">
        <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="{{route('store.msg')}}">
              @csrf
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="FIRST_NAME" placeholder="Your First Name *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="LAST_NAME" placeholder="Your Last Name *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="EMAIL" placeholder="Your Email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="PHONE" placeholder="Your Phone" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <textarea name="MESSAGE" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- Map-->
  <p>
<iframe src="{{$about->map}}" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</p>
	<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<img src="{{asset('public/front/img/abo.jpg')}}" style="height:200px;" class="img-responsive">
						</div>
						<div class="col-lg-6 col-md-6">
						<p><b>Name:</b>{{$about->name}}</p>
						<p><b>Phone:</b>{{$about->phone}}</p>
						<p><b>Email:</b>{{$about->email}}</p>
						<div>
						    
						</div>
						<a href="{{$about->facebook}}" class="col-lg-3 col-md-3" >
               <i class="fa fa-facebook"></i></a>
            			<a href="{{$about->instagram}}" class="col-lg-3 col-md-3" >
                <i class="fa fa-instagram"></i></a>
                			<a href="{{$about->linkedin}}" class="col-lg-3 col-md-3" >
               <i class="fa fa-linkedin"></i></a>

                
						</div>
						
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-lg btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="{{$about->facebook}}" class="external facebook wow fadeInUp">
                <i class="fa fa-facebook"></i></a><a href="{{$about->instagram}}" data-wow-delay="0.2s" class="external instagram wow fadeInUp">
                    <i class="fa fa-instagram"></i></a><a href="{{$about->linkedin}}" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-google-plus"></i>
                    </a><a href="{{$about->email}}" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
          </div>

          <!-- /.6-->
             <div class="col-md-6 text-center ">
            <p class="social"><b><i class="fa fa-envelope"></i>&nbsp;</b>{{$about->email}}</p>
             <p class=""><b><i class="fa fa-phone"></i>&nbsp;</b>{{$about->phone}}</p>
          </div>

          <div class="col-12 mt-4">
            <p class="template-bootstrapious">Developed By |Anik Acharjya</p>
            
          </div>
        </div>
      </div>
    </footer>
         <script>
     @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
  </script>

    <!-- JavaScript files-->
    <script src="{{asset('public/front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/front/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('public/front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/front/vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/front/vendor/jquery.counterup/jquery.counterup.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="{{asset('public/front/js/front.js')}}"></script>

    {{-- alerts --}}
      <script  src="{{ asset('public/front/vendor/toaster/toastr.min.js')}}"></script>
    <script  src="{{ asset('public/front/vendor/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
  $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
  </body>
</html>
