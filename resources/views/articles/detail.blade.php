
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

<body>

	@include("articles.includes.menu_header")

	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="post-wrap posts post-single">
						<article class="post">
							<div class="head-post">
								<h2>{{$rs->article_title}}</h2>
								<div class="meta">
									<span class="author">By <a href="{{config("app.theme_news")}}#">Anna Chapman</a></span>
									<span class="time"> Published on May 07, 2004.</span>
								</div>
							</div><!-- /.head-post -->
							<div class="body-post">
								<div class="share-post">
									<ul>
										<li class="count-share"><span class="numb">23</span><span>shares</span></li>
										<li class="email"><a href="{{config("app.theme_news")}}">Email</a></li>
										<li class="facebook"><a href="{{config("app.theme_news")}}">Facebook</a></li>
										<li class="twitter"><a href="{{config("app.theme_news")}}">Twitter</a></li>
										<li class="more"><a href="{{config("app.theme_news")}}">More</a></li>
									</ul>
								</div><!-- /.share-post -->
								<div class="main-post">
									<div class="entry-post">
										{!! $rs->article_content !!}
									</div><!-- /.entry-post -->
									<div class="help-post">
										<div class="helpful">
											<a class="like" href="{{config("app.theme_news")}}#">I found this helpful </a>
											<a class="dislike" href="{{config("app.theme_news")}}#">I did not find this helpful</a>
										</div>
										<div class="tags">
											<a href="{{config("app.theme_news")}}#">Startups</a>
											<a href="{{config("app.theme_news")}}#">Technology</a>
											<a href="{{config("app.theme_news")}}#">Millions of dollars</a>
											<a href="{{config("app.theme_news")}}#">Paul Graham</a>
										</div>
									</div><!-- /.help-post -->
									<div class="author-post">
										<div class="avatar-author">
											<img src="{{config("app.theme_news")}}images/author.jpg" alt="image">
										</div>
										<div class="info-author">
											<h4>Angela Snow</h4>
											<p>John is an American Graphic &amp; Web Designer, Pixel &amp; CSS lover, WordPress &amp; coffee addict. He loves UI and UX design for mobile and web apps.</p>
										</div>
									</div><!-- /.author-post -->
					               	<div class="comment-post">
					                  	<div class="comments-list">
					                     	<h4 class="title">3 Comments</h4>
											<ul>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">1</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body">If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">2</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body">If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
												<li>
												   	<article class="comment">
												   		<div class="comment-order">3</div>
											         	<div class="avatar">
												            <img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
												        </div>
												      	<div class="comment-text">
												      		<div class="comment-head">
												      			<span class="author">Olya</span>
												      			<span class="date">Jan 16, 2013</span>
												      			<span class="reply"><a href="{{config("app.theme_news")}}#">Reply</a></span>
												      		</div>
												        	<p class="comment-body"><strong>@Olya</strong> If you have too many tasks to do, or are scattered during your workday, breathe. It will help bring you into focus, to concentrate on the most important task you need to be focusing on right now.</p>
												      	</div>                     
												   	</article><!-- /.comment -->
												</li>
											</ul>
					                  	</div><!-- /.comments-list -->
										<div id="respond" class="comment-respond">
											<h4 class="title">Join the Conversation</h4>
											<form class="comment-form" id="comment-form" method="post" action="#">
												<div class="name-comment">
											   		<input type="text" size="32" value="" tabindex="1" placeholder="Name" name="name" required>
											   	</div>
											   	<div class="email-comment">
													<input class="email-comment" type="text" size="32" value="" tabindex="2" placeholder="Email" name="email" required>
													<span>Will not be published</span>
												</div>
												<div class="message-comment">
													<textarea tabindex="4" placeholder="Message" name="comment" required></textarea>
											   	</div>
											   	<div class="submit-comment">
													<input class="send-btn gn-button" type="submit" value="Send" id="submit-comment" name="submit-comment">
												</div>
											</form><!-- /.comment-form -->
										</div><!-- /#respond -->
					            	</div><!-- /.comment-post -->
					            	<div class="relate-posts">
						            	<div class="section-title">
											<h4><a href="{{config("app.theme_news")}}#">Read These Next</a></h4>
										</div>
										<div class="post-wrap">
											@foreach ($relation as $element)
												<article class="post">
													<div class="thumb">
														<a href="{{config("app.theme_news")}}#"><img src="{{get_imgs($element->article_imgs)}}" alt="{{$element->article_title}}"></a>
													</div>
													<div class="content">
														<div class="cat">
															<a href="{{config("app.theme_news")}}">Mustreads</a>
														</div>
														<h3><a href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></h3>
														<p class="excerpt-entry">{{show_extra_content($element->article_extra_content)}}</p>
														<div class="post-meta">
															<span class="author">By <a href="{{config("app.theme_news")}}#">Anna Chapman</a></span>
															<span class="time"> - 16 hours ago</span>
														</div>
													</div>
												</article><!-- /.post -->
											@endforeach
										</div>
					            	</div><!-- /.relate-posts -->
					            	<div class="recommend-posts">
									    <div class="section-title">
											<h4><a href="{{config("app.theme_news")}}#">Recommended for You</a></h4>
										</div>
										<div class="post-wrap">
											@foreach ($recommen as $element)
												<article class="post margin-b0 last">
													<div class="thumb">
														<a href="/article/page/detail/{{$element->id}}"><img src="{{get_imgs($element->article_imgs)}}" alt="{{$element->article_title}}"></a>
													</div>
													<div class="cat">
														<a href="{{config("app.theme_news")}}">Social media</a>
													</div>
													{{-- <h3><a href="{{config("app.theme_news")}}#">Like all back-of-the-envelope calculations, this one has a lot of wiggle room.</a></h3> --}}
													<h3><a href="/article/page/detail/{{$element->id}}">{{$element->article_title}}</a></h3>
													<div class="activity">
														<span class="views">12</span><span class="comment"><a href="{{config("app.theme_news")}}#">0</a></span>
													</div>
												</article><!-- /.post -->
											@endforeach

										</div>
					            	</div><!-- /.recommend-posts -->
								</div><!-- /.main-post -->
							</div><!-- /.body-post -->
						</article><!-- /.post -->
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-12 -->
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