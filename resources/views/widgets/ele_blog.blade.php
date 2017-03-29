	<article class='ele-blog'>
		<div class="row">
			<div class="col-md-5">
				<img src="" data-src="{{(isset($value->blog_image)?"/uploads/".$value->blog_image:"")}}" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-7">
				<h3><a href="/blog-single-{{$value->id}}.html">{{$value->blog_title}}</a></h3>
				<div class="post-meta">
					<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
					<i class="fa fa-user"></i> <a href="#">Admin</a> 
					<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
				</div>
				{!!nl2br($value->blog_extra)!!} 
			</div>
		</div>
	</article>
