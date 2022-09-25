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
              Cara Order
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-wrapper">
  <main class="main-container">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="font__family-open-sans font__weight-semibold font__size-19 line__height-24 brk-dark-font-color mt-20">{!! nl2br($data->cara_order) !!}</p>
            <br>
          </div>
        </div>
      </div>
    </section>
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

    window.location.href = "{{url('/')}}/produk/"+link;
  }
</script>
@endsection
