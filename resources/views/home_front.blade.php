@extends('front')

@section('content')

@if($slideimage != null)
  <div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="berserk_shop_slide_2" data-source="gallery" style="background:transparent;padding:0px;margin-top:21%;">
    <div id="rev_slider_18_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
      <ul>
        @foreach ($slideimage as $sld)
        <li data-index="rs-77" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1400" data-thumb="img/demo_shop_video/images/transparent.png" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <img src="{{url('/')}}/{{$sld->image}}" data-bgcolor="#f6f7f7" style="background:#f6f7f7" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
        </li>
        @endforeach
      </ul>
      <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
  </div>
@endif

@if($featured != null)
<div class="main-wrapper" id="fitur">
	<main class="main-container pb-70">
		<div class="mt-100">
			<div class="container mb-30">
				<h3 class="font__family-montserrat font__size-28 font__weight-bold text-center">Mengapa Memilih Kami?</h3>
			</div>
			<div class="container">
				<div class="row">
          @foreach ($featured as $feature)
					<div class="col-lg-3">
						<div class="services-architecture">
							<div class="services-architecture__icon">
								<!-- <i class="fas fa-car"></i> -->
                <img src="{{url('/')}}/{{$feature->icon}}" alt="{{$feature->name}}" width="68" height="68">
							</div>
							<div class="services-architecture__container">
								<h4 class="font__size-21 line__height-24 text-uppercase font__weight-bold pb-10">{{$feature->name}}</h4>
								<span class="font__size-14 line__height-24 brk-dark-blur-font-color">{{$feature->description}}</span>
							</div>
						</div>
					</div>
          @endforeach
				</div>
			</div>
		</div>
	</main>
</div>
@endif

@if($product != null)
<div class="main-wrapper" id="produk">
	<main class="main-container pb-70">
    <section>
				<div class="container mb-30">
					<div class="text-center">
						<h3 class="font__family-montserrat font__size-28 font__weight-bold">
							Produk Kami
						</h3>
					</div>
				</div>
        <div class="container">
          <div class="brk-shop-grid-filter">
            <ul class="brk-shop-grid-filter__button brk-shop-grid-filter__button_style-1">
              <li class="checked" data-filter="*">
                <div class="brk-shop-grid-filter__button-text">
                  <i class="fal fa-th"></i>
                  All
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
              </li>
              @foreach($category as $kategori)
              <li data-filter=".{{preg_replace('/\s+/', '', strtolower($kategori->name))}}">
                <div class="brk-shop-grid-filter__button-text">
                  {{$kategori->name}}
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
              </li>
              @endforeach
            </ul>
            <div class="brk-shop-grid-filter__items row">
              @foreach($product as $pro)
              <div class="col-xl-3 col-md-6 brk-shop-grid-filter__item {{preg_replace('/\s+/', '', strtolower($pro->categoryname))}}">
                  <div class="brk-shop-grid-filter-strict">
                    <div class="brk-shop-grid-filter-strict__thumb">
                      @if($pro->image != null)
                      <img src="{{url('/')}}/{{$pro->image}}" alt="{{$pro->name}}">
                      @else
                      <img src="https://cdn-icons-png.flaticon.com/512/4904/4904233.png" alt="Default Image">
                      @endif
                    </div>
                    <div class="brk-shop-grid-filter-strict__inform text-center d-flex flex-column align-content-center justify-content-center">
                      <h4 class="font__family-montserrat font__weight-bold font__size-18">{{$pro->name}}</h4>
                      <div class="price brk-base-font-color font__family-montserrat font__size-15 line__height-22 font__weight-medium">
                        <!-- <span class="old-price brk-dark-font-color">$26.00</span> -->
                        <span class="font__weight-bold">Mulai {{FormatRupiahFront($pro->priceMin)}} - {{FormatRupiahFront($pro->priceMax)}}</span>
                      </div>
                    </div>
                    <!-- <div class="brk-shop-grid-filter-strict__stick brk-white-font-color font__family-montserrat font__weight-bold">New</div> -->
                    <div class="before brk-sc-tiles-split-gradient"></div>
                    <div class="brk-shop-grid-filter-strict__back">
                      <div class="brk-shop-grid-filter-strict__inform text-center d-flex flex-column align-content-center justify-content-center">
                        <h4 class="font__family-montserrat font__weight-bold font__size-18">Some shop item</h4>
                        <div class="price brk-base-font-color font__family-montserrat font__size-15 line__height-22 font__weight-medium">
                          <span class="old-price brk-dark-font-color">$26.00</span>
                          <span class="font__weight-bold">$16.30</span>
                        </div>
                      </div>
                      <div class="brk-shop-grid-filter-strict__list pt-20 pb-20">
                        <ul class="font__size-15 line__height-20 font__weight-light text-left letter-spacing-60">
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Maecenas vestibulum mollis Pellentesque ut neque</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Fellentesque habitant morbi</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Maecenas vestibulum mollis</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Pellentesque ut neque</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Maecenas vestibulum mollis Pellentesque ut neque</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Fellentesque habitant morbi</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Maecenas vestibulum mollis</span></li>
                          <li class="d-flex"><i class="far fa-check brk-blue-light-font-color"></i><span class="letter-spacing-40">Pellentesque ut neque</span></li>
                        </ul>
                      </div>
                      <div class="text-center pt-35">
                        <div class="brk-shop-grid-filter-strict__actions clearfix brk-base-box-shadow-primary">
                            <a href="#" class="add-cart brk-bg-color"><i class="fas fa-shopping-cart brk-white-font-color"></i></a>
                            <a href="#" class="add-wishlist brk-bg-color"><i class="fal fa-folder-open brk-white-font-color"></i></a>
                            <a href="#" class="add-compare brk-bg-color"><i class="fab fa-whatsapp brk-white-font-color"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
			</section>
  </main>


</div>
@endif

@if($data->maps_link != null)
<iframe src="{{$data->maps_link}}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endif

@endsection

@section('extra_script')
<script type="text/javascript">
  if (WURFL.is_mobile === true && WURFL.form_factor === "Tablet") {
    $("#rev_slider_18_1_wrapper").css("margin-top", "80px");
  }

  if (WURFL.is_mobile === true && WURFL.form_factor === "Smartphone") {
    $("#rev_slider_18_1_wrapper").css("margin-top", "21%");
  }

  if (WURFL.form_factor === "Desktop") {
    $("#rev_slider_18_1_wrapper").css("margin-top", "120px");
  }
</script>
@endsection
