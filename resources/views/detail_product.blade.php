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
									
								
								<!-- slide gambar -->
									<div class="col-auto">
										<div class="brk-sc-shop-item__labels">
											<div class="brk-sc-card-labels brk-sc-card-labels_rounded d-flex align-items-center justify-content-center brk-base-bg-gradient-20" data-brk-library="component__shop_cards">
												<span class="brk-sc-card-labels__title font__family-open-sans font__size-16 font__weight-bold text-uppercase brk-white-font-color">
													sale
												</span>
											</div>
											<div class="brk-sc-card-labels brk-sc-card-labels_rounded d-flex align-items-center justify-content-center brk-base-bg-gradient-21" data-brk-library="component__shop_cards">
												<span class="brk-sc-card-labels__title font__family-open-sans font__size-16 font__weight-bold text-uppercase brk-white-font-color">
													<i class="fas fa-leaf"></i> ECO
												</span>
											</div>
										</div>
										<div class="slider-thumbnailed slider-thumbnailed_shop-sidebar slick-loading fa-req">
											<div class="slider-thumbnailed-for arrows-modern" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "arrows": false, "autoplay": false, "autoplaySpeed": 4200}' data-brk-library="slider__slick" style="min-height: auto">
												<div>
													<img src="{{ asset($productimage[0]->image) }}" alt="alt">
													@php
															$jumlahimage = count($productimage)-1;
													@endphp
												</div>
												@for($x=0;$x<=$jumlahimage;$x++)
												<div>
													<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($productimage[$x]->image) }}" alt="alt" class="lazyload">
												</div>												
												@endfor
											</div>
											<div class="slider-thumbnailed-nav" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>								
												@for($x=0;$x<=$jumlahimage;$x++)
												<div class="brk-slid">
													<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($productimage[$x]->image) }}" class="brk-slid__img lazyload" alt="alt">
													<span class="brk-slid__overlay"></span>
													<i class="fal fa-plus font__size-24 brk-slid__icon"></i>
												</div>
												@endfor
											</div>
										</div>
									</div>
								<!-- end slide gambar -->


									<div class="brk-sc-shop-item__info">
									<div class="col-lg-7 col-sm-12">
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
													<a href="#" class="btn btn-prime btn-lg border-radius-30 font__family-open-sans font__weight-bold m-0 pr-30 pl-30 brk-sc-shop-item__info-btn letter-spacing-40" onclick="addCart(this)" data-id="{{$data_product->id_product}}" data-image="{{$data_product->image}}" data-name="{{$data_product->productname}}" data-link="{{url('/')}}/produk/{{$data_product->url_segment}}" data-price="Mulai {{FormatRupiahFront($data_product->priceMin)}} - {{FormatRupiahFront($data_product->priceMax)}}" style="cursor: pointer;">
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
								
								<!-- Descripsi -->
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
								<hr>

								<!-- Related product -->
								<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase">
									Related Products
								</span>
								<div class="row pt-5">
									@foreach($produk as $pro)
									<div class="col-12 col-md-6 col-xl-4" style="cursor: pointer;" @if($pro->specialname == null) onclick="openDetail(this)" data-url_segment="{{$pro->url_segment}}" @endif>
										<div class="flip-box text-center" data-brk-library="component__flip_box,component__elements,fancybox">
										<div class="flip @if($pro->specialname != null) flip_vertical @endif flip-box__split">
											<div class="flip__front">
											<div class="flip-box__split-img lazyload" data-bg="{{$pro->image}}"></div>
											<div class="pt-30 pb-30 flip-box__split-info">
												<div class="font__family-montserrat font__weight-bold pl-20 pr-20 font__size-15">
												{{$pro->productname}}
												</div>
												<div class="brk-base-font-color font__family-montserrat font__size-17 font__weight-medium" style="padding-right: 5px; padding-left: 5px;">
												<span class="font__weight-semibold">
													Mulai {{FormatRupiahFront($pro->priceMin)}} - {{FormatRupiahFront($pro->priceMax)}}
												</span>
												</div>
											</div>
											</div>
											@if($pro->specialname != null)
											<div class="flip__back lazyload">
											<div class="flip-box__split-overlay brk-base-bg-gradient-10deg"></div>
											<div class="flip-box__split-content">
												<div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5" onclick="openDetail(this)" data-url_segment="{{$pro->url_segment}}" style="cursor: pointer;">
												<a href="#">
													<h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">
													{{$pro->specialname}}
													</h4>
												</a>
												<div class="flip-box__split-price font__family-montserrat font__size-15">
													<span class="font__weight-bold"></span>
													{{$pro->specialprice}}
												</div>
												</div>
												<div class="flip-box__split-list">
												<ul class="font__family-open-sans font__size-15 line__height-20 font__weight-light text-left letter-spacing-40 pt-15 pb-15">
													<?php $note = explode("+",$pro->note) ?>
													@for ($i = 0; $i < count($note); $i++)
													<li class="d-flex font__weight-bold"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">{{$note[$i]}}</span></li>
													@endfor
												</ul>
												</div>
												<div class="flip-box__split-actions">
												<a href="#" onclick="addCart(this)" data-id="{{$pro->id_product}}" data-image="{{$pro->image}}" data-name="{{$pro->productname}}" data-link="{{url('/')}}/produk/{{$pro->url_segment}}" data-price="Mulai {{FormatRupiahFront($pro->priceMin)}} - {{FormatRupiahFront($pro->priceMax)}}" style="cursor: pointer;" class="add-cart d-flex align-items-center justify-content-center">
													<i class="fas fa-shopping-cart"></i>
												</a>
												<a href="{{url('/')}}/produk/{{$pro->url_segment}}" class="add-search d-flex align-items-center justify-content-center fancybox">
													<i class="fas fa-folder-open"></i>
												</a>
												<a href="https://api.whatsapp.com/send?phone={{hp($data->whatsapp)}}&text=*Halo%2C%20{{config('app.name')}}%20%F0%9F%91%8B*%0ASaya%20ingin%20order%20produk%20ini%20:%20%0A%0A{{$pro->productname}}%20%0A{{url('/')}}/produk/{{$pro->url_segment}}" class="add-wishlist d-flex align-items-center justify-content-center">
													<i class="fab fa-whatsapp"></i>
												</a>
												</div>
											</div>
											</div>
											@endif
										</div>
										</div>
									</div>
									@endforeach
									<div class="col-12">
										<div class="text-center mt-110 mb-80">
										<a href="{{url('/')}}/product/search" class="icon__btn icon__btn-anim icon__btn-md icon__btn-invert">
											<span class="before"></span>
											<i class="fal fa-sync" aria-hidden="true"></i>
											<span class="after"></span>
											<span class="bg"></span>
										</a>
										</div>
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
