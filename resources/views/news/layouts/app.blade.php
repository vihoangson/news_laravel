<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Globalnews - Post-Item-Details</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- bootstrap styles-->
<link href="{{PATH_THEME_NEWS}}css/bootstrap.min.css" rel="stylesheet">
<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
<!-- ionicons font -->
<link href="{{PATH_THEME_NEWS}}css/ionicons.min.css" rel="stylesheet">
<!-- animation styles -->
<link rel="stylesheet" href="{{PATH_THEME_NEWS}}css/animate.css" />
<!-- custom styles -->
<link href="{{PATH_THEME_NEWS}}css/custom-red.css" rel="stylesheet" id="style">
<!-- owl carousel styles-->
<link rel="stylesheet" href="{{PATH_THEME_NEWS}}css/owl.carousel.css">
<link rel="stylesheet" href="{{PATH_THEME_NEWS}}css/owl.transitions.css">
<!-- magnific popup styles -->
<link rel="stylesheet" href="{{PATH_THEME_NEWS}}css/magnific-popup.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
  #content_news img{
    max-width: 100%;
    max-height: auto !important;
  }
</style>    
</head>
<body>
<!-- preloader start -->
<div id="preloader">
  <div id="status"></div>
</div>
<!-- preloader end -->

<div class="switcher" style="left:-50px;"> <a id="switch-panel" class="hide-panel"> <i class="ion-gear-a"></i> </a>
  <div id="switcher">
    <ul class="colors-list">
      <li><a href="#" class="red" id="custom-red"></a></li>
      <li><a href="#" class="green" id="custom-green"></a></li>
      <li><a href="#" class="purple" id="custom-purple"></a></li>
      <li><a href="#" class="blue" id="custom-blue"></a></li>
    </ul>
  </div>
</div>
<!-- /END THEME SWITCHER--> <!-- wrapper start -->
<div class="wrapper"><!-- header toolbar start -->
  <div class="header-toolbar hidden">
    <div class="container">
      <div class="row">
        <div class="col-md-16 text-uppercase">
          <div class="row">
            <div class="col-sm-8 col-xs-16">
              <ul id="inline-popups" class="list-inline">
                <li class="hidden-xs"><a href="#">advertisement</a></li>
                <li><a class="open-popup-link" href="#log-in" data-effect="mfp-zoom-in">log in</a></li>
                <li><a class="open-popup-link" href="#create-account" data-effect="mfp-zoom-in">create account</a></li>
                <li><a  href="#">About</a></li>
              </ul>
            </div>
            <div class="col-sm-8 col-xs-16">
              <div class="row">
                <div id="weather" class="col-lg-9 col-sm-8 col-xs-16"></div>
                <div id="time-date" class="col-lg-7 col-sm-8 col-xs-16"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header toolbar end --> 
  <!-- sticky header start -->
  <div class="sticky-header"> 
    <!-- header start -->
    <div class="container header">
      <div class="row">
        <div class="col-sm-5 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="/news">globalnews</a></div>
        <div class="col-sm-11 col-md-11 hidden-xs text-right"><img src="{{PATH_THEME_NEWS}}images/ads/468-60-ad.gif" width="468" height="60" alt=""/></div>
      </div>
    </div>
    <!-- header end --> 
    <!-- nav and search start -->
    <div class="nav-search-outer"> 
      <!-- nav start -->
      
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-sm-16"> <a href="javascript:;" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
                @include("news._includes.navbar")
              </div>
            </div>
          </div>
        </div>
        <!-- nav end --> 
        <!-- search start -->
        
        <div class="search-container ">
          <div class="container">
            <form action="" method="" role="search">
              <input id="search-bar" placeholder="Type & Hit Enter.." autocomplete="off">
            </form>
          </div>
        </div>
        <!-- search end --> 
      </nav>
      <!--nav end--> 
    </div>
    <!-- nav and search end--> 
  </div>
  <!-- sticky header end --> 
  <!-- bage header Start -->
  <div class="container">
    <div class="page-header">
      <h1>@yield("title_page_h1","Trang blog cá nhân")</h1>
      @section("breadcrumb")
        <ol class="breadcrumb">
          <li><a href="/news">Trang chủ</a></li>
          <li class="active">Trang blog cá nhân</li>
        </ol>
      @show
    </div>
  </div>
  <!-- bage header End -->
  <!-- data Start -->
  <section>
    <div class="container ">
      <div class="row "> 
        <!-- left sec Start -->
        <div class="col-md-11 col-sm-11">
          <div class="row"> 
            <!-- post details start -->
            <div class="col-sm-16">
              <div class="row">
                @yield("content")
              </div>
            </div>
            <!-- post details end --> 
            
          </div>
        </div>
        <!-- left sec End --> 
        <!-- right sec Start -->
        <div class="col-sm-5 hidden-xs right-sec">
          @include("news._includes.col_right")
        </div>
        <!-- Right Sec End --> 
      </div>
    </div>
  </section>
  <!-- Data End --> 
  
  <!-- Footer Start -->
  <footer>
    <div class="top-sec">
      <div class="container ">
        <div class="row match-height-container">
          <div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="row">
              <div class="col-sm-16">
                <div class="f-title">Trang cá nhân của tôi</div>
                <p>Rất vui khi được chia sẻ với mọi người </p>
              </div>
              <div class="col-sm-16">
                <div class="f-title">Nhận thư khi có cập nhật mới</div>
                <form class="form-inline">
                  <input type="email" class="form-control" id="input-email" placeholder="Type your e-mail adress">
                  <button type="submit" class="btn"> <span class="ion-paper-airplane text-danger"></span> </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-5 popular-tags  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">popular tags</div>
            <ul class="tags list-unstyled pull-left">
              <li><a href="#">Business</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">video conferece</a></li>
              <li><a href="#">conferece</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">education</a></li>
              <li><a href="#">Smart phones</a></li>
              <li><a href="#">Samsung mobile</a></li>
              <li><a href="#">AI</a></li>
              <li><a href="#">video conferece</a></li>
              <li><a href="#">conferece</a></li>
              <li><a href="#">education</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">computer</a></li>
            </ul>
          </div>
          <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
            <div class="f-title">recent posts</div>
            <ul class="list-unstyled">
               @foreach($blog_bottom_footer as $blog)
                <li> <a href="#">
                  <div class="row">
                    <div class="col-sm-4"><img class="img-thumbnail pull-left" src="/uploads/{{$blog->blog_image}}" width="70" height="70" alt=""/> </div>
                    <div class="col-sm-12">
                      <h4>{{$blog->blog_title}}</h4>
                      <div class="f-sub-info">
                        <div class="time"><span class="ion-android-data icon"></span>{{$blog->created_at->format("M d y")}}</div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                      </div>
                    </div>
                  </div>
                  </a> </li>
               @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="btm-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-16">
            <div class="row">
              <div class="col-sm-10 col-xs-16 f-nav wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">
                <ul class="list-inline ">
                  <li> <a href="/news"> Trang chủ </a> </li>
                  <li> <a href="/"> Liên hệ </a> </li>
                </ul>
              </div>
              <div class="col-sm-6 col-xs-16 copyrights text-right wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">© 2014 GLOBALNEWS THEME - ALL RIGHTS RESERVED</div>
            </div>
          </div>
          <div class="col-sm-16 f-social  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="10">
            <ul class="list-inline">
              <li> <a href="http://fb.com/vihoangson"><span class="ion-social-twitter"></span></a> </li>
              <li> <a href="http://fb.com/vihoangson"><span class="ion-social-facebook"></span></a> </li>
              <li> <a href="http://fb.com/vihoangson"><span class="ion-social-instagram"></span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->
  <div id="create-account" class="white-popup mfp-with-anim mfp-hide">
    <form role="form">
      <h3>Create Account</h3>
      <hr>
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-16">
          <input type="submit" value="Register" class="btn btn-danger btn-block btn-lg" tabindex="7">
        </div>
      </div>
    </form>
  </div>
  <div id="log-in" class="white-popup mfp-with-anim mfp-hide">
    <form role="form">
      <h3>Log In Your Account</h3>
      <hr>
      <div class="form-group">
        <input type="text" name="access_name" id="access_name" class="form-control" placeholder="Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="4">
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-16">
          <input type="submit" value="Log In" class="btn btn-danger btn-block btn-lg" tabindex="7">
        </div>
      </div>
    </form>
  </div>
</div>
<!-- wrapper end --> 
<!-- jQuery --> 
<script src="{{PATH_THEME_NEWS}}js/jquery.min.js"></script> 
<!--jQuery easing--> 
<script src="{{PATH_THEME_NEWS}}js/jquery.easing.1.3.js"></script> 
<!-- bootstrab js --> 
<script src="{{PATH_THEME_NEWS}}js/bootstrap.js"></script> 
<!--style switcher--> 
<script src="{{PATH_THEME_NEWS}}js/style-switcher.js"></script> <!--wow animation--> 
<script src="{{PATH_THEME_NEWS}}js/wow.min.js"></script> 
<!-- time and date --> 
<script src="{{PATH_THEME_NEWS}}js/moment.min.js"></script> 
<!--news ticker--> 
<script src="{{PATH_THEME_NEWS}}js/jquery.ticker.js"></script> 
<!-- owl carousel --> 
<script src="{{PATH_THEME_NEWS}}js/owl.carousel.js"></script> 
<!-- magnific popup --> 
<script src="{{PATH_THEME_NEWS}}js/jquery.magnific-popup.js"></script> 
<!-- weather --> 
<script src="{{PATH_THEME_NEWS}}js/jquery.simpleWeather.min.js"></script> 
<!-- calendar--> 
<script src="{{PATH_THEME_NEWS}}js/jquery.pickmeup.js"></script> 
<!-- go to top --> 
<script src="{{PATH_THEME_NEWS}}js/jquery.scrollUp.js"></script> 
<!-- scroll bar --> 
<script src="{{PATH_THEME_NEWS}}js/jquery.nicescroll.js"></script> 
<script src="{{PATH_THEME_NEWS}}js/jquery.nicescroll.plus.js"></script> 
<!--masonry--> 
<script src="{{PATH_THEME_NEWS}}js/masonry.pkgd.js"></script> 
<!--media queries to js--> 
<script src="{{PATH_THEME_NEWS}}js/enquire.js"></script> 
<!--custom functions--> 
<script src="{{PATH_THEME_NEWS}}js/custom-fun.js"></script>
<script>
  function debug_page(){
    $(".hidden").removeClass("hidden");
  }
</script>
</body>
</html>