@extends("news.layouts.app")
<?php
$title=$blogs->blog_title;
$image="/uploads/".$blogs->blog_image;
$content_news=$blogs->blog_content;
?>
@section("title_page")
@endsection
@section("title_page_h1")
  {{$title}}
@endsection

@section("breadcrumb")
  <ol class="breadcrumb">
    <li><a href="/news">Trang chủ</a></li>
    <li><a href="/news">Blog</a></li>
    <li class="active">{{$title}}</li>
  </ol>
@endsection

@section("content")
<div class="col-sm-16">
              <div class="row">
                <div class="sec-topic col-sm-16  wow fadeInDown animated " data-wow-delay="0.5s">
                  <div class="row">
                    <div class="col-sm-16"> <img width="1000" height="606" alt="" src="{{$image}}" class="img-thumbnail"> </div>
                    <div class="col-sm-16 sec-info">
                      <h3 class="hidden">{{$title}}</h3>
                      <div class="text-danger sub-info-bordered">
                        <div class="author"><span class="ion-person icon"></span>By: <a href="/">Vi Hoàng Sơn</a></div>
                        <div class="time"><span class="ion-android-data icon"></span>{{$blogs->created_at->format("M d Y")}}</div>
                        <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                      </div>
                      <div id="content_news">{!! $content_news !!}</div>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="col-sm-16 author-box">
                  <div class="row">
                    <div class=" col-xs-4 col-sm-2"><img class="img-thumbnail" src="/img_template/vihoangson.jpg" width="128" height="128" alt=""/></div>
                    <div class="col-xs-12 col-sm-14">
                      <h4><a href="/">Vi Hoàng Sơn</a></h4>
                      <p>Một người lập trình viên thích tìm tòi và khám phá những điều mới mẻ</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-16 related">
                  <div class="main-title-outer pull-left">
                    <div class="main-title">related topics</div>
                  </div>
                  <div class="row">
                    @foreach($relate_blog as $blog)
                      <div class="item topic col-sm-5 col-xs-16"> <a href="/news/detail/{{$blog->id}}"> <img class="img-thumbnail" src="/uploads/{{$blog->blog_image}}" width="1000" height="606" alt=""/>
                        <h4>{{$blog->blog_title}}</h4>
                        <div class="text-danger sub-info-bordered remove-borders">
                          <div class="time"><span class="ion-android-data icon"></span>{{$blog->created_at->format("M d y")}}</div>
                          <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                          <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                        </div>
                        </a> </div>
                    @endforeach

                  </div>
                </div>

				@if((count($comments)>0))
					<div class="col-sm-16 comments-area" id="comment-block">
						<div class="main-title-outer pull-left">
							<div class="main-title">comments</div>
						</div>
						<div class="opinion pull-left">
							@foreach($comments as $comment)
								<div class="media"> <a href="#" class="pull-left"> <img alt="64x64" data-src="{{PATH_THEME_NEWS}}holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="{{PATH_THEME_NEWS}}images/comments/com-1.jpg"> </a>
									<div class="media-body">
										<div>
											<h4 class="media-heading">{{$comment->comment_name}}</h4>
											<div class="time text-danger"><span class="ion-android-data icon"></span>{{$comment->created_at->format('M d,Y \a\t h:i a')}}</div>
										</div>
										{{$comment->comment_content}}
										<div class="col-sm-16"><a href="#"><span class="reply pull-right ion-ios7-compose"></span></a></div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
				{{-- Comment block --}}

                <div class="col-sm-16">
                  <div class="main-title-outer pull-left">
                    <div class="main-title">leave a comment</div>
                  </div>
                  <div class="col-xs-16 wow zoomIn animated">
                    <form action="/news/save-comment#comment-block" method="post" name="" class="comment-form">
                      <input type="hidden" value="{{csrf_token()}}" name="_token">
                      <input type="hidden" value="{{$blogs->id}}" name="blog_id">
                      <div class="row">
                        <div class="form-group col-sm-8 name-field">
                          <input type="text" name="comment_name" placeholder="Name*" required="" class="form-control">
                        </div>
                        <div class="form-group col-sm-8 email-field">
                          <input type="email" name="comment_email" placeholder="Email*" required="" class="form-control" >
                        </div>
                        <div class="form-group col-sm-16">
                          <textarea placeholder="Your Message" name="comment_content" rows="8" class="form-control" required id="message" name="message"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-danger" type="submit"> Post Reply </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


@endsection
@section("comment_block")
@endsection
