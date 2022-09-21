<div class="brk-header-mobile" style="background-color: white !important;">
  <div class="brk-header-mobile__open">
    <span></span>
  </div>
  <div class="brk-header-mobile__logo" style="margin-left: 5%; margin-right: 5%;">
    <a href="{{url('/')}}">
      <img class="brk-header-mobile__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px; object-fit : contain">
      <img class="brk-header-mobile__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px; object-fit : contain">
    </a>
  </div>
</div>
<header style="background-color: white !important;" class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark position-fixed" style="display: none; object-fit : contain" data-logo-src="{{url('/')}}/{{$data->logo_website}}" data-bg-mobile="" data-brk-library="component__header">
  <div class="brk-header__top-bar order-lg-1 order-2 font__family-montserrat brk-header__top-bar_scroll" style="height: 46px;">
    <div class="brk-header__title font__family-montserrat font__weight-bold">Contact Us</div>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 align-self-lg-stretch text-left">
          @if($data->telepon != null)
          <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
            <a href="tel:{{$data->telepon}}" class="brk-header__element--wrap">
              <i class="fa fa-phone"></i>
              <span class="brk-header__element--label font__weight-semibold">{{$data->telepon}}</span>
            </a>
          </div>
          @endif
          @if($data->email != null)
          <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
            <a href="mailto:{{$data->email}}" class="brk-header__element--wrap">
              <i class="fa fa-envelope"></i>
              <span class="brk-header__element--label font__weight-medium">{{$data->email}}</span>
            </a>
          </div>
          @endif
        </div>
        <div class="col-lg-6 align-self-lg-stretch text-left text-lg-right">
          <div class="brk-mini-cart brk-header__item brk-header__element_skin-2">
            <a href="cart.html" class="brk-mini-cart__open d-flex">
              <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              <span class="brk-mini-cart__label font__family-montserrat font__weight-medium text-uppercase letter-spacing-60 font__size-10 opacity-80">My cart</span>
              <span class="brk-mini-cart__title">Shopping Cart</span>
              <span class="brk-mini-cart__count brk-mini-cart__count_skin-1 brk-mini-cart__count_white">4</span>
            </a>
            <div class="brk-mini-cart__menu">
              <div class="brk-mini-cart__header">
                <span class="font__family-montserrat font__weight-bold font__size-18">Your Cart</span>
              </div>
              <div class="brk-mini-cart__products">
                <div class="brk-mini-cart__product">
                  <div class="brk-mini-cart__product--img">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop/shop-setout-2.png" alt="alt">
                  </div>
                  <div class="brk-mini-cart__product--title-price">
                    <a href="#">
                      <h4 class="font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate">Some shop item</h4>
                    </a>
                    <span class="brk-mini-cart__product--old-price font__family-montserrat">$26.00</span>
                    <span class="brk-mini-cart__product--price font__family-montserrat">$16.00</span>
                  </div>
                  <div class="brk-quantity">
                    <span class="brk-quantity__arrows minus"></span>
                    <input class="brk-quantity__value" name="quantity" type="text" value="2">
                    <span class="brk-quantity__arrows plus"></span>
                  </div>
                  <a href="#" class="brk-mini-cart__product--remove remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <div class="brk-mini-cart__product">
                  <div class="brk-mini-cart__product--img">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop/shop-setout-2.png" alt="alt">
                  </div>
                  <div class="brk-mini-cart__product--title-price">
                    <a href="#">
                      <h4 class="font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate">Some shop item</h4>
                    </a>
                    <span class="brk-mini-cart__product--old-price font__family-montserrat">$26.00</span>
                    <span class="brk-mini-cart__product--price font__family-montserrat">$16.00</span>
                  </div>
                  <div class="brk-quantity">
                    <span class="brk-quantity__arrows minus"></span>
                    <input class="brk-quantity__value" name="quantity" type="text" value="2">
                    <span class="brk-quantity__arrows plus"></span>
                  </div>
                  <a href="#" class="brk-mini-cart__product--remove remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <div class="brk-mini-cart__product">
                  <div class="brk-mini-cart__product--img">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop/shop-setout-2.png" alt="alt">
                  </div>
                  <div class="brk-mini-cart__product--title-price">
                    <a href="#">
                      <h4 class="font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate">Some shop item</h4>
                    </a>
                    <span class="brk-mini-cart__product--old-price font__family-montserrat">$26.00</span>
                    <span class="brk-mini-cart__product--price font__family-montserrat">$16.00</span>
                  </div>
                  <div class="brk-quantity">
                    <span class="brk-quantity__arrows minus"></span>
                    <input class="brk-quantity__value" name="quantity" type="text" value="2">
                    <span class="brk-quantity__arrows plus"></span>
                  </div>
                  <a href="#" class="brk-mini-cart__product--remove remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <div class="brk-mini-cart__product">
                  <div class="brk-mini-cart__product--img">
                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/shop/shop-setout-2.png" alt="alt">
                  </div>
                  <div class="brk-mini-cart__product--title-price">
                    <a href="#">
                      <h4 class="font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate">Some shop item</h4>
                    </a>
                    <span class="brk-mini-cart__product--old-price font__family-montserrat">$26.00</span>
                    <span class="brk-mini-cart__product--price font__family-montserrat">$16.00</span>
                  </div>
                  <div class="brk-quantity">
                    <span class="brk-quantity__arrows minus"></span>
                    <input class="brk-quantity__value" name="quantity" type="text" value="2">
                    <span class="brk-quantity__arrows plus"></span>
                  </div>
                  <a href="#" class="brk-mini-cart__product--remove remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="brk-mini-cart__links">
                <div class="brk-mini-cart__links--wrap">
                  <a class="brk-mini-cart__links--cart" href="cart.html"><i class="fa fa-shopping-basket"></i></a>
                  <a class="brk-mini-cart__links--checkout" href="checkout.html">Proceed to checkout <i class="far fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="brk-header__main-bar brk-header_border-top-dark order-lg-2 order-1" style="height: 72px;">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-3 align-self-lg-center d-none d-lg-flex ml-10" style="display:flex;flex-direction: row;align-items:center;">
          <div class="brk-open-top-bar brk-header__item">
            <div class="brk-open-top-bar__circle"></div>
            <div class="brk-open-top-bar__circle"></div>
            <div class="brk-open-top-bar__circle"></div>
          </div>
          <a href="/" class="brk-header__logo brk-header__item @@modifier">
            <img class="brk-header__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px;object-fit:contain;">
            <img class="brk-header__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px;object-fit:contain;">
          </a>
        </div>
        <div class="col-lg align-self-lg-stretch text-lg-center">
          <nav class="brk-nav brk-header__item">
            <ul class="brk-nav__menu">
              @foreach ($category as $cat)
              <li class="brk-nav__children brk-nav__drop-down-effect">
                <a href="#">
                  <span>{{$cat->name}}</span>
                </a>
                <?php $product = DB::table("product")->where("categoryid", $cat->id_category)->get()->toArray(); ?>
                @if(count($product) != 0)
                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                  @foreach ($product as $pro)
                  <li class="dd-effect">
                    <a href="{{url('/')}}/product/{{$pro->url_segment}}">{{$pro->name}}</a>
                  </li>
                  @endforeach
                </ul>
                @endif
              </li>
              @endforeach
            </ul>
          </nav>
        </div>
        <div class="col-lg-3 align-self-lg-stretch text-lg-right mt-15" style="margin-left: 20px; margin-right: 20px;">
          <form class="brk-search__form" role="search" method="get" action="#">
            <input class="font__family-open-sans" style="border: 1px solid #4aa6e8; border-radius: 20px; height: 40px" name="s" maxlength="50" type="search" id="searchBox" value="" placeholder="Cari Produk . . .">
            <button type="submit"><i class="fas fa-search"></i></button>
            <div id="catcher"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</header>
