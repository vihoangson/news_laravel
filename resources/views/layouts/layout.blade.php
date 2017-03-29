<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Multipress - Responsive Multipurpose HTML5 Template">
	<meta name="author" content="">

	<title> @yield("title","Without requirements or design, programming is the art of adding bugs to an empty text file")</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{PATH_THEME}}img/favicon.ico">
	<link rel="apple-touch-icon" href="{{PATH_THEME}}img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{PATH_THEME}}img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{PATH_THEME}}img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="{{PATH_THEME}}img/apple-touch-icon-144x144.png">

	<!-- Google Webfonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800,700italic,600italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Neuton:400,200,300' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap Core CSS -->
	<link href="{{PATH_THEME}}css/bootstrap.css" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="{{PATH_THEME}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{PATH_THEME}}css/style.css" >
	<link rel="stylesheet" href="{{PATH_THEME}}css/flexslider.css"/>
	<link rel="stylesheet" href="{{PATH_THEME}}css/nivo-lightbox.css" />
	<link rel="stylesheet" href="{{PATH_THEME}}images/themes/default/default.css" />
	<link rel="stylesheet" href="{{PATH_THEME}}css/animate.css" />
	<script src="{{PATH_THEME}}js/jquery-1.11.3.min.js"></script>
	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->

	<!-- Style Switch -->
	<link rel="stylesheet" type="text/css" href="{{PATH_THEME}}css/colors/yellow-black.css" title="yellow" media="screen" />
<script>
$(document).ready(function() {
	$(".lang_box span#vietnamese").click(function(){
		location.href = "/change_lang/vi";
	});
	$(".lang_box span#english").click(function(){
		location.href = "/change_lang/en";
	});
});
</script>
</head>
<body>
<!-- LOADING MASK -->
<div id="mask">   
    <div class="loader">
        <img src="{{PATH_THEME}}images/loading.gif" alt='loading'>
    </div>
</div>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-3 l-content">
				<div class="profile-pic">
					<div class="pic-bg"><img src="{{PATH_THEME}}images/profile-avatar.png" class="img-responsive" alt=""/></div>
				</div>
				<nav>
				<ul class="navigation">
					<li><a href="#">{{trans("blog.profile")}} <i class="fa fa-user"></i></a></li>
					<li><a href="#">{{trans("blog.work")}} <i class="fa fa-briefcase"></i></a></li>
					<li><a href="#">{{trans("blog.resume")}} <i class="fa fa-file-text"></i></a></li>
					<li><a href="#">{{trans("blog.blog")}} <i class="fa fa-comment"></i></a></li>
					<li><a href="#">{{trans("blog.contact")}} <i class="fa fa-envelope"></i></a></li>
				</ul>
				</nav>
			</div>
			<script>
				// ============ ============  ============  ============ 
				// Click selector block then load image preview in article
				// ============ ============  ============  ============ 
				$(".navigation> li:nth-child(4)").click(function(){
					$(".img-responsive").each(function(){
						var src = $(this).data("src");
						$(this).attr("src",src);
					});
				});
			</script>
			<div class="col-md-9 r-content">
				<div class="flexslider">
					<div class="slides">
						@yield("detail_page")
						<!-- SECTION 1 - HOMEPAGE -->
						<section class="no-display">
							<div class="profile" id="1">
								{{-- <div class="lang_box">
									<span id="english">English</span>
									<span id="vietnamese">Tiếng Việt</span>
								</div> --}}
								<h2>{{ trans("blog.xinchao") }} <span>Vi Hoàng Sơn</span><br> {{ trans("blog.laptrinhphp") }}</h2>
								<div class="sep1"></div>
								<p>{{trans("blog.gioithieubanthan")}}</p>
								<div class="personal-info col-md-12 no-padding">
									<h4>{{trans("blog.thongtincanhan")}}</h4>
									<div class="sep2"></div>
									<ul>
										<li>
											<div class="p-info"><em>{{trans("blog.name")}}</em><span>Vi Hoàng Sơn</span></div>
										</li>
										<li>
											<div class="p-info"><em>{{trans("blog.date_of_birth")}}</em><span>October 06, 1986</span></div>
										</li>
										<li>
											<div class="p-info"><em>{{trans("blog.e_mail")}}</em><span>vihoangson@gmail.com</span></div>
										</li>
										<li>
											<div class="p-info"><em>{{trans("blog.address")}}</em><span>Tp.HCM</span></div>
										</li>
										<li>
											<div class="p-info"><em>{{trans("blog.phone")}}</em><span>0121-885-1144</span></div>
										</li>
										<li>
											<div class="p-info"><em>{{trans("blog.website")}}</em><span><a href='//www.vihoangson.com'>www.vihoangson.com</a></span></div>
										</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
						<!-- SECTION 1 - HOMEPAGE -->

						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->
						<section class="no-display">
							<div class="works" id="2">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>{{trans("blog.cacduandathuchien")}}</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>{{trans("blog.ditoitronguoc")}}</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="portfolio-wrap">
									<div class="row">
										<ul id="filter-list" class="clearfix">
											<li class="filter" data-filter="all"><i class="fa fa-th"></i> {{trans("blog.tatca")}}</li>
											<li class="filter hidden" data-filter="webdesign">Web Design</li>
											<li class="filter hidden" data-filter="appicon">App Icons</li>
											<li class="filter hidden" data-filter="iosappui">iOS App UI</li>
											<li class="filter hidden" data-filter="illustration">Illustration</li>
										</ul>
										@include("widgets.ele_preview")
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 2 - WORKS / PROJECTS / PORTFOLIO -->

						<!-- SECTION 3 - CV / RESUME -->
						@include("widgets.ele_resume")
						<!-- SECTION 3 - CV / RESUME -->

						@include("blog")

						<!-- SECTION 5 - CONTACT -->
						<section class="no-height">
							<div class="item contact" id="5">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>{{trans("blog.contact")}}</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>{{trans("blog.ditoitronguoc")}}</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="contact-info">
									{{-- <h4>{{trans("blog.thongtinlienhe")}}</h4> --}}
									<p>{{trans("blog.bancothelienhevoithoi")}}</p>
									<ul>
										<li><i class="fa fa-home"></i> Tp.HCM</li>
										<li><i class="fa fa-phone"></i> +84 01218851144</li>
										<li><i class="fa fa-envelope"></i> vihoangson@gmail.com</li>
									</ul>
								</div>
								<div class="contact-form">
									<h4>{{trans("blog.guitinnhan")}}</h4>
									<form id="contactForm" action="/contact" method="post">
										<input name="_token" value="{{csrf_token()}}" type="hidden">
										<div class="row">
											<div class="col-md-4">
												<input type="text" name="senderName" id="senderName" placeholder="name">
												<input type="email" name="senderEmail" id="senderEmail" placeholder="e-mail">
												<input type="text" name="subject" id="subject" placeholder="Subject">
											</div>
											<div class="col-md-8">
												<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
												<button type="submit">{{trans("blog.guitin")}}</button>
											</div>
										</div>
									</form>
									<div id="successMessage" class="successmessage">
										<p><span class="success-ico"></span> {{trans("blog.camonbandaguithu")}}</p>
									</div>
									<div id="failureMessage" class="errormessage">
										<p><span class="error-ico"></span> {{trans("blog.loidaxayra")}}</p>
									</div>
									<div id="incompleteMessage" class="statusMessage">
										<p>{{trans("blog.vuilongdiendaydu")}}</p>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 5 - CONTACT -->
					</div>
				</div>

				<!-- FOOTER -->
				<footer>
					<div class="row">
						<div class="col-md-7">
							<p>&copy; 2014 <a href='/'>Vi Hoàng Sơn</a>. All Rights Reserved</p>
						</div>
						<div class="col-md-5">
							<ul class="social">
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="http://facebook.com/vihoangson"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- MAIN CONTENT -->

<!-- JavaScript -->

<script src="{{PATH_THEME}}js/bootstrap.js"></script>
<script src="{{PATH_THEME}}js/jquery.flexslider.js"></script>
<script src="{{PATH_THEME}}js/jquery.easing.js"></script>
<script src="{{PATH_THEME}}js/jquery.mixitup.min.js"></script>
<script src="{{PATH_THEME}}js/nivo-lightbox.min.js"></script>
<script src="{{PATH_THEME}}js/jquery.appear.js"></script>
<script src="{{PATH_THEME}}js/jquery.inview.js"></script>
<script src="{{PATH_THEME}}js/main.js"></script>
<script src="{{PATH_THEME}}js/contact.js"></script>
<script src="{{PATH_THEME}}js/animations.js"></script>

@if(Config::get('myblog.map_google'))	
	<script src="//maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{PATH_THEME}}js/gmaps.js"></script>
@endif
<!-- 
 -->

@yield("script_custom")
</body>
</html>