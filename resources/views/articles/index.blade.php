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

	<!-- Google Fonts 
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>-->

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

<body>

	@include("articles.includes.menu_header")

	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="featured-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="content-left">
							<article class="post">
								<div class="thumb">
										<a href="/article/page/detail/{{$box_top[0]->id}}">
											<img src="{{get_imgs($box_top[0]->article_imgs)}}" alt="{{$box_top[0]->article_title}}">
										</a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Mustreads</a>
								</div>
								<h3><a href="/article/page/detail/{{$box_top[0]->id}}">{{$box_top[0]->article_title}}</a></h3>
								<p class="excerpt-entry">{{show_extra_content($box_top[0]->article_extra_content)}}</p>
								<div class="post-meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">Paul Graham</a></span>
									<div class="activity">
										<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-left -->
						<div class="content-right">
							<article class="post">
								<div class="thumb">									
										<a href="/article/page/detail/{{$box_top[1]->id}}">
											<img src="{{get_imgs($box_top[1]->article_imgs)}}" alt="{{$box_top[1]->article_title}}">
										</a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Tech</a>
								</div>
								<h3><a href="/article/page/detail/{{$box_top[1]->id}}">{{$box_top[1]->article_title}}</a></h3>
								<div class="activity">
									<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
										<a href="/article/page/detail/{{$box_top[2]->id}}">
											<img src="{{get_imgs($box_top[2]->article_imgs)}}" alt="{{$box_top[2]->article_title}}">
										</a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Social media</a>
								</div>
								<h3><a href="/article/page/detail/{{$box_top[2]->id}}">{{$box_top[2]->article_title}}</a></h3>
								<div class="activity">
									<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-right -->
					</div><!-- /.featured-posts -->
					<div class="highlights-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Highlights</a></h4>
						</div>
						<article class="post">
							<div class="thumb">
									<a href="/article/page/detail/{{$highlights[0]->id}}">
										<img src="{{get_imgs($highlights[0]->article_imgs)}}" alt="{{$highlights[0]->article_title}}">
									</a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="/article/page/detail/{{$highlights[0]->id}}">{{$highlights[0]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post last">
							<div class="thumb">
									<a href="/article/page/detail/{{$highlights[1]->id}}">
										<img src="{{get_imgs($highlights[1]->article_imgs)}}" alt="{{$highlights[1]->article_title}}">
									</a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="/article/page/detail/{{$highlights[1]->id}}">{{$highlights[1]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post">
							<div class="thumb">
									<a href="/article/page/detail/{{$highlights[2]->id}}">
										<img src="{{get_imgs($highlights[2]->article_imgs)}}" alt="{{$highlights[2]->article_title}}">
									</a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="/article/page/detail/{{$highlights[2]->id}}">{{$highlights[2]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
						<article class="post margin-b0 last">
							<div class="thumb">
									<a href="/article/page/detail/{{$highlights[3]->id}}">
										<img src="{{get_imgs($highlights[3]->article_imgs)}}" alt="{{$highlights[3]->article_title}}">
									</a>
							</div>
							<div class="cat">
								<a href="{{config("app.theme_news")}}">Social media</a>
							</div>
							<h3><a href="/article/page/detail/{{$highlights[3]->id}}">{{$highlights[3]->article_title}}</a></h3>
							<div class="activity">
								<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
							</div>
						</article><!--  /.post -->
					</div><!-- /.highlights-posts -->
					<div class="editors-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Editors Picks</a></h4>
						</div>
						<div class="post-wrap">
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$editors_picks[0]->id}}">
										<img src="{{get_imgs($editors_picks[0]->article_imgs)}}" alt="{{$editors_picks[0]->article_title}}">
									</a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="/article/page/detail/{{$editors_picks[0]->id}}">{{$editors_picks[0]->article_title}}</a></h3>
									<p class="excerpt-entry">{{show_extra_content($editors_picks[0]->article_extra_content)}}</p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">Anna Chapman</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$editors_picks[1]->id}}">
										<img src="{{get_imgs($editors_picks[1]->article_imgs)}}" alt="{{$editors_picks[1]->article_title}}">
									</a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="/article/page/detail/{{$editors_picks[1]->id}}">{{$editors_picks[1]->article_title}}</a></h3>
									<p class="excerpt-entry">{{show_extra_content($editors_picks[1]->article_extra_content)}}</p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">John Doe</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="{{config("app.theme_news")}}#">
									<img src="{{config("app.theme_news")}}images/thumbs/3-3.jpg" alt="img">
									</a>
								</div>
								<div class="content">
									<div class="cat">
										<a href="{{config("app.theme_news")}}">Mustreads</a>
									</div>
									<h3><a href="/article/page/detail/{{$editors_picks[2]->id}}">{{$editors_picks[2]->article_title}}</a></h3>
									<p class="excerpt-entry">{{show_extra_content($editors_picks[2]->article_extra_content)}} </p>
									<div class="post-meta">
										<span class="author">By <a href="{{config("app.theme_news")}}#">Mike Tyson</a></span>
										<span class="time"> - 16 hours ago</span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.post-wrap -->
					</div><!-- /.editors-posts -->
					<div class="popular-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Popular Posts</a></h4>
						</div>	
						<div class="content-left">
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[0]->id}}">
										<img src="{{get_imgs($popular_posts[0]->article_imgs)}}" alt="{{$popular_posts[0]->article_title}}">
									</a>
								</div>
								<div class="cat">
									<a href="{{config("app.theme_news")}}">Mustreads</a>
								</div>
								<h3><a href="/article/page/detail/{{$popular_posts[0]->id}}">{{$popular_posts[0]->article_title}}</a></h3>
								<p class="excerpt-entry">{{show_extra_content($popular_posts[0]->article_extra_content)}}</p>
								<div class="post-meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">John Doe</a></span>
									<div class="activity">
										<span class="views">345</span><span class="comment"><a href="{{config("app.theme_news")}}#">15</a></span>
									</div>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-left -->
						<div class="content-right">
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[1]->id}}">
										<img src="{{get_imgs($popular_posts[1]->article_imgs)}}" alt="{{$popular_posts[1]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[1]->id}}">{{$popular_posts[1]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[2]->id}}">
										<img src="{{get_imgs($popular_posts[2]->article_imgs)}}" alt="{{$popular_posts[2]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[2]->id}}">{{$popular_posts[2]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[3]->id}}">
										<img src="{{get_imgs($popular_posts[3]->article_imgs)}}" alt="{{$popular_posts[3]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[3]->id}}">{{$popular_posts[3]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[4]->id}}">
										<img src="{{get_imgs($popular_posts[4]->article_imgs)}}" alt="{{$popular_posts[4]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[4]->id}}">{{$popular_posts[4]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[5]->id}}">
										<img src="{{get_imgs($popular_posts[5]->article_imgs)}}" alt="{{$popular_posts[5]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[5]->id}}">{{$popular_posts[5]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$popular_posts[6]->id}}">
										<img src="{{get_imgs($popular_posts[6]->article_imgs)}}" alt="{{$popular_posts[6]->article_title}}">
									</a>
								</div>
								<div class="content">
									<h3><a href="/article/page/detail/{{$popular_posts[6]->id}}">{{$popular_posts[6]->article_title}}</a></h3>
									<span class="date">7:00 am on Feb 28</span>
								</div>
							</article><!--  /.post -->
						</div><!-- /.content-right -->
					</div><!-- /.popular-posts -->
				</div><!-- /.col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar-widget-1">
						<div class="widget widget-recent gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">Recent Posts</h5>
							<ul>
								<li>
									<div class="thumb">
										<a href="/article/page/detail/{{$box_right_top[0]->id}}">
											<img src="{{get_imgs($box_right_top[0]->article_imgs)}}" alt="{{$box_right_top[0]->article_title}}">
										</a>
									</div>
									<div class="content">
										<h3><a href="/article/page/detail/{{$box_right_top[0]->id}}">{{$box_right_top[0]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<a href="/article/page/detail/{{$box_right_top[1]->id}}">
											<img src="{{get_imgs($box_right_top[1]->article_imgs)}}" alt="{{$box_right_top[1]->article_title}}">
										</a>
									</div>
									<div class="content">
										<h3><a href="/article/page/detail/{{$box_right_top[1]->id}}">{{$box_right_top[1]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<a href="/article/page/detail/{{$box_right_top[2]->id}}">
											<img src="{{get_imgs($box_right_top[2]->article_imgs)}}" alt="{{$box_right_top[2]->article_title}}">
										</a>
									</div>
									<div class="content">
										<h3><a href="/article/page/detail/{{$box_right_top[2]->id}}">{{$box_right_top[2]->article_title}}</a></h3>
										<div class="date">7:00 am on Feb 28</div>
									</div>
								</li>
							</ul>
						</div><!-- /.widget-recent -->
						<div class="widget widget-ads gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<a href="{{config("app.theme_news")}}#"><img src="{{config("app.theme_news")}}images/ad.jpg" alt="image"></a>
							<p class="text-ad">Advertisement</p>
						</div><!-- /.widget-ads -->
						<div class="widget widget-most-popular gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">5 Most Popular</h5>
							<ul>
								<li>
									<div class="order">1</div>
									<p><a href="/article/page/detail/{{$most_popular[0]->id}}">{{$most_popular[0]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">2</div>
									<p><a href="/article/page/detail/{{$most_popular[1]->id}}">{{$most_popular[1]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">3</div>
									<p><a href="/article/page/detail/{{$most_popular[2]->id}}">{{$most_popular[2]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">4</div>
									<p><a href="/article/page/detail/{{$most_popular[3]->id}}">{{$most_popular[3]->article_title}}</a></p>
								</li>
								<li>
									<div class="order">5</div>
									<p><a href="/article/page/detail/{{$most_popular[4]->id}}">{{$most_popular[4]->article_title}}</a></p>
								</li>
							</ul>
						</div><!-- /.widget-popular -->
						<div class="widget widget-tabs gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
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
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-2.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-3.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-4.jpg"></a>
												</div>
												<div class="text">
													<a href="{{config("app.theme_news")}}#">If you wanted to get rich, how would you do it?</a>
													<i>Aug 1, 2014</i>
												</div> 
											</li>
											<li>
												<div class="thumb">
													<a href="{{config("app.theme_news")}}#"><img alt="" src="{{config("app.theme_news")}}images/thumbs/1-5.jpg"></a>
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
						<div class="widget widget-follow-us gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
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
						<div class="widget widget-categories gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
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
						<div class="widget widget-subscribe gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
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
				<div class="col-md-12">
					<div class="gnSlider gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="flex-container">
							<div class="flexslider loading">
								<ul class="slides">
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/1.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/2.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
									<li>
										<div class="item-wrap">
											<img src="{{config("app.theme_news")}}images/slider/3.jpg" alt="image">
											<p class="item" data-bottomtext="0">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- /.gnSlider -->
				</div><!-- /.col-md-12 -->
				<div class="col-md-12">
					<div class="trending-posts">
						<div class="gn-line"></div>
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Trending</a></h4>
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="/article/page/detail/{{$trending[0]->id}}">
										<img src="{{get_imgs($trending[0]->article_imgs)}}" alt="{{$trending[0]->article_title}}">
									</a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[0]->id}}">{{$trending[0]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[1]->id}}">{{$trending[1]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[2]->id}}">{{$trending[2]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[3]->id}}">{{$trending[3]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[4]->id}}">{{$trending[4]->article_title}}</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="/article/page/detail/{{$trending[5]->id}}">
										<img src="{{get_imgs($trending[5]->article_imgs)}}" alt="{{$trending[5]->article_title}}">
									</a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[5]->id}}">{{$trending[5]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[6]->id}}">{{$trending[6]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[7]->id}}">{{$trending[7]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[8]->id}}">{{$trending[8]->article_title}}</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth gn-animation" data-animation="fadeInUp" data-animation-delay="0.4s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="/article/page/detail/{{$trending[9]->id}}">
										<img src="{{get_imgs($trending[9]->article_imgs)}}" alt="{{$trending[9]->article_title}}">
									</a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[9]->id}}">{{$trending[9]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[10]->id}}">{{$trending[10]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[11]->id}}">{{$trending[11]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[12]->id}}">{{$trending[12]->article_title}}</a></h3>
							</article><!--  /.post -->
						</div>
						<div class="one-fourth last gn-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
							<article class="post first">
								<div class="thumb">
									<a href="/article/page/detail/{{$trending[13]->id}}">
										<img src="{{get_imgs($trending[13]->article_imgs)}}" alt="{{$trending[13]->article_title}}">
									</a>
								</div>
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[13]->id}}">{{$trending[13]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[14]->id}}">{{$trending[14]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[15]->id}}">{{$trending[15]->article_title}}</a></h3>
							</article><!--  /.post -->
							<article class="post">
								<span class="date">October 6, 2013</span>
								<h3><a href="/article/page/detail/{{$trending[16]->id}}">{{$trending[16]->article_title}}</a></h3>
							</article><!--  /.post -->
						</div>
					</div><!-- /.trending-posts -->
					<div class="gn-line"></div>
				</div><!-- /.col-md-12 -->
				<div class="col-md-8">
					<div class="social-media-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="section-title">
							<h4><a href="{{config("app.theme_news")}}#">Social Media</a></h4>
						</div>
						@foreach ($social_media as $element)
							<article class="post">
								<div class="thumb">
									<a href="/article/page/detail/{{$element->id}}">
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
						@endforeach

					</div><!-- /.social-media-posts -->
				</div><!-- /.col-md-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<!-- Footer -->
	@include("articles.includes.footer")

	<!-- Login and Signup Form -->
	<div id="login-modal" class="login popup" style="display: none;">
		<a class="close-modal" href="{{config("app.theme_news")}}#"></a>
		<div class="form-title">
			<h4>Login</h4>
			<div class="signup">
				No account yet? <a href="{{config("app.theme_news")}}#">Sign Up</a>
			</div>
		</div>
		<div class="login-by">
			<div class="log-face-w">
				<a class="log-facebook" href="{{config("app.theme_news")}}#">Login with Facebook</a>
			</div>
			<div class="log-twit-w">
				<a class="log-twitter" href="{{config("app.theme_news")}}#">Login with Twitter</a>
			</div>
		</div>
		<form id="loginform" name="loginform" method="post">
			<div class="email-wrap">
				<input type="text" size="30" value="" class="input" id="user-email" name="log" placeholder="Email">
			</div>     
			<div class="pass-wrap">
				<input type="password" size="30" value="" class="input" id="user-pass" name="password" placeholder="Password">
			</div>
			<div class="option-login">
				<div class="remember">
					<input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
				</div>
				<div class="forgot">
					<a href="{{config("app.theme_news")}}#">I forgot my password</a>
				</div>
			</div>
			<div class="submit-login">
				<input type="submit" value="Log In" class="submit" id="submit" name="submit">
			</div>
		</form>
	</div>
	<div id="signup-modal" class="popup" style="display: none;">
		<a class="close-modal" href="{{config("app.theme_news")}}#"></a>
		<div class="form-title">
			<h4>Sign Up</h4>
			<div class="signup">
				Already a member? <a href="{{config("app.theme_news")}}#">Login</a>
			</div>
		</div>
		<div class="login-by">
			<div class="log-face-w">
				<a class="log-facebook" href="{{config("app.theme_news")}}#">Login with Facebook</a>
			</div>
			<div class="log-twit-w">
				<a class="log-twitter" href="{{config("app.theme_news")}}#">Login with Twitter</a>
			</div>
		</div>
		<form id="signupform" name="signupform" method="post">
			<div class="name-wrap">
				<input type="text" size="30" value="" class="input" id="user-name" name="name" placeholder="Name">
			</div> 
			<div class="email-wrap">
				<input type="text" size="30" value="" class="input" id="user-email2" name="log" placeholder="Email">
			</div>     
			<div class="pass-wrap">
				<input type="password" size="30" value="" class="input" id="user-pass2" name="password" placeholder="Password">
			</div>

			<div class="option-login">
				<div class="remember">
					<input type="checkbox" name="check4" id="check4" class="css-checkbox" checked="checked"/><label for="check4" class="css-label">Remember me</label>
				</div>
				<div class="forgot">
					<a href="{{config("app.theme_news")}}#">I forgot my password</a>
				</div>
			</div>

			<div class="submit-login">
				<input type="submit" value="Sign Up" class="submit" id="submit2" name="submit">
			</div>
		</form>
	</div>

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