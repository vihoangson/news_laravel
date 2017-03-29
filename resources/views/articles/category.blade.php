
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
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="{{config("app.theme_news")}}icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="{{config("app.theme_news")}}icon/favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="{{config("app.theme_news")}}javascript/html5shiv.js"></script>
		<script src="{{config("app.theme_news")}}javascript/respond.min.js"></script>
	<![endif]-->
</head>

<body class="hide-navigation">
   	<!-- Header -->
	@include("articles.includes.menu_header")
   	

	<!-- Main -->
	<section id="main" class="category-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-wrap">
						@foreach ($rs as $element)
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#">
										<img src="{{get_imgs($element->article_imgs)}}" alt="{{$element->article_title}}">
									</a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}#">Mustreads</a>
									</div>
									<h3><a href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></h3>
									<p class="excerpt-entry">{{show_extra_content($element->article_extra_content)}}</p>
									<div class="activity">
										<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
									</div>
								</div>
							</article><!--  /.post -->
							{{-- expr --}}
						@endforeach
						{!! $rs->render() !!}
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar-widget-1">
						<div class="widget widget-tabs2">
							<div class="tabs style2">
								<ul class="menu-tab">
									<li class="active"><a href="{{config("app.theme_news")}}#">5 Most Popular</a></li>
								   	<li><a href="{{config("app.theme_news")}}#">5 Most Emailed</a></li>
								</ul><!-- /.menu-tab -->
								<div class="content-tab">
								   	<div class="content">
										<ul class="most-popular">
											<li>
												<div class="order">1</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">2</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">3</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">4</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">5</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
										</ul>
								   	</div><!-- /.content-list -->
								   	<div class="content">
										<ul class="most-popular">
											<li>
												<div class="order">1</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
											<li>
												<div class="order">2</div>
												<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								</div><!-- /.content-tab -->
							</div><!-- /.tabs -->
						</div><!-- /.widget-tabs2 -->
						<div class="widget widget-ads">
							<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/ad.jpg" alt="image"></a>
							<p class="text-ad">Advertisement</p>
						</div><!-- /.widget-ads -->
						<div class="widget widget-most-popular">
							<h5 class="widget-title">5 Most Popular</h5>
							<ul>
								<li>
									<div class="order">1</div>
									<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
								</li>
								<li>
									<div class="order">2</div>
									<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
								</li>
								<li>
									<div class="order">3</div>
									<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
								</li>
								<li>
									<div class="order">4</div>
									<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
								</li>
								<li>
									<div class="order">5</div>
									<p><a href="{{config("app.theme_news")}}">The World’s Youngest Billionaire is Just 24 and She’s From Hong Kong</a></p>
								</li>
							</ul>
						</div><!-- /.widget-popular -->
						<div class="widget widget-tabs">
							<div class="tabs">
								<ul class="menu-tab">
									<li class="active"><a href="{{config("app.theme_news")}}#">Comments</a></li>
								   	<li><a href="{{config("app.theme_news")}}#">Popular</a></li>
								   	<li><a href="{{config("app.theme_news")}}#">Tags</a></li>
								</ul><!-- /.menu-tab -->
								<div class="content-tab">
								   	<div class="content">
										<ul class="comments">
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>	
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
											<li>
												<div class="avatar">
													<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/user.jpg" alt="image"></a>
												</div>
												<p><a href="{{config("app.theme_news")}}#">Jack</a> on <a href="{{config("app.theme_news")}}#">I think your best bet would be to start or join a startup.</a> 2 hours</p>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								   	<div class="content">
										<ul class="pop-posts">
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
										</ul>
								   	</div><!-- /.comments -->
								   	<div class="content">
										<div class="tags">
											<a href="{{config("app.theme_news")}}#">business</a>
											<a href="{{config("app.theme_news")}}#">themeforest</a>
											<a href="{{config("app.theme_news")}}#">good news</a>
											<a href="{{config("app.theme_news")}}#">startups</a>
											<a href="{{config("app.theme_news")}}#">red</a>
											<a href="{{config("app.theme_news")}}#">politics</a>
											<a href="{{config("app.theme_news")}}#">europe</a>
											<a href="{{config("app.theme_news")}}#">asia</a>
										</div>
								   	</div><!-- /.comments -->
								</div><!-- /.content-tab -->
							</div><!-- /.tabs -->
						</div><!-- /.widget-tabs -->
						<div class="widget widget-follow-us">
							<h5 class="widget-title text-dark">Follow Us</h5>
							<div class="socials">
								<a class="facebook" href="{{config("app.theme_news")}}#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="{{config("app.theme_news")}}#"><i class="fa fa-twitter"></i></a>
								<a class="google" href="{{config("app.theme_news")}}#"><i class="fa fa-google-plus"></i></a>
								<a class="youtube" href="{{config("app.theme_news")}}#"><i class="fa fa-youtube"></i></a>
								<a class="linkedin" href="{{config("app.theme_news")}}#"><i class="fa fa-linkedin"></i></a>
								<a class="tumblr" href="{{config("app.theme_news")}}#"><i class="fa fa-tumblr"></i></a>
							</div>
						</div><!-- /.widget-follow-us -->
						<div class="widget widget-categories">
							<h5 class="widget-title">Archives</h5>
							<ul class="cat-list">
								<li><a href="{{config("app.theme_news")}}#">December 2013 <span>(0)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">November 2013 <span>(22)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">October 2013 <span>(17)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">June 2013 <span>(16)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">May 2013 <span>(14)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">April 2013 <span>(10)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">March 2013 <span>(1)</span></a></li>
								<li><a href="{{config("app.theme_news")}}#">December 2012 <span>(1)</span></a></li>
							</ul>
						</div><!-- /.widget-categories -->
						<div class="widget widget-subscribe">
							<h5 class="widget-title">Good News Newsetter</h5>
							<p>Subscribe to our email newsletter for good news, sent out every Monday.</p>
							<form method="post" action="#" id="subscribe-form" data-mailchimp="true">
								<div id="subscribe-content">
									<div class="input">
									   <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Email">
									</div>
									<div class="button">
									   <button type="button" id="subscribe-button" class="" title="Subscribe now">Subscribe</button>
									</div>
								</div>
								<div id="subscribe-msg"></div>
							</form>
						</div><!-- /.widget-subscribe -->
					</div><!-- /.sidebar -->
				</div><!-- /.col-md-4 -->
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
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="{{config("app.theme_news")}}javascript/switcher.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/jquery.doubletaptogo.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="{{config("app.theme_news")}}javascript/main.js"></script>
</body>

</html>