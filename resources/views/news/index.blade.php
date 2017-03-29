@extends("news.layouts.app")
@section("title_page","My Blog")
@section("content")
	<div class="row">
		<div class="col-sm-16">
			<div class="grid-container">
				<div class="grid">
					@foreach($rs as $key => $value)
						<div class="masonry-item sec-topic col-sm-16 col-md-8 wow fadeInDown animated" data-wow-delay="0.5s">
							<div class="title-icon">
								<span class="ion-camera"></span>
							</div><a href="/news/detail/{{$value->id}}"><img alt="" class="img-thumbnail" height="606" src="/uploads/{{$value->blog_image}}" width="1000">
							<div class="sec-info">
								<h3>{{$value->blog_title}}</h3>
								<div class="text-danger sub-info-bordered">
									<div class="author">
										<span class="ion-android-contact icon"></span>Globalnews Admin
									</div>
									<div class="time">
										<span class="ion-android-data icon"></span>Dec 9 2014
									</div>
									<div class="comments">
										<span class="ion-chatbubbles icon"></span>204
									</div>
									<div class="stars">
										<span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span>
									</div>
								</div>
							</div></a>
							<p>{{strip_tags(str_limit($value->blog_content,100))}}</p>
							<a class="read-more pull-right" href="/news/detail/{{$value->id}}"><span>Complete Reading</span></a>
						</div>
					@endforeach
				</div>
			</div>
		</div><!-- Pagination Start -->
		<div class="col-sm-16">
			<hr>
			<ul class="pagination">
				<li>
					<a href="#">&laquo;</a>
				</li>
				<li class="active">
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">&raquo;</a>
				</li>
			</ul>
		</div><!-- Pagination End -->
	</div>
@endsection
