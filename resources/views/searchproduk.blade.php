@extends('front')

@section('content')

<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-brk-library="component__breadcrumbs_css" id="topBar">
  <span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
  <div class="breadcrumbs__wrapper">
    <div class="container">
      <div class="row align-items-center" style="text-align: center;">
        <div class="col-12 col-lg-12">
          <div class="justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
            <h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
              Produk Kami
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main-wrapper">
  <main class="main-container">
    <div class="container mt-15">
      <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
          <div class="brk-border-btw-sidebar_right">
            <div class="brk-sc-sorting" data-brk-library="component__widgets,jquerySlider,component__form">
              <span class="brk-dark-font-color brk-sc-sorting__label font__family-open-sans font__size-14 font__weight-normal line__height-14 mr-15">Sort by</span>
              <div class="brk-sc-sorting__sort-select d-inline brk-form-round mr-20">
                <select name="select" onchange="javascript:handleSort(this)">
                  <option value="terbaru" @if(isset($sort)) @if($sort == "terbaru") selected @endif @endif>Terbaru </option>
                  <option value="termurah" @if(isset($sort)) @if($sort == "termurah") selected @endif @endif>Termurah </option>
                  <option value="termahal" @if(isset($sort)) @if($sort == "termahal") selected @endif @endif>Termahal </option>
                  <option value="a-z" @if(isset($sort)) @if($sort == "a-z") selected @endif @endif>A - Z </option>
                  <option value="z-a" @if(isset($sort)) @if($sort == "z-a") selected @endif @endif>Z - A </option>
                </select>
              </div>
              <span class="brk-dark-font-color brk-sc-sorting__label font__family-open-sans font__size-14 font__weight-normal line__height-14 mr-15">Show</span>
              <div class="brk-sc-sorting__show-count d-inline brk-form-round mr-30">
                <select name="select1" onchange="javascript:handleShow(this)">
                  <option value="10" @if(isset($show)) @if($show == "10") selected @endif @endif>10</option>
                  <option value="40" @if(isset($show)) @if($show == "40") selected @endif @endif>40</option>
                  <option value="all" @if(isset($all)) @if($all == true) selected @endif @endif>All</option>
                </select>
              </div>
            </div>
            <div class="row">
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
                        <a href="{{url('/')}}/product/detail/{{$pro->url_segment}}">
                          <div class="pt-lg-30 pb-lg-30 pt-sm-20 pb-sm-20 pt-xs-40 pb-xs-40 pt-20 pb-20 position-relative z-index-5" onclick="openDetail(this)" data-url_segment="{{$pro->url_segment}}" style="cursor: pointer;">
                            <h4 class="font__family-montserrat font__weight-bold font__size-18 line__height-24">
                              {{$pro->specialname}}
                            </h4>
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
                        </a>
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
        <div class="col-12 col-lg-4 col-xl-3 order-xs-1 order-lg-2">
          <div class="brs-sidebar brs-sidebar_right" data-brk-library="component__widgets">
            <div class="brs-sidebar__title">
              <h3 class="font__family-montserrat font__size-21 font__weight-bold line__height-22">Ketegori</h3>
            </div>
            <div class="brk-categories mb-20" data-brk-library="component__widgets">
              <div class="brk-categories__list font__family-open-sans font__size-14 font__weight-normal">
                @foreach($category as $kategori)
                <a href="{{url('/')}}/product/search?sort={{$sort}}&show={{$show}}&category={{$kategori->id_category}}" class="brk-categories__item">
                  <span class="brk-categories__item-name">{{$kategori->name}}</span>
                  <span class="brk-categories__item-count">{{$kategori->count}}</span>
                </a>
                @endforeach
              </div>
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
  function handleSort(elm)
  {
     window.location.href = "{{url('/')}}/product/search?sort="+elm.value+"&show={{$show}}&category={{$categoryFilter}}";
  }

  function handleShow(elm)
  {
     window.location.href = "{{url('/')}}/product/search?sort={{$sort}}&show="+elm.value+"&category={{$categoryFilter}}";
  }

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

    window.location.href = "{{url('/')}}/produk/"+link;
  }
</script>
@endsection
