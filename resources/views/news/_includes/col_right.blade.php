	<div class="bordered">
		<div class="row ">
			<div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <img class="img-responsive" src="{{PATH_THEME_NEWS}}images/ads/336-280-ad.gif" width="336" height="280" alt=""/> <a href="#" class="sponsored">sponsored advert</a> </div>
			<div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150">
				<div class="table-responsive">
					<table class="table table-bordered social">
						<tbody>
							<tr>
								<td><a class="rss" href="#">
									<p> <span class="ion-social-rss"></span> subscribe<br>
										to rss</p>
									</a></td>
								<td><a class="twitter" href="#">
									<p><span class="ion-social-twitter"></span> 811,6
										followers</p>
									</a></td>
								<td><a class="facebook" href="#">
									<p> <span class="ion-social-facebook"></span> 6958,56<br>
										fans</p>
									</a></td>
							</tr>
							<tr>
								<td><a class="youtube" href="#">
									<p> <span class="ion-social-youtube"></span> 6954,55
										subscribers</p>
									</a></td>
								<td><a class="vimeo" href="#">
									<p><span class="ion-social-vimeo"></span> 896,7
										subscribers</p>
									</a></td>
								<td><a class="dribbble" href="#">
									<p> <span class="ion-social-dribbble-outline"></span> 6321,56
										followers</p>
									</a></td>
							</tr>
							<tr>
								<td><a class="googleplus" href="#">
									<p> <span class="ion-social-googleplus"></span> 9625.56
										followers</p>
									</a></td>
								<td><a class="pinterest" href="#">
									<p><span class="ion-social-pinterest"></span> 741,9
										followers</p>
									</a></td>
								<td><a class="instagram" href="#">
									<p> <span class="ion-social-instagram"></span> 3548,7
										followers</p>
									</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- activities start -->
			<div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified " role="tablist">
					<li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
					<li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
					<li><a href="#comments" role="tab" data-toggle="tab">comments</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="popular">
						<ul class="list-unstyled">
							@foreach($menu_right_popular as $key=>$value)
							<li>
								<a href="/news/detail/{{$value->id}}">
									<div class="row">
										<div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="/uploads/{{$value->blog_image}}" width="164" height="152" alt=""/> </div>
										<div class="col-sm-11 col-md-12">
											<h4>{{$value->blog_title}}</h4>
											<div class="text-danger sub-info">
												<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
												<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
												<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
											</div>
										</div>
									</div>
								</a>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="tab-pane" id="recent">
						<ul class="list-unstyled">
							@foreach($menu_right_newest as $key=>$value)
							<li>
								<a href="/news/detail/{{$value->id}}">
									<div class="row">
										<div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="/uploads/{{$value->blog_image}}" width="164" height="152" alt=""/> </div>
										<div class="col-sm-11 col-md-12">
											<h4>{{$value->blog_title}}</h4>
											<div class="text-danger sub-info">
												<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
												<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
												<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
											</div>
										</div>
									</div>
								</a>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="tab-pane" id="comments">
						<ul class="list-unstyled">
							@foreach($menu_right_comment as $key=>$value)
							<li>
								<a href="/news/detail/{{$value->id}}">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<h4>{{$value->comment_content}}</h4>
											<div class="text-danger sub-info">
												<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
												<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
												<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
											</div>
										</div>
									</div>
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- activities end -->
			@if(false)
				<!-- radio start -->
				<div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="100">
					<div class="main-title-outer pull-left">
						<div class="main-title">globalnews radio</div>
					</div>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/172078992&amp;color=e74c3c&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</div>
				<!-- radio end -->
				<!-- calendar start -->
				<div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50">
					<div class="single pull-left"></div>
				</div>
				<!-- calendar end -->
				<!-- flicker imgs start -->
				<div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="35">
					<div class="main-title-outer pull-left">
						<div class="main-title">flicker images</div>
					</div>
					<ul class="list-inline">
						<li><a href="https://flic.kr/p/pGKEzR" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3944/15557385115_2d191a5cc7_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pq5PiE" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3956/15368741148_ef02d92a65_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pq9rDD" target="_blank"><img class="img-responsive" src="https://farm6.staticflickr.com/5608/15369448747_fd3f69cbb7_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pGM4yz" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3946/15557657525_da199f6917_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pH6FJ4" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3953/15561291195_e7ecf7d3a1_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pqoKFn" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3953/15372240967_9ee086188c_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pGHh6g" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3944/15556919225_c7d99f9667_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pqxJZC" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3939/15373994670_8c756abcb0_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pEPtj9" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3938/15535494656_d04ef318a0_s.jpg" width="55" height="55" alt=""/></a></li>
						<li><a href="https://flic.kr/p/pqjpxX" target="_blank"><img class="img-responsive" src="https://farm6.staticflickr.com/5605/15371392809_5069f8772d_s.jpg" width="55" height="55" alt=""/></a></li>
					</ul>
				</div>
			@endif
			<!-- flicker imgs end -->
		</div>
	</div>
