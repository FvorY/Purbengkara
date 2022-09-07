<footer class="brk-footer position-relative brk-library-rendered" id="contact" data-brk-library="component__footer">
			<div class="brk-footer__wrapper rendered">
				<div class="brk-footer__borders_footer-10 lazyloaded">
					<span class="brk-abs-bg-overlay brk-bg-color-dark-4"></span>
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-12">
								<div class="h-100 d-flex flex-column justify-content-center mt-20 mb-10 mb-lg-0 mt-lg-0">
									<h6 class="sr-only">Copyright</h6>
									<a href="{{url('/')}}" class="brk-white-font-color mt-15 mb-15 d-sm-inline-block d-block">
										<h3 style="color: white;">{{config('app.name')}}</h3>
									</a>
									<p class="brk-dark-font-color font__family-open-sans font__size-15 font__weight-normal line__height-21 pl-10 pl-xs-0 mb-2">{{$data->address}}</p>
									<p class="brk-dark-font-color font__family-open-sans font__size-14 font__weight-normal line__height-21 pl-10 pl-xs-0">© {{ date('Y') }} {{config('app.name')}} All rights reserved</p>
									<p class="brk-dark-font-color font__family-open-sans font__size-14 font__weight-normal line__height-21 pl-10 pl-xs-0">Hand-crafted & made with &#10084;</p>
								</div>
							</div>
							<div class="col-lg-4 col-12">
								<div class="brk-footer__bordered-col h-100 pt-40 pt-lg-30 pr-lg-30">
									<h6 class="brk-white-font-color font__family-montserrat font__weight-semibold text-uppercase letter-spacing-100 font__size-21 line__height-28 mb-30">Kategori</h6>
									<ul class="brk-tags brk-tags_solid font__family-montserrat brk-tags_transparent brk-tags_gray mb-20 brk-library-rendered" data-brk-library="component__tags">
										<li><a href="#" rel="tag">Network</a></li>
										<li><a href="#" rel="tag">Development</a></li>
										<li><a href="#" rel="tag">Bussines</a></li>
										<li><a href="#" rel="tag">Beauty</a></li>
										<li><a href="#" rel="tag">WordPress</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-12">
								<h6 class="brk-white-font-color font__family-montserrat font__weight-semibold text-uppercase letter-spacing-100 font__size-21 line__height-28 mb-40 mt-30">Follow Kami</h6>
								<ul class="brk-social-links-wide mb-25 brk-library-rendered" data-brk-library="component__social_links">
									@foreach ($sosmed as $key => $value)
									<li class="brk-social-links-wide__item brk-dark-font-color mb-15">
										<a href="{{$value->url}}" class="brk-social-links-wide__link">
											<div class="brk-social-links-wide__icon-container font__size-14">
												<img src="{{url('/')}}/{{$value->icon}}" alt="purbengkara social media" width="14" height="14">
											</div>
											<p class="font__size-14 font__weight-normal line__height-16">{{$value->name}}</p>
										</a>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
