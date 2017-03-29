	<!-- Header -->
	<header id="header" class="header">
		<div class="top-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="logo" class="logo">
							<a href="/article" rel="home" title="home">
								<img src="{{config("app.theme_news")}}images/logo.svg" alt="Good News" />
							</a>
						</div>
						<div class="follow-us">
							<div class="follow-title">
								Follow Us
							</div>
							<ul class="social-links">
								<li class="facebook"><a href="{{config("app.theme_news")}}#">Follow us on Facebook</a></li>
								<li class="twitter"><a href="{{config("app.theme_news")}}#">Follow us on Twitter</a></li>
								<li class="google"><a href="{{config("app.theme_news")}}#">Follow us on Google</a></li>
								<li class="linkedin"><a href="{{config("app.theme_news")}}#">Follow us on Linkedin</a></li>
								<li class="pinterest"><a href="{{config("app.theme_news")}}#">Follow us on Pinterest</a></li>
							</ul>
						</div>
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="btn-menu"></div><!-- //mobile menu button -->
						<div class="member-area">
							<div class="member">
								<div class="welcome">
									Welcome <span class="name">Maria</span>
									<div class="member-options">
										<div class="avatar">
											<div class="thumb">
												<img src="{{config("app.theme_news")}}images/user.jpg" alt="image">
											</div>
											<span class="fullname">Maria Sharapova</span>
										</div>
										<ul class="options hidden">
											<li><a href="{{config("app.theme_news")}}#">My Profile</a></li>
											<li><a href="{{config("app.theme_news")}}#">My Account</a></li>
											<li><a href="{{config("app.theme_news")}}#">My Saved Items</a></li>
										</ul>
										<div class="logout"><a href="{{config("app.theme_news")}}#">Logout</a></div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.top-wrap -->
		<div class="header-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<nav id="mainnav" class="mainnav">
							<ul class="menu">
								<li class=""><a href="/article">Trang chủ</a></li>
								<li class="has-children"><a class="active" href="javascript:void()">Chuyên mục</a>
									<ul class="sub-menu">
										<li><a href="/article/category/the-gioi">Tin thế giới</a></li>
										<li><a href="/article/category/thoi-su">Thời sự</a></li>
										<li><a href="/article/category/dulich">Du lịch</a></li>
										<li><a href="/article/category/khoa-hoc">Khoa học</a></li>
										<li><a href="/article/category/kinh-nghiem">Kinh nghiệm</a></li>
										<li><a href="/article/category/kinhdoanh">Kinh doanh</a></li>
										<li><a href="/article/category/giaitri">Giải trí</a></li>
										<li><a href="/article/category/giadinh">Gia đình</a></li>
										<li><a href="/article/category/giao-duc">Giáo dục</a></li>
										<li><a href="/article/category/cong-dong">Cộng đồng</a></li>
										<li><a href="/article/category/thethao">Thể thao</a></li>
										<li><a href="/article/category/cuoi">Cười</a></li>
										<li><a href="/article/category/oto-xe-may">Ô tô xe máy</a></li>
										<li><a href="/article/category/phap-luat">Pháp luật</a></li>
										<li><a href="/article/category/suckhoe">Sức khỏe</a></li>
										<li><a href="/article/category/tam-su">Tâm sự</a></li>
									</ul><!-- /.submenu -->
								</li>
							</ul><!-- /.menu -->
						</nav><!-- /nav -->
					</div><!-- /.col-md-9 -->
					<div class="col-md-3">
						<div class="search-wrap">
							<div class="search-icon"></div><!-- //mobile search button -->
							<form action="#" id="searchform" class="search-form" method="get" role="search">
								<input type="text" id="s" placeholder="Search" class="search-field">
								<input type="submit" value="&#xf002;" id="searchsubmit" class="search-submit">
								<a class="search-close" href="{{config("app.theme_news")}}#"><i class="fa fa-times-circle"></i></a>
							</form>
						</div><!-- /.search-wrap -->
					</div><!-- /.col-md-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.header-wrap -->
	</header>
	<!-- /header -->