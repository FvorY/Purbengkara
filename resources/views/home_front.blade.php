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
  var isMobile = false; //initiate as false
  // device detection
  if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
  }

  if(isMobile) {
    $("#rev_slider_18_1_wrapper").css("margin-top", "21%");
  } else {
    $("#rev_slider_18_1_wrapper").css("margin-top", "120px");
  }
</script>
@endsection
