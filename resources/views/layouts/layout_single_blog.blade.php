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

	<title> Premium Layers - Responsive HTML5 vCard Template</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= PATH_THEME; ?>img/favicon.ico">
	<link rel="apple-touch-icon" href="<?= PATH_THEME; ?>img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= PATH_THEME; ?>img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= PATH_THEME; ?>img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= PATH_THEME; ?>img/apple-touch-icon-144x144.png">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800,700italic,600italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Neuton:400,200,300' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap Core CSS -->
	<link href="<?= PATH_THEME; ?>css/bootstrap.css" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="<?= PATH_THEME; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/style.css" >
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/flexslider.css"/>
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/nivo-lightbox.css" />
	<link rel="stylesheet" href="<?= PATH_THEME; ?>images/themes/default/default.css" />
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/jquery.mCustomScrollbar.css" />
	<link rel="stylesheet" href="<?= PATH_THEME; ?>css/animate.css" />

	<!-- Owl Carousel Assets -->
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->

	<!-- Style Switch -->
	<link rel="stylesheet" type="text/css" href="<?= PATH_THEME; ?>css/colors/yellow-black.css" title="yellow" media="screen" />

</head>
<body>

<div class="main-content">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-3 l-content">
				<div class="profile-pic">
					<div class="pic-bg"><img src="<?= PATH_THEME; ?>images/profile-avatar.png" class="img-responsive" alt=""/></div>
				</div>
				<nav>
				<ul class="navigation">
					<li><a href="/#1">{{trans("blog.profile")}} <i class="fa fa-user"></i></a></li>
					<li><a href="/#2">{{trans("blog.work")}} <i class="fa fa-briefcase"></i></a></li>
					<li><a href="/#3">{{trans("blog.resume")}} <i class="fa fa-file-text"></i></a></li>
					<li class="flex-active"><a href="/#4">{{trans("blog.blog")}} <i class="fa fa-comment"></i></a></li>
					<li><a href="/#5">{{trans("blog.contact")}} <i class="fa fa-envelope"></i></a></li>
				</ul>
				</nav>
			</div>

			<div class="col-md-9 r-content">
				<div class="flexslider">
					<div class="slides">
						<section class="flex-active-slide">
							<div class="item blog blog-single">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>Blog</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>{{trans("blog.ditoitronguoc")}}</p>
												<div class="np-controls">
													<a href="./index.html#3" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="./index.html#5" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="blog-wrap">
									<article>
										<div class="row">
											<div class="col-md-12 blog-single-img">
												@if(isset($rs->blog_image)&&( $rs->blog_show_img==1))
												<img src="/uploads/{{$rs->blog_image}}" class="img-responsive" alt=""/>
												@endif
											</div>
											<div class="col-md-12">
												<h3>{{$rs->blog_title}}</h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												{!! $rs->blog_content !!}
											</div>
										</div>
									</article>

									<div class="comments-wrap">
										<h4>5 Comments</h4>
										<ul id="comment-box">
												<li style="display:none;">
													<div class="comment-avatar"><img src="" class="img-responsive" alt=""/></div>
													<div class="comment-info">
														<h6><span></span> <span>47 minutes ago</span></h6>
														<p class="comment_content"></p>
														<a class="reply" href="#" data-id="">reply</a>
													</div>
												</li>
											@foreach($comment as $key => $value)
												<li>
													<div class="comment-avatar"><img src="{{"http://www.gravatar.com/avatar/".md5($value->comment_email)}}?d=identicon" class="img-responsive" alt=""/></div>
													<div class="comment-info">
														<h6><span>{{$value->comment_name}}</span> <span>47 minutes ago</span></h6>
														<p class="comment_content">{{$value->comment_content}}</p>
														<a class="reply" href="#" data-id="{{$value->id}}">reply</a>
													</div>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="contact-form">
										<h4>Leave a comment</h4>
										<form id="form_comment">
											<div class="row">
												<div class="col-md-4">
													<input type="text" placeholder="name" name="name">
													<input type="text" placeholder="e-mail" name="e-mail">
													<input type="text" placeholder="website" name="website">
													<input type="hidden" placeholder="website" name="comment_blogs_id" value="{!! $rs->id !!}">
												</div>
												<div class="col-md-8">
													<textarea rows="6" placeholder="Message"></textarea>
													<button type="submit">Send Message</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>

				<footer>
					<div class="row">
						<div class="col-md-7">
							<p>&copy; 2014 Robb <a href='/blogs'>Armstrong</a>. All Rights Reserved</p>
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

<!-- JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= PATH_THEME; ?>js/bootstrap.js"></script>
<script src="<?= PATH_THEME; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= PATH_THEME; ?>js/animations.js"></script>
<script>
// jQuery(document).ready(function($) {
// 	$(window).load(function(){
// 		$(".item").mCustomScrollbar({
// 			theme:"dark"
// 		});
// 	});
// });
</script>
<script>
	$("#form_comment").submit(function(){
		var data_param = {
						"comment_name" : $("[name='name']").val(),
						"comment_email" : $("[name='e-mail']").val(),
						"comment_content" :  $("textarea").val(),
						"comment_blogs_id" : $("[name='comment_blogs_id']").val(),
					};
		$.post('/ajax/save', data_param , function(data_string, textStatus, xhr) {
				data = JSON.parse(data_string);

				if(Object.keys(data).length > 0){
					m = $("#comment-box li:first").clone();
					m.find("img").attr("src",data.comment_img);
					m.find(".comment-info .comment_content").text($("textarea").val());
					m.find(".comment-info h6 span:first").text($("[name='name']").val());
					m.find(".comment-info .reply").data("id",data.id);
					m.show();
					$("#comment-box").append(m);
					$("[name='name']").val("");
					$("[name='e-mail']").val("");
					$("textarea").val("");
				}else{
				}
		});
		return false;
	});
</script>

</body>
</html>