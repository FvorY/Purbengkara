<head>

    <!-- Title -->
    @if(isset($customTitle))
      <title>{{$customTitle}}</title>
    @elseif(isset($data->seo_title))
      <title>{{$data->seo_title}}</title>
    @else
      <title>{{config('app.name')}}</title>
    @endif
    <meta property="og:title" content="{{$data->seo_title}}" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4aa6e8" />

    <meta name="keywords" content="{{$data->seo_keyword}}" />

    <meta name="description" content="{{$data->seo_description}}"/>
    <meta property="og:description" content="{{$data->seo_description}}" />

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="id-ID" />
    <meta http-equiv="Cache-control" content="public">
    <meta name="mobile-web-app-capable" content="yes">

    @if(isset($customImage))
    <link rel="apple-touch-icon" href="{{url('/')}}/{{$customImage}}">
    <link rel="android-touch-icon" href="{{url('/')}}/{{$customImage}}" />
    <link rel="windows-touch-icon" href="{{url('/')}}/{{$customImage}}" />
    <meta property="og:image" itemprop="image" content="{{url('/')}}/{{$customImage}}"/>
    <!-- For Facebook -->
    <meta property="og:image" content="{{url('/')}}/{{url('/')}}/{{$customImage}}" />

    <!-- For Twitter -->
    <meta name="twitter:image" content="{{url('/')}}/{{url('/')}}/{{$customImage}}" />
    @else
    <link rel="apple-touch-icon" href="{{url('/')}}/image/icon.png">
    <link rel="android-touch-icon" href="{{url('/')}}/image/icon.png" />
    <link rel="windows-touch-icon" href="{{url('/')}}/image/icon.png" />
    <meta property="og:image" itemprop="image" content="{{url('/')}}/image/icon.png"/>
    <!-- For Facebook -->
    <meta property="og:image" content="{{url('/')}}/image/icon.png" />

    <!-- For Twitter -->
    <meta name="twitter:image" content="{{url('/')}}/image/icon.png" />
    @endif

    <meta name="author" content="{{config('app.name')}}">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="{{url()->current()}}" />

    <meta property="og:locale" content="id-ID" />
    <meta property="og:type" content="website" />

    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:site_name" content="{{config('app.name')}}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/image/icon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="//db.onlinewebfonts.com/c/0e979bd4a3c1c6ac788ed57ac569667f?family=revicons" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" id="brk-skin-color" href="{{asset('assets/css/skins/brk-green-1.css')}}">

  	<link id="brk-base-color" rel="stylesheet" href="{{asset('assets/css/skins/brk-base-color.css')}}">

  	<link rel="stylesheet" id="brk-direction-offsets" href="{{asset('assets/css/offsets.css')}}">

  	<link id="brk-css-min" rel="stylesheet" href="{{asset('assets/css/style_front.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/services.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/widgets.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/elements.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/buttons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/shop-components-cards.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/shop-components-grid-filter.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/tags.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/social-links.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/footer.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/easy-autocomplete.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/easy-autocomplete.themes.css')}}">

    <style> #rev_slider_18_1_wrapper .tp-loader.spinner2{ background-color: #0071fc !important; } </style>
  	<style>.brk-castom-btn.rev-btn.rev-withicon i{margin-left:0 !important; margin-right:10px !important; vertical-align:0; top:-1px}.brk-castom-btn-1.rev-btn.rev-withicon i{vertical-align:2px}</style>
  	<style>.custom.tparrows{cursor:pointer;background:#000;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;}.custom.tparrows:hover{background:#000}.custom.tparrows:before{font-family:"revicons";font-size:15px;color:#fff;display:block;line-height:40px;text-align:center}.custom.tparrows.tp-leftarrow:before{content:"\e824"}.custom.tparrows.tp-rightarrow:before{content:"\e825"}</style>

    <style media="screen">
      .brk-header {
        background-color: white !important;
      }

      .ui-autocomplete {
          position: fixed;
          z-index: 99999;
          border-radius: 18px;
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 10px;
          padding-right: 10px;
          border: 0px;
          max-height: 300px;
          overflow-y: scroll;
          overflow-x: none;
      }

      .ui-menu .ui-menu-item a{
        height: 30px;
      }

      #catcher {
        text-align: left;
        color: #111;
        top: 105%;
        -webkit-box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
        left: 0;
        right: 0;
        background-color: rgba(255,255,255,0.95);
        position: absolute;
        list-style: none;
        z-index: 99999;
        border-radius: 18px;
        max-height: 300px;
        overflow-y: scroll;
        overflow-x: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        padding-right: 10px;
      }

      /* style slide image

      /* begin external css: flickity.css
      /*! Flickity v2.0.4
      * https://npmcdn.com/flickity@2/dist/flickity.css
      https://flickity.metafizzy.co
      ---------------------------------------------- */

      .flickity-enabled {
        position: relative;
      }

      .flickity-enabled:focus { outline: none; }

      .flickity-viewport {
        overflow: hidden;
        position: relative;
        height: 100%;
      }

      .flickity-slider {
        position: absolute;
        width: 100%;
        height: 100%;
      }

      /* draggable */

      .flickity-enabled.is-draggable {
        -webkit-tap-highlight-color: transparent;
                tap-highlight-color: transparent;
        -webkit-user-select: none;
          -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
      }

      .flickity-enabled.is-draggable .flickity-viewport {
        cursor: move;
        cursor: -webkit-grab;
        cursor: grab;
      }

      .flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
        cursor: -webkit-grabbing;
        cursor: grabbing;
      }

      /* ---- previous/next buttons ---- */

      .flickity-prev-next-button {
        position: absolute;
        top: 50%;
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        background: white;
        background: hsla(0, 0%, 100%, 0.75);
        cursor: pointer;
        /* vertically center */
        -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
      }

      .flickity-prev-next-button:hover { background: white; }

      .flickity-prev-next-button:focus {
        outline: none;
        box-shadow: 0 0 0 5px #09F;
      }

      .flickity-prev-next-button:active {
        opacity: 0.6;
      }

      .flickity-prev-next-button.previous { left: 10px; }
      .flickity-prev-next-button.next { right: 10px; }
      /* right to left */ */
      /* .flickity-rtl .flickity-prev-next-button.previous { */
      /*   left: auto; */
      /*   right: 10px; */
      /* } */
      /* .flickity-rtl .flickity-prev-next-button.next { */
      /*   right: auto; */
      /*   left: 10px; */
      /* } */

      .flickity-prev-next-button:disabled {
        opacity: 0.3;
        cursor: auto;
      }

      .flickity-prev-next-button svg {
        position: absolute;
        left: 20%;
        top: 20%;
        width: 60%;
        height: 60%;
      }

      .flickity-prev-next-button .arrow {
        fill: #333;
      }

      /* ---- page dots ---- */

      /* .flickity-page-dots { */
      /*   position: absolute; */
      /*   width: 100%; */
      /*   bottom: -25px; */
      /*   padding: 0; */
      /*   margin: 0; */
      /*   list-style: none; */
      /*   text-align: center; */
      /*   line-height: 1; */
      /* } */
      /*  */
      /* .flickity-rtl .flickity-page-dots { direction: rtl; } */
      /*  */
      /* .flickity-page-dots .dot { */
      /*   display: inline-block; */
      /*   width: 10px; */
      /*   height: 10px; */
      /*   margin: 0 8px; */
      /*   background: #333; */
      /*   border-radius: 50%; */
      /*   opacity: 0.25; */
      /*   cursor: pointer; */
      /* } */
      /*  */
      /* .flickity-page-dots .dot.is-selected { */
      /*   opacity: 1; */
      /* } */

      /* end external css: flickity.css */
      /*! Flickity v2.0.4
      https://flickity.metafizzy.co
      ---------------------------------------------- */

      * { box-sizing: border-box; }

      body { font-family: sans-serif; }

      .carousel {
        background: #FAFAFA;
      }

      .carousel-main {
        margin-bottom: 8px;
      }

      .carousel-cell {
        width: 100%;
        height: 504px;
        margin-right: 8px;
        background: #ffffff;
        border-radius: 5px;
        /* counter-increment: carousel-cell; */
      }

      /* cell number */
      /* .carousel-cell:before { */
      /*   display: block; */
      /*   text-align: center; */
      /*   content: counter(carousel-cell); */
      /*   line-height: 200px; */
      /*   font-size: 80px; */
      /*   color: white; */
      /* } */

      .carousel-nav .carousel-cell {
        height: 90px;
        width: 120px;
      }

      /* .carousel-nav .carousel-cell:before { */
      /*   font-size: 50px; */
      /*   line-height: 80px; */
      /* } */

      /* .carousel-nav .carousel-cell.is-nav-selected { */
      /*   background: #ED2; */
      /* } */

      /* Atelierbram edit */
      .carousel-main img {
        display: block;
        margin: 0 auto;
        width: 100%;
        height: 504px;
      }

      .container-slideimage {
        max-width: 672px;
        margin: 0 auto;
      }

      span {
        text-decoration: blink;
      }

    </style>


    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=633e3d459fffcd001962e85f&product=inline-share-buttons" async="async"></script>
    <script type="text/javascript" src="https://npmcdn.com/flickity@2.3.0/dist/flickity.pkgd.js" async="async"></script>
  </head>
