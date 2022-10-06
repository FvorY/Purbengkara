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
									<div class="col-lg-5 col-sm-12">
										<div class="slider-thumbnailed slider-thumbnailed_shop-sidebar slick-loading fa-req">
											<div class="slider-thumbnailed-for arrows-modern" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "arrows": false, "autoplay": false, "autoplaySpeed": 4200}' data-brk-library="slider__slick" style="min-height: auto">
												
												@if($data_product->image != null)
												<div>
													<img id="img_product" class="shadow-lg p-2 mb-5" style="width:300px; border-radius:20px" src="{{ asset($data_product->image) }}" alt="kosong">
												</div>
												@endif
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
									<div class="col-lg-7 col-sm-12">
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
											<!-- share sosmed -->
											<div class="sharethis-inline-share-buttons"></div>
											<hr>
											</div>
										</div>
									</div>
								</div>
								
								<!-- section 2 -->
								<div class="card mt-3 mb-5">
									<div class="card-header bg-light">
										<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
											Descripsi
										</span>
									</div>
									<div class="card-body">
										<p class="brk-dark-font-color font__family-open-sans font__size-14 mr-1">{{ $data_product->spek }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</main>
	</div>

@endsection
