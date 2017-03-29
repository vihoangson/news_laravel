<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Good News — News &amp; Magazine Template</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/bootstrap.css" >

	<!-- Theme Style -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/colors/color1.css" id="colors">

	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="{{config("app.theme_news")}}stylesheets/animate.css">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>

	<!-- Favicon and touch icons  -->
	<link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="{{config("app.theme_news")}}javascript/html5shiv.js"></script>
		<script src="{{config("app.theme_news")}}javascript/respond.min.js"></script>
	<![endif]-->
</head>

<body class="change-panel">
   	<!-- Header -->
   	@include("articles.includes.menu_header")

	<!-- Main -->
	<section id="main" class="article-endless">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="sidebar2">
						<div class="tabs style2">
							<ul class="menu-tab">
								<li class="active"><a href="#">Popular</a></li>
							   	<li><a href="#">Latest</a></li>
							</ul><!-- /.menu-tab -->
							<div class="content-tab scroll">
							   	<div class="content">
									<ul class="content-list">
										@foreach ($rs as $element)
											<li><a class="link_endless" data-id="{{$element->id}}" href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></li>
										@endforeach
									</ul>
							   	</div><!-- /.content-list -->
							   	<div class="content">
									<ul class="content-list">
										@foreach ($rs as $element)
											<li><a href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></li>
										@endforeach
									</ul>
							   	</div><!-- /.comments -->
							</div><!-- /.content-tab -->
						</div><!-- /.tabs -->
						<div class="toggle-panel" style="display: none"></div>
					</div><!-- /#sidebar2 -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-8">
					<div class="post-wrap posts posts-list">
						<article class="post"></article><!-- /.post -->
						<!-- /.post -->
						<div class="loadding">
							<span class="infinite"></span>
						</div>
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<!-- Footer -->
	@include("articles.includes.footer")

	<!-- Go Top -->
	<a class="go-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<!-- Javascript -->
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.easing.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/matchMedia.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery-waypoints.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.flexslider.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.transit.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.tweet.min.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/switcher.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.doubletaptogo.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/main.js"></script>
	<script>
	$(".link_endless").click(function(event) {
		$(".post").text("Loading ...");
		$(".post").load("/article/detail/"+$(this).data("id"),function(){

		});
		return false;
	});
	</script>
	
</body>

</html>