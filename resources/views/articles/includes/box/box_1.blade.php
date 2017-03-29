<div class="featured-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
	<div class="content-left">
		<article class="post">
			<div class="thumb">
				<a href="#"><img src="{{config("app.theme_news")}}images/thumbs/9.jpg" alt="img"></a>
			</div>
			<div class="cat">
				<a href="{{config("app.theme_news")}}">Mustreads</a>
			</div>
			<h3><a href="/article/detail/{{$news->first()->id}}">{{$news->first()->article_title}}</a></h3>
			<p class="excerpt-entry">{{$news->first()->article_summary}}</p>
			<div class="post-meta">
				<span class="author">By <a href="#">Paul Graham</a></span>
				<div class="activity">
					<span class="views">345</span><span class="comment"><a href="#">15</a></span>
				</div>
			</div>
		</article><!--  /.post -->
	</div><!-- /.content-left -->
	<div class="content-right">
		<article class="post">
			<div class="thumb">
				<a href="#"><img src="{{config("app.theme_news")}}images/thumbs/4.jpg" alt="img"></a>
			</div>
			<div class="cat">
				<a href="{{config("app.theme_news")}}">Tech</a>
			</div>
			<h3><a href="#">Startups usually involve technology, so much so that the phrase "high-tech startup" is almost redundant.</a></h3>
			<div class="activity">
				<span class="views">12</span><span class="comment"><a href="#">15</a></span>
			</div>
		</article><!--  /.post -->
		<article class="post">
			<div class="thumb">
				<a href="#"><img src="{{config("app.theme_news")}}images/thumbs/4-2.jpg" alt="img"></a>
			</div>
			<div class="cat">
				<a href="{{config("app.theme_news")}}">Social media</a>
			</div>
			<h3><a href="#">Startups usually involve technology, so much so that the phrase "high-tech startup" is almost redundant.</a></h3>
			<div class="activity">
				<span class="views">12</span><span class="comment"><a href="#">15</a></span>
			</div>
		</article><!--  /.post -->
	</div><!-- /.content-right -->
</div><!-- /.featured-posts -->