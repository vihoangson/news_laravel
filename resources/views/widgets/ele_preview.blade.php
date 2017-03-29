
	<ul id="portfolio">
		@foreach ($array_web as $key=>$element)
			<li class="item col-md-6 webdesign">
				<a title="Example 1" href="/img_preview/fullsize/{{$element["img"]}}" data-lightbox-gallery="gallery1" class="nivo-lbox">
					<div class="folio-img">
						<img src="/img_preview/{{$element["img"]}}" alt="" class="img-responsive">
						<div class="overlay">
							<div class="overlay-inner">
								<h4>{{$element["title"]}}</h4>
								<p>{{$element["desc"]}}</p>
							</div>
						</div>
					</div>
				</a>
				<p><a href="{{$element["url"]}}" target="_blank">{{$element["desc"]}}</a></p>
			</li>
		@endforeach
	</ul>

										<div class="hidden">
<ul>

											<li class="item col-md-4 illustration">
												<a title="Sample 2" href="https://www.youtube.com/watch?v=L9szn1QQfas" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/2.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 appicon">
												<a title="i'm Number 3" href="http://vimeo.com/71071717" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/3.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Example 4" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/4.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 5" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/5.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 illustration">
												<a title="Lorem ipsum 6" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/6.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 webdesign">
												<a title="Example 7" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/7.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 8" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/8.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 webdesign">
												<a title="Project 9" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/9.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 illustration">
												<a title="Example 10" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/10.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 appicon">
												<a title="Item 11" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/11.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li class="item col-md-4 iosappui">
												<a title="Sample 12" href="<?= PATH_THEME; ?>images/projects/1-big.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
													<div class="folio-img">
														<img src="<?= PATH_THEME; ?>images/projects/12.jpg" alt="" class="img-responsive">
														<div class="overlay">
															<div class="overlay-inner">
																<h4>Cool App Design</h4>
																<p>branding, logo</p>
															</div>
														</div>
													</div>
												</a>
											</li>	

</ul>										
										</div>