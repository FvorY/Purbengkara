<div class="brk-header-mobile">
  <div class="brk-header-mobile__open">
    <span></span>
  </div>
  <div class="brk-header-mobile__logo" style="margin-left: 20px;">
    <a href="{{url('/')}}">
      <img class="brk-header-mobile__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px; object-fit : contain">
      <img class="brk-header-mobile__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{url('/')}}/{{$data->logo_website}}" alt="Purbengkara Logo" style="height: 50px; object-fit : contain">
    </a>
  </div>
</div>
<header class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark position-fixed" style="display: none; object-fit : contain" data-logo-src="{{url('/')}}/{{$data->logo_website}}" data-bg-mobile="" data-brk-library="component__header">
  <div class="brk-header__top-bar order-lg-1 order-2 font__family-montserrat brk-header__top-bar_scroll" style="height: 46px;">
    <div class="brk-header__title font__family-montserrat font__weight-bold">Contact Us</div>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 align-self-lg-stretch text-left">
          <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
            <a href="tel:{{$data->telepon}}" class="brk-header__element--wrap">
              <i class="fa fa-phone"></i>
              <span class="brk-header__element--label font__weight-semibold">{{$data->telepon}}</span>
            </a>
          </div>
          <div class="brk-header__element brk-header__element_skin-2 brk-header__item">
            <a href="mailto:{{$data->email}}" class="brk-header__element--wrap">
              <i class="fa fa-envelope"></i>
              <span class="brk-header__element--label font__weight-medium">{{$data->email}}</span>
            </a>
          </div>
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
        <div class="col-lg-3 align-self-lg-stretch text-lg-right">
          <div class="brk-header__title font__family-montserrat font__weight-bold">Info</div>
          <div class="brk-search brk-header__item">
            <div class="brk-search__open">
              <i class="fal fa-search" aria-hidden="true"></i>
              <div class="brk-search__title">Search website</div>
            </div>
            <div class="brk-search__block">
              <div class="brk-search__header">
                <span class="font__family-montserrat font__weight-bold font__size-18">Search</span>
              </div>
              <form class="brk-search__form" role="search" method="get" action="#">
                <input name="s" maxlength="50" type="search" value="" placeholder="Enter search text">
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
              <span class="brk-search__close font__family-montserrat font__weight-medium">Close <i class="fas fa-times"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="brk-info-menu">
    <div class="brk-info-menu__bar">
      <button class="brk-info-menu__close"></button>
      <h3 class="brk-info-menu__header font__family-montserrat font__weight-bold font__size-21">More info</h3>
      <div class="brk-categories mb-20" data-brk-library="component__widgets">
        <div class="brk-categories__list font__family-open-sans font__size-14 font__weight-normal">
          <a href="#" class="brk-categories__item">
            <span class="brk-categories__item-name">General</span>
            <span class="brk-categories__item-count">12</span>
          </a>
          <a href="#" class="brk-categories__item active">
            <span class="brk-categories__item-name">Mockups</span>
            <span class="brk-categories__item-count">14</span>
          </a>
          <a href="#" class="brk-categories__item">
            <span class="brk-categories__item-name">HTML & CSS</span>
            <span class="brk-categories__item-count">18</span>
          </a>
          <a href="#" class="brk-categories__item">
            <span class="brk-categories__item-name">Logo</span>
            <span class="brk-categories__item-count">21</span>
          </a>
          <a href="#" class="brk-categories__item">
            <span class="brk-categories__item-name">Web Design</span>
            <span class="brk-categories__item-count">6</span>
          </a>
        </div>
      </div>
      <h3 class="brk-info-menu__header font__family-montserrat font__weight-bold font__size-21">Our instagram</h3>
      <div class="default-slider dots-base-skin dots-base-color slick-loading mt-15" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true, "autoplay": false, "autoplaySpeed": 4000}' data-brk-library="slider__slick">
        <div>
          <div class="brk-header-slider">
            <div class="brk-header-slider__img">
              <img src="img/309x206_1.jpg" alt="alt">
            </div>
            <div class="brk-header-slider__content">
              <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/head-icon.png" alt="alt">
              <div class="brk-header-slider__content--title">
                <h4 class="font__family-montserrat font__weight-bold font__size-16">@berserk</h4>
                <span class="font__size-14">17 Hours ago</span>
              </div>
            </div>
            <p class="brk-header-slider__text font__size-14 line__height-21">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem
              ante, dapibus in, viverra</p>
          </div>
        </div>
        <div>
          <div class="brk-header-slider">
            <div class="brk-header-slider__img">
              <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/309x206_2.jpg" alt="alt">
            </div>
            <div class="brk-header-slider__content">
              <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/head-icon.png" alt="alt">
              <div class="brk-header-slider__content--title">
                <h4 class="font__family-montserrat font__weight-bold font__size-16">@berserk</h4>
                <span class="font__size-14">17 Hours ago</span>
              </div>
            </div>
            <p class="brk-header-slider__text font__size-14 line__height-21">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem
              ante, dapibus in, viverra</p>
          </div>
        </div>
        <div>
          <div class="brk-header-slider">
            <div class="brk-header-slider__img">
              <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/309x206_3.jpg" alt="alt">
            </div>
            <div class="brk-header-slider__content">
              <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/head-icon.png" alt="alt">
              <div class="brk-header-slider__content--title">
                <h4 class="font__family-montserrat font__weight-bold font__size-16">@berserk</h4>
                <span class="font__size-14">17 Hours ago</span>
              </div>
            </div>
            <p class="brk-header-slider__text font__size-14 line__height-21">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem
              ante, dapibus in, viverra</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
