@extends('front')

@section('content')

	<div class="main-wrapper brk-z-index-10">
		<main class="main-container pt-180">
			<div class="container">
				<div class="brk-sc-shop-item" data-brk-library="component__shop_item_page_sidebar">
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-12">
							<div class="brk-sc-shop-item__main">
								<div class="row pb-20 justify-content-md-start justify-content-center">
									<div class="col-auto">
										<div class="slider-thumbnailed slider-thumbnailed_shop-sidebar slick-loading fa-req">
											<div class="slider-thumbnailed-for arrows-modern" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "arrows": false, "autoplay": false, "autoplaySpeed": 4200}' data-brk-library="slider__slick" style="min-height: auto">
												<div>
													<img class="shadow-lg p-2 mb-5" style="width:300px; border-radius:20px" src="https://bogorprint.com/wp-content/uploads/2022/02/x-banner.jpg" alt="alt">
												</div>
								
											</div>
											<div class="slider-thumbnailed-nav" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
												
												<!--<div class="brk-slid">
													<img src="{{ asset('assets/images/joker.jpg') }}" data-src="{{ asset('assets/images/joker.jpg') }}" class="brk-slid__img lazyload" alt="alt">
													<span class="brk-slid__overlay"></span>
													<i class="fal fa-plus font__size-24 brk-slid__icon"></i>
												</div>
											-->
											</div>
										</div>
									</div>
									<div class="col-12 col-lg">
										<div class="brk-sc-shop-item__info">
											<h2 class="font__family-montserrat brk-black-font-color font__size-28 font__weight-light line__height-32">
												<span class="font__weight-bold">{{ $data_product->productname }} </span>
											</h2>
											<hr>

											<div class="brk-sc-info-grid d-flex flex-wrap">
												<div class="">
													<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
														Harga Mulai:
													</span>
													<div class="fw-bold font__family-montserrat font__weight-light font__size-25 line__height-38">
														{{ FormatRupiahFront($data_product->priceMin) }} 
														<span class="brk-sc-category__title font__family-montserrat font__size-12 font__weight-bold mr-10 text-uppercase">
															s/d </span>
														{{ FormatRupiahFront($data_product->priceMax)}}
													</div>
												</div>
											</div>
											<div class="brk-sc-info-grid d-flex flex-wrap">
												<div class="">
													<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
														{{ $data_product->name }}
													</span>
													<div class="fw-bold font__family-montserrat font__weight-light font__size-25 line__height-38">
														{{ $data_product->price }}
													</div>
												</div>
											</div>
											<div class="brk-sc-info-grid d-flex flex-wrap pt-4 pb-3">
												<div class="">
													<a href="#" class="btn btn-prime btn-lg border-radius-30 font__family-open-sans font__weight-bold m-0 pr-30 pl-30 brk-sc-shop-item__info-btn letter-spacing-40" data-brk-library="component__button">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
														<span class="before"></span><span class="after"></span><span class="border-btn"></span>Add to cart
													</a>
												</div>
											</div>
											<hr>
											<div class="brk-sc-category d-flex align-items-baseline" data-brk-library="component__elements">
												<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
													Category:
												</span>
												<div class="brk-sc-category__items d-flex align-items-center flex-wrap">
													<a href="#" class="brk-dark-font-color font__family-open-sans font__size-14 mr-1">{{ $data_product->categoryname }}</a>
												</div>
											</div>
											<hr>
											<div class="brk-sc-info-grid d-flex flex-wrap pt-2">
												<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
													Tags:
												</span>
												<div class="brk-sc-category__items d-flex align-items-center flex-wrap">
													<a href="#" class="brk-dark-font-color font__family-open-sans font__size-14 mr-1">{{ $data_product->note }}</a>
												</div>
											</div>
											
											<hr>
											
											@foreach ($sosmed as $item)
														
												<a href="{{ $item->url }}">

													<img class="m-2" src="{{ $item->icon }}" alt="{{ $item->name }}">
												</a>
												
											@endforeach
											

											<div class="d-flex flex-wrap justify-content-between">

											</div>
										</div>
									</div>
								</div>
								<div class="brk-tabs brk-tabs_canted" data-brk-library="component__shop_item_page_sidebar">
									<ul class="brk-tabs-nav font__family-montserrat font__size-14 font__weight-semibold line__height-14 text-uppercase">
										<li class="brk-tab">
											<span>Description</span>
										</li>
										<li class="brk-tab">
											<span>characteristics</span>
										</li>
										<li class="brk-tab">
											<span>options</span>
										</li>
									</ul>
									<div class="brk-tabs-content">
										<div class="brk-tab-item pt-35">
											<p class="brk-dark-font-color font__family-open-sans font__size-16 line__height-26 font__weight-normal mb-45">
												Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
												posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus
												quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc.
												Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.
											</p>
											<div class="d-flex flex-wrap justify-content-between">
												<div class="mb-50">
													<svg class="svg-md svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
														<path fill="none" stroke="#F39C12" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M20.15,34.19L29.34,25c0,0,1.41,0,3.54,2.12S35,30.66,35,30.66l-9.19,9.19" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M-1.06,66.72l-5.66-5.66l26.87-26.87c0,0,1.41,0,3.54,2.12s2.12,3.54,2.12,3.54L-1.06,66.72z" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M20.15,34.19L29.34,25c0,0,1.41,0,3.54,2.12S35,30.66,35,30.66l-9.19,9.19" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M-1.06,66.72l-5.66-5.66l26.87-26.87c0,0,1.41,0,3.54,2.12s2.12,3.54,2.12,3.54L-1.06,66.72z" />
														<path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M16,22c0,0-0.4-1.2-1.6-2.4C13.2,18.4,12,18,12,18s1.2-0.4,2.4-1.6C15.6,15.2,16,14,16,14s0.4,1.2,1.6,2.4C18.8,17.6,20,18,20,18s-1.2,0.4-2.4,1.6C16.4,20.8,16,22,16,22z" />
														<path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,9c0,0-0.1-0.3-0.4-0.6C29.3,8.1,29,8,29,8s0.3-0.1,0.6-0.4C29.9,7.3,30,7,30,7s0.1,0.3,0.4,0.6C30.7,7.9,31,8,31,8s-0.3,0.1-0.6,0.4C30.1,8.7,30,9,30,9z" />
														<path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M44,22c0,0-0.6-1.8-2.4-3.6C39.8,16.6,38,16,38,16s1.8-0.6,3.6-2.4C43.4,11.8,44,10,44,10s0.6,1.8,2.4,3.6C48.2,15.4,50,16,50,16s-1.8,0.6-3.6,2.4C44.6,20.2,44,22,44,22z" />
														<path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M52,31c0,0-0.1-0.3-0.4-0.6C51.3,30.1,51,30,51,30s0.3-0.1,0.6-0.4C51.9,29.3,52,29,52,29s0.1,0.3,0.4,0.6C52.7,29.9,53,30,53,30s-0.3,0.1-0.6,0.4C52.1,30.7,52,31,52,31z" />
														<path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M42,48c0,0-0.4-1.2-1.6-2.4C39.2,44.4,38,44,38,44s1.2-0.4,2.4-1.6C41.6,41.2,42,40,42,40s0.4,1.2,1.6,2.4C44.8,43.6,46,44,46,44s-1.2,0.4-2.4,1.6C42.4,46.8,42,48,42,48z" />
													</svg>
													<h3 class="font__family-montserrat font__weight-light font__size-24 line__height-30 text-uppercase mt-30">
														Awesome</h3>
													<h3 class="font__family-montserrat font__weight-bold font__size-24 line__height-30 text-uppercase">Design</h3>
													<p class="font__family-open-sans font__size-14 brk-dark-font-color mt-10">Aenean vulputate eleifend</p>
												</div>
												<div class="mb-50">
													<svg class="svg-md svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
														<circle fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="15" cy="13" r="6" />
														<path fill="none" stroke="#e9b995" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M34.33,48.29c-2.92-3.86-6.16-3.47-9.37-5.55c-2.01-1.31-4.43-1.93-6.26-4.11c-1.13-1.35-2.22-3.39-3.77-4.99c-1.25-1.29-2.54-2.87-2.14-3.6c1.71-3.03,5.99,0.36,11.39,5.67c0.09,0.09,0.24-0.1,0.17-0.22c-1-1.73-11-19.05-11-19.05c-2.76-4.78,2.49-7.46,5.2-3l6.9,11.95c0.25,0.41,0.07,0.2,0.1,0.17c0.2-0.13-1.7-4.16,1.28-5.04c3.13-0.92,3.8,3.14,4.02,3.05c0.23-0.1-1.39-3.15,1.92-3.92c1.95-0.45,2.96,1.91,3.17,1.88c0.13-0.02-0.11-2.32,2.01-2.31c2.79,0.01,5.55,5.22,8.29,10.18c1.17,2.11,1.11,6.5,3.61,9.92L34.33,48.29z" />
														<rect x="40.89" y="34.66" transform="matrix(-0.5 -0.866 0.866 -0.5 24.789 105.6386)" fill="none" stroke="#2980B9" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="4" height="22" />
														<rect x="40.89" y="34.59" transform="matrix(-0.4999 -0.8661 0.8661 -0.4999 24.8453 105.5295)" display="inline" fill="none" stroke="#34495E" stroke-width="1" stroke-linecap="square" stroke-miterlimit="10" width="4" height="22" />
													</svg>
													<h3 class="font__family-montserrat font__weight-light font__size-24 line__height-30 text-uppercase mt-30">
														Awesome</h3>
													<h3 class="font__family-montserrat font__weight-bold font__size-24 line__height-30 text-uppercase">Design</h3>
													<p class="font__family-open-sans font__size-14 brk-dark-font-color mt-10">Aenean vulputate eleifend</p>
												</div>
												<div class="mb-50">
													<svg class="svg-md svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
														<path fill="none" stroke="#9CAAB9" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M42,31h1.43l0.35,2.94l2.65,1.1L49,33l2,2l-2.04,2.56l1.1,2.65L53,40.57v2.87l-2.94,0.35l-1.1,2.65L51,49l-2,2l-2.56-2.04l-2.65,1.1L43.43,53h-2.87l-0.35-2.94l-2.65-1.1L35,51l-2-2l2.04-2.56l-1.1-2.65L31,43.43v-2.87l2.94-0.35l1.1-2.65L33,35l2-2l2.56,2.04l2.65-1.1L40.57,31H42zM42,39c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3c1.66,0,3-1.34,3-3C45,40.34,43.66,39,42,39z" />
														<path fill="none" stroke="#95A5A6" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M23,7h1.04l1.01,4.31l2.02,0.54l3.03-3.23l1.81,1.04l-1.28,4.23l1.48,1.48l4.23-1.28l1.05,1.81l-3.22,3.03l0.54,2.02L39,21.96l0,2.08l-4.31,1.01l-0.54,2.02l3.22,3.03l-1.04,1.81l-4.23-1.28l-1.48,1.48l1.28,4.23l-1.81,1.05l-3.03-3.23l-2.02,0.54L24.04,39l-2.09,0l-1.01-4.31l-2.02-0.54l-3.02,3.23l-1.81-1.04l1.28-4.23l-1.48-1.48L9.66,31.9L8.62,30.1l3.23-3.03l-0.54-2.02L7,24.04l0-2.09l4.31-1.01l0.54-2.02L8.62,15.9l1.04-1.81l4.24,1.28l1.48-1.48L14.1,9.66l1.81-1.04l3.03,3.23l2.02-0.54L21.96,7H23zM23,17c-3.31,0-6,2.68-6,6c0,3.31,2.68,6,6,6c3.31,0,6-2.69,6-6C29,19.68,26.31,17,23,17z" />
													</svg>
													<h3 class="font__family-montserrat font__weight-light font__size-24 line__height-30 text-uppercase mt-30">
														Awesome</h3>
													<h3 class="font__family-montserrat font__weight-bold font__size-24 line__height-30 text-uppercase">Design</h3>
													<p class="font__family-open-sans font__size-14 brk-dark-font-color mt-10">Aenean vulputate eleifend</p>
												</div>
												<div class="mb-50">
													<svg class="svg-md svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M52.97,28.91C52.99,29.27,53,29.63,53,30" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M51.55,21.96c0.26,0.7,0.48,1.4,0.67,2.11" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M46.84,14.33c0.78,0.83,1.49,1.73,2.14,2.67" />
														<path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M49.8,42.19C45.75,48.75,38.27,53,30,53C17.3,53,7,42.7,7,30C7,17.3,17.3,7,30,7c4.17,0,8.22,1.11,11.78,3.24" />
														<polyline fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="43,41 51,41 51,49" />
														<line fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="31" x2="41" y2="24" />
														<line fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="31" x2="18" y2="19" />
														<path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" d="M52.97,28.91C52.99,29.27,53,29.63,53,30" />
														<path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" d="M51.55,21.96c0.26,0.7,0.48,1.4,0.67,2.11" />
														<path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" d="M46.84,14.33c0.78,0.83,1.49,1.73,2.14,2.67" />
														<path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" d="M49.8,42.19C45.75,48.75,38.27,53,30,53C17.3,53,7,42.7,7,30C7,17.3,17.3,7,30,7c4.17,0,8.22,1.11,11.78,3.24" />
														<polyline fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" points="43,41 51,41 51,49" />
														<line fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="31" x2="41" y2="24" />
														<line fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square" stroke-miterlimit="10" x1="30" y1="31" x2="18" y2="19" />
													</svg>
													<h3 class="font__family-montserrat font__weight-light font__size-24 line__height-30 text-uppercase mt-30">
														Awesome</h3>
													<h3 class="font__family-montserrat font__weight-bold font__size-24 line__height-30 text-uppercase">Design</h3>
													<p class="font__family-open-sans font__size-14 brk-dark-font-color mt-10">Aenean vulputate eleifend</p>
												</div>
											</div>
											<p class="brk-dark-font-color font__family-open-sans font__size-16 line__height-26 font__weight-normal mb-30">
												Phasellus dolor. Maecenas vestibulum mollis pellentesque ut neque esque habitant morbi tristique senectus et netus et malesuada fames ac turpis gestas. In dui magna. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus.
											</p>
											<p class="brk-dark-font-color font__family-open-sans font__size-16 line__height-26 font__weight-normal mb-30">
												Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae.
											</p>
										</div>
										<div class="brk-tab-item pt-35">
											<p class="brk-dark-font-color font__family-open-sans font__size-16 line__height-26 font__weight-normal mb-45">
												Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
												posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus
												quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc.
												Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.
											</p>
											<div class="progress__wrapper progress__gradient" data-brk-library="component__progress_bar">
												<div class="progress">
													<div data-valuemax="100" data-valuemin="0" data-valuenow="100" class="progress__bar">
														<span class="before"></span>
													</div>
													<span class="font__family-montserrat font__size-16 font__weight-bold progress__bar-counter hide">
														100
													</span>
												</div>
												<h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
													Hard Work
												</h5>
											</div>
											<div class="progress__wrapper progress__gradient" data-brk-library="component__progress_bar">
												<div class="progress">
													<div data-valuemax="100" data-valuemin="0" data-valuenow="80" class="progress__bar">
														<span class="before"></span>
													</div>
													<span class="font__family-montserrat font__size-16 font__weight-bold progress__bar-counter hide">
														80
													</span>
												</div>
												<h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
													Projects Delivery
												</h5>
											</div>
											<div class="progress__wrapper progress__gradient" data-brk-library="component__progress_bar">
												<div class="progress">
													<div data-valuemax="100" data-valuemin="0" data-valuenow="40" class="progress__bar">
														<span class="before"></span>
													</div>
													<span class="font__family-montserrat font__size-16 font__weight-bold progress__bar-counter hide">
														40
													</span>
												</div>
												<h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
													Customers Love
												</h5>
											</div>
										</div>
										<div class="brk-tab-item pt-35">
											<h4 class="font__family-montserrat font__size-28 font__weight-light line__height-32 text-uppercase">
												Make business with us
											</h4>
											<h4 class="font__family-montserrat font__size-28 font__weight-bold line__height-32 text-uppercase mb-30">& become beautiful
											</h4>
											<p class="brk-dark-font-color font__family-open-sans font__size-15 font__weight-normal line__height-24 mb-20">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.
											</p>
											<p class="brk-dark-font-color font__family-open-sans font__size-15 font__weight-normal line__height-24 mb-40">
												Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque
												rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
												rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
											</p>
											<div class="cfa__wrapper cfa__minimal bg__style overlay__white text-center text-lg-left lazyload" data-bg="img/1170x108_2.jpg" data-brk-library="component__call_to_action">
												<h4 class="font__family-montserrat font__size-21 font__weight-bold no-wrap">CFA Heading</h4>
												<p class="font__family-open-sans font__size-14 text-dark text-center text-lg-left">Lorem ipsum dolor sit amet, consectetuer cing elit. Aenean commodo ligula</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section 2 -->
			<div class="brk-tabs brk-tabs_rounded d-flex flex-column" data-brk-library="component__tabs">
				<ul class="brk-tabs-nav brk-white-font-color font__family-montserrat font__size-15 font__weight-normal line__height-16 d-inline-flex flex-wrap align-items-center ml-auto mr-auto">
					<li class="brk-tab d-flex align-items-center text-uppercase pl-40 pr-40">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>Related posts</span>
					</li>
					<li class="brk-tab d-flex align-items-center text-uppercase pl-40 pr-40">
						<i class="fa fa-star" aria-hidden="true"></i> <span>Reviews</span>
					</li>
					<li class="brk-tab d-flex align-items-center text-uppercase pl-40 pr-40">
						<i class="fa fa-comments" aria-hidden="true"></i> <span>comments</span>
					</li>
				</ul>
				<div class="brk-tabs-content">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/1920x800.jpg" alt="alt" class="brk-tabs-content__img lazyload" data-brk-library="fancybox">
					<span class="brk-tabs-content__overlay brk-base-bg-gradient-90deg"></span>
					<div class="brk-tab-item">
						<div class="container">
							<div class="brk-slider">
								<div class="brk-slider__items slick-loading" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "arrows": false, "dots": true}' data-brk-library="slider__slick">
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">Trench coat</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">Trench coat</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">Ralph Lauren</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">Ralph Lauren</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">Business shoes</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">Business shoes</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">Some large item name here</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">Some Title Here</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">The North Face</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">The North Face</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="flip-box brk-sc-flip-two text-center" data-brk-library="component__shop_flip,component__flip_box_css,scrollbar">
											<div class="flip flip_horizontal">
												<div class="flip__front brk-sc-flip-two__front">
													<div class="brk-sc-flip-two__thumb">
														<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/brk-honeycomb-1.png" alt="alt" class="lazyload">
													</div>
													<div class="brk-sc-flip-two__description">
														<div class="brk-sc-flip-two__stick font__family-montserrat font__weight-light brk-white-font-color brk-bg-primary">-40%</div>
														<div class="brk-sc-flip-two__price font__family-montserrat font__weight-medium brk-base-font-color">$24.00</div>
														<div class="brk-sc-flip-two__front-title font__family-montserrat font__weight-light brk-dark-font-color">Sport shoes</div>
													</div>
												</div>
												<div class="flip__back brk-sc-flip-two__back">
													<div class="brk-sc-flip-two__back-layer">
														<div class="brk-sc-flip-two__back-title font__family-montserrat font__weight-medium">Sport shoes</div>
														<div class="brk-sc-flip-two__list scrollbar-inner">
															<ul class="pl-15 pr-15">
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortor</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrmper</li>
																<li><i class="far fa-check brk-base-font-color"></i> Etiam ultricies</li>
																<li><i class="far fa-check brk-base-font-color"></i> Duis arcu tortorsci</li>
																<li><i class="far fa-check brk-base-font-color"></i> Quisque rutrum</li>
															</ul>
														</div>
														<div class="brk-sc-flip-two__button">
															<a href="#" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold" data-brk-library="component__button">
																<i class="far fa-shopping-basket icon-inside"></i>
																<span class="before">$24.00</span><span class="text">buy it</span><span class="after">$24.00</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="brk-slider__control d-flex align-items-center">
									<span class="brk-slider__prev brk-base-font-color font__size-24">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</span>
									<span class="brk-slider__next brk-base-font-color font__size-24">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="brk-tab-item">
						<div class="container">
							<div class="border-radius-25 bg-white pl-30 pr-30 pt-30 pb-30 mt-30 mb-40">
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
							</div>
							<div class="border-radius-25 bg-white pl-30 pr-30 pt-30 pb-30">
								<div class="brk-reply mt-40" data-brk-library="component__forum_post">
									<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 text-center">Your Review</h3>
									<form action="#" class="brk-reply__form brk-form-strict" data-brk-library="component__form">
										<div class="row">
											<div class="col-12 col-lg-4">
												<input name="name" type="text" placeholder="Your Name">
											</div>
											<div class="col-12 col-lg-4">
												<input name="email" type="email" placeholder="Email">
											</div>
											<div class="col-12 col-lg-4">
												<div class="d-flex align-items-center justify-content-center w-100 h-100 pt-30">
													<div class="brk-rating" data-brk-library="component__elements">
														<div class="brk-rating__layer brk-dark-font-color">
															<i class="fal fa-star"></i>
															<i class="fal fa-star"></i>
															<i class="fal fa-star"></i>
															<i class="fal fa-star"></i>
															<i class="fal fa-star"></i>
														</div>
														<div class="brk-rating__imposition brk-base-font-color" style="width: 80%">
															<div class="visible">
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12">
												<textarea name="textarea" placeholder="Some text"></textarea>
											</div>
										</div>
										<button class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
											<i class="fas fa-long-arrow-alt-right icon-inside"></i>
											<span class="before">Review</span><span class="text">Click Me</span><span class="after">Review</span>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="brk-tab-item">
						<div class="container">
							<div class="border-radius-25 bg-white pl-30 pr-30 pt-30 pb-30 mb-40 mt-30">
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/55x55_1.jpg" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
								</div>
							</div>
							<div class="border-radius-25 bg-white pl-30 pr-30 pt-30 pb-30">
								<div class="brk-reply mt-40" data-brk-library="component__forum_post">
									<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 text-center">Your Reply</h3>
									<form action="#" class="brk-reply__form brk-form-strict" data-brk-library="component__form">
										<div class="row">
											<div class="col-lg-6 col-12">
												<input name="name" type="text" placeholder="Your Name">
											</div>
											<div class="col-lg-6 col-12">
												<input name="email" type="email" placeholder="Email">
											</div>
											<div class="col-12">
												<textarea name="textarea" placeholder="Some text"></textarea>
											</div>
										</div>
										<button class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
											<i class="fas fa-long-arrow-alt-right icon-inside"></i>
											<span class="before">Reply</span><span class="text">Click Me</span><span class="after">Reply</span>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

@endsection