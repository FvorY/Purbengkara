@extends('front')
@section('content')
@php
	$jumlahimage = count($productimage)-1;
@endphp
	<div class="main-wrapper brk-z-index-10">
		<main class="main-container" id="topBar">
			<div class="container">
				<div class="brk-sc-shop-item" data-brk-library="component__shop_item_page_sidebar">
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-12">
							<div class="brk-sc-shop-item__main">
								<div class="row pb-20 justify-content-md-start justify-content-center">

								<div class="col-lg-5 col-sm-12">
								<!-- slide gambar -->
									<div class="container-slideimage">
										<!-- Flickity HTML init -->
										<div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
											@for ($i=0; $i <= $jumlahimage; $i++)
												<div class="carousel-cell"><img style="object-fit: contain;" src="{{asset($productimage[$i]->image)}}"/></div>
											@endfor
										</div>

										<div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
										@for ($i=0; $i <=  $jumlahimage; $i++)
											<div class="carousel-cell"><img style="object-fit: contain; height: 90px; width: 120px;" src="{{asset($productimage[$i]->image)}}"/></div>
										@endfor
										</div>
									</div><!-- /.container -->
								</div>
								<!-- end slide gambar -->

								<div class="col-lg-7 col-sm-12 mt-20">
										<div class="container">
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
												<div class="pt-3">
													<span class="brk-sc-category__title font__family-montserrat font__size-14 font__weight-bold mr-10 text-uppercase" style="color:red">
														{{ $data_product->name }}
													</span>
													<div class="fw-bold font__family-montserrat font__weight-light font__size-25 line__height-38 mt-2" >
														{{ $data_product->price }}
													</div>
												</div>
											</div>
											@foreach($produk as $pro)
											<div class="brk-sc-info-grid d-flex flex-wrap pt-4 pb-3">
												<div class="">
													<a target="_blank" href="https://api.whatsapp.com/send?phone={{hp($data->whatsapp)}}&text=*Halo%2C%20{{config('app.name')}}%20%F0%9F%91%8B*%0ASaya%20ingin%20order%20produk%20ini%20:%20%0A%0A{{$pro->productname}}%20%0A{{url('/')}}/produk/{{$pro->url_segment}}" class="btn btn-prime btn-lg border-radius-30 font__family-open-sans font__weight-bold m-0 pr-30 pl-30 brk-sc-shop-item__info-btn letter-spacing-40" style="cursor: pointer;">
														<i class="fab fa-whatsapp" aria-hidden="true"></i>
														<span class="before"></span><span class="after"></span><span class="border-btn"></span>Order Via whatsapp
													</a>
												</div>
											</div>
											@endforeach
											<div class="brk-sc-info-grid d-flex flex-wrap pt-4 pb-3">
												<div class="">
													<button class="btn btn-prime btn-lg border-radius-30 font__family-open-sans font__weight-bold m-0 pr-30 pl-30 brk-sc-shop-item__info-btn letter-spacing-40" onclick="addCart(this)" data-id="{{$data_product->id_product}}" data-image="{{url('/')}}/{{$data_product->image}}" data-name="{{$data_product->productname}}" data-link="{{url('/')}}/product/detail/{{$data_product->url_segment}}" data-price="Mulai {{FormatRupiahFront($data_product->priceMin)}} - {{FormatRupiahFront($data_product->priceMax)}}" style="cursor: pointer;">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
														<span class="before"></span><span class="after"></span><span class="border-btn"></span>Add to cart
													</button>
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


							<!-- related product -->
								@if($produk != null)
								<div class="main-wrapper" id="produk">
									<main class="main-container pb-70">
									<section>
										<div class="container mb-30">
											<div class="text-center">
												<h3 class="font__family-montserrat font__size-28 font__weight-bold">
													Produk Serupa
												</h3>
											</div>
										</div>
										<div class="container">
										<div class="brk-shop-grid-filter">
											<div class="brk-shop-grid-filter__items row">
											@foreach($produk as $pro)
											<div class="col-xl-3 col-md-6 brk-shop-grid-filter__item {{preg_replace('/\s+/', '', strtolower($pro->categoryname))}}" @if($pro->specialname == null) onclick="openDetail(this)" data-url_segment="{{$pro->url_segment}}" @endif>
												<div @if($pro->specialname != null) class="brk-shop-grid-filter-strict brk-shop-grid-filter-strict_hover" @else class="brk-shop-grid-filter-strict" @endif>
													<div class="brk-shop-grid-filter-strict__thumb" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
													@if($pro->image != null)
													<img src="{{$pro->image}}" alt="{{$pro->productname}}" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
													@else
													<img src="https://cdn-icons-png.flaticon.com/512/4904/4904233.png" alt="Default Image" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
													@endif
													</div>
													<div class="brk-shop-grid-filter-strict__inform text-center d-flex flex-column align-content-center justify-content-center">
													<h4 class="font__family-montserrat font__weight-bold font__size-18">{{$pro->productname}}</h4>
													<div class="price brk-base-font-color font__family-montserrat font__size-15 line__height-22 font__weight-medium">
														<!-- <span class="old-price brk-dark-font-color">$26.00</span> -->
														<span class="font__weight-bold">Mulai {{FormatRupiahFront($pro->priceMin)}} - {{FormatRupiahFront($pro->priceMax)}}</span>
													</div>
													</div>
													<!-- <div class="brk-shop-grid-filter-strict__stick brk-white-font-color font__family-montserrat font__weight-bold">New</div> -->

													@if($pro->specialname != null)
													<div class="before brk-sc-tiles-split-gradient"></div>
													<div class="brk-shop-grid-filter-strict__back">
													<div class="brk-shop-grid-filter-strict__inform text-center d-flex flex-column align-content-center justify-content-center" onclick="openDetail(this)" data-url_segment="{{$pro->url_segment}}" style="cursor: pointer;">
														<h4 class="font__family-montserrat font__weight-bold font__size-18">{{$pro->specialname}}</h4>
														<div class="price brk-base-font-color font__family-montserrat font__size-15 line__height-22 font__weight-medium">
														<!-- <span class="old-price brk-dark-font-color">{{$pro->specialprice}}</span> -->
														<span class="font__weight-bold">{{$pro->specialprice}}</span>
														</div>
													</div>
													<div class="brk-shop-grid-filter-strict__list pt-20 pb-20">
														<ul class="font__size-15 line__height-20 font__weight-light text-left letter-spacing-60">
														<?php $note = explode("+",$pro->note) ?>
														@for ($i = 0; $i < count($note); $i++)
															<li class="d-flex font__weight-bold"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">{{$note[$i]}}</span></li>
														@endfor
														</ul>
													</div>
													<div class="text-center pt-35">
														<div class="brk-shop-grid-filter-strict__actions clearfix brk-base-box-shadow-primary">
															<a onclick="addCart(this)" data-id="{{$pro->id_product}}" data-image="{{url('/')}}/{{$pro->image}}" data-name="{{$pro->productname}}" data-link="{{url('/')}}/product/detail/{{$pro->url_segment}}" data-price="Mulai {{FormatRupiahFront($pro->priceMin)}} - {{FormatRupiahFront($pro->priceMax)}}" style="cursor: pointer;" class="add-cart brk-bg-color"><i class="fas fa-shopping-cart brk-white-font-color"></i></a>
															<a href="{{url('/')}}/product/detail/{{$pro->url_segment}}" class="add-wishlist brk-bg-color"><i class="fal fa-folder-open brk-white-font-color"></i></a>
															<a href="https://api.whatsapp.com/send?phone={{hp($data->whatsapp)}}&text=*Halo%2C%20{{config('app.name')}}%20%F0%9F%91%8B*%0ASaya%20ingin%20order%20produk%20ini%20:%20%0A%0A{{$pro->productname}}%20%0A{{url('/')}}/product/detail/{{$pro->url_segment}}" class="add-compare brk-bg-color"><i class="fab fa-whatsapp brk-white-font-color"></i></a>
														</div>
													</div>
													</div>
													@endif
												</div>
												</div>
											@endforeach
											</div>
										</div>
										</div>
											</section>
									<div class="col-12 mt-20" align="center">
										<a href="{{url('/')}}/product/search" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__family-open-sans font__size-16 font__weight-bold text-uppercase brk-library-rendered rendered" data-brk-library="component__button">
										<span class="before">Lihat Semua Produk</span><span class="text" style="min-width: 86.2344px;">Click Me</span><span class="after">Lihat Semua Produk</span>
										</a>
									</div>
								</main>
								</div>

								@endif

							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

@endsection

@section('extra_script')
<script type="text/javascript">
  if (WURFL.is_mobile === true && WURFL.form_factor === "Tablet") {
    $("#topBar").css("margin-top", "80px");
  }

  if (WURFL.is_mobile === true && WURFL.form_factor === "Smartphone") {
    $("#topBar").css("margin-top", "21%");
  }

  if (WURFL.form_factor === "Desktop") {
    $("#topBar").css("margin-top", "120px");
  }

  function openDetail(elm) {
    let link = $(elm).data("url_segment");

    window.location.href = "{{url('/')}}/product/detail/"+link;
  }
</script>
@endsection
