<a href="#top" id="toTop"></a>

	<!-- plugins:js -->
	<script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
	<!-- Mainly scripts -->
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery-1.12.3.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{asset('assets/js/vendor/berserk.js')}}"></script>
	<script src="{{asset('assets/js/vendor/scripts.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/vendor/isotope/js/isotope.pkgd.min.js')}}"></script>
	<script defer="defer" src="{{asset('assets/js/components/shop-components-grid-filter.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easy-autocomplete.js')}}"></script>
	<script src="//wurfl.io/wurfl.js" crossorigin></script>
	<script>
		var baseUrl = '{{ url('/') }}';
		var revapi18,
			tpj;
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
			else onLoad();

			function onLoad() {
				if (tpj === undefined) {
					tpj = jQuery;
					if ("on" == "on") tpj.noConflict();
				}
				if (tpj("#rev_slider_18_1").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider_18_1");
				} else {
					revapi18 = tpj("#rev_slider_18_1").show().revolution({
						sliderType: "standard",
						jsFileLocation: "{{asset('assets/js/vendor/revslider/js/')}}",
						sliderLayout: "fullscreen",
						dottedOverlay: "none",
						delay: 5000,
						navigation: {
							keyboardNavigation: "off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation: "off",
							mouseScrollReverse: "default",
							onHoverStop: "off",
							arrows: {
								style: "custom",
								enable: true,
								hide_onmobile: false,
								hide_onleave: true,
								hide_delay: 200,
								hide_delay_mobile: 1200,
								tmp: '',
								left: {
									h_align: "left",
									v_align: "center",
									h_offset: 10,
									v_offset: 0
								},
								right: {
									h_align: "right",
									v_align: "center",
									h_offset: 10,
									v_offset: 0
								}
							}
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1200, 992, 768, 576],
						gridheight: [960, 768, 960, 720],
						lazyType: "none",
						parallax: {
							type: "mouse",
							origo: "enterpoint",
							speed: 400,
							speedbg: 0,
							speedls: 0,
							levels: [4, 6, 8, 10, 12, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
							disable_onmobile: "on"
						},
						shadow: 0,
						spinner: "spinner2",
						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,
						shuffle: "off",
						autoHeight: "off",
						fullScreenAutoWidth: "off",
						fullScreenAlignForce: "off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "30%",
						disableProgressBar: "on",
						hideThumbsOnMobile: "on",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							nextSlideOnWindowFocus: "off",
							disableFocusListener: false,
						}
					});
				}; /* END OF revapi call */
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */

		var options = {
		url: baseUrl + "/product/searchWord",

		getValue: "name",

	  cssClasses: "sheroes",

	  template: {
	    type: "iconLeft",
	    fields: {
	      iconSrc: "image"
	    }
	  },

		list: {
			match: {
				enabled: true
			},
			maxNumberOfElements: 6,

			showAnimation: {
				type: "slide",
				time: 300
			},
			hideAnimation: {
				type: "slide",
				time: 300
			},
			onClickEvent: function() {
				var selectedItemValue = $("#searchBox").getSelectedItemData().url_segment;

				$("#searchBox").val("");
				window.location.href = "{{url('/')}}" + "/produk/" + selectedItemValue;
			}
		},

		requestDelay: 300,

		theme: "round"

	};

	$("#searchBox").easyAutocomplete(options);

	$('#Btn').click(function(){
	let products = [];

		if(localStorage.getItem('products')){
			products = JSON.parse(localStorage.getItem('products'));
		}

		products.push({'productId' : 3, image : '<imageLink>'});

	  localStorage.setItem('products', JSON.stringify(products));
	});

	calculateCart()

	function addCart(elm) {
			let productid = $(elm).data("id");
			let name = $(elm).data("name");
			let image = $(elm).data("image");
			let link = $(elm).data("link");
			let price = $(elm).data("price");
			let products = [];

			if(localStorage.getItem('products')){
				products = JSON.parse(localStorage.getItem('products'));
			}

			// add to it, only if it's empty
			var item = products.find(item => item.productId === productid);

			if (item) {
				item.quantity += 1;
			} else {
				products.push({'productId' : productid, 'image' : image, 'quantity': 1, 'name': name, 'link': link, 'price': price});
			}

		  localStorage.setItem('products', JSON.stringify(products));

			calculateCart()
	}

	function removeCart(id) {
		let productId = id;
		let storageProducts = JSON.parse(localStorage.getItem('products'));
	  let products = storageProducts.filter(product => product.productId !== productId );
	  localStorage.setItem('products', JSON.stringify(products));

		calculateCart()
	}

	function calculateCart() {
		let cart = JSON.parse(localStorage.getItem('products'));

		if(localStorage.getItem('products')){
			if (cart.length == 0) {
				$("#checkoutCart").css("display", 'none');
			} else {
				$("#checkoutCart").css("display", '');
			}

			$("#countCart").text(cart.length);

			renderCart()
		}
	}

	function renderCart() {
		var html = '';

		let storageProducts = JSON.parse(localStorage.getItem('products'));

		if (storageProducts.length == 0) {
			html = '<span class=font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate"> Cart kosong, silahkan tambah produk ke cart terlebih dahulu! </span>';
		} else {
			for (var i = 0; i < storageProducts.length; i++) {
				let product = storageProducts[i];

				html += '<div class="brk-mini-cart__product">'+
								'<div class="brk-mini-cart__product--img">'+
									'<img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="'+product.image+'" alt="Product Image">'+
								'</div>'+
								'<div class="brk-mini-cart__product--title-price">'+
									'<a href="'+product.link+'">'+
										'<h4 class="font__family-montserrat font__size-16 line__height-21 font__weight-semibold text-truncate">'+product.name+'</h4>'+
									'</a>'+
									'<span class="brk-mini-cart__product--price font__family-montserrat">'+product.price+'</span>'+
								'</div>'+
								'<div class="brk-quantity">'+
									'<span class="brk-quantity__arrows minus" onclick="minusQuantityCart('+product.productId+')"></span>'+
									'<input class="brk-quantity__value" name="quantity" id="qty'+product.productId+'" onkeyup="changeQuantityCart('+product.productId+')" type="text" value="'+product.quantity+'">'+
									'<span class="brk-quantity__arrows plus" onclick="plusQuantityCart('+product.productId+')"></span>'+
								'</div>'+
								'<a onclick="removeCart('+product.productId+')" class="brk-mini-cart__product--remove remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>'+
							'</div>';
			}
		}

		$("#showCartProduct").html(html);
	}

	function changeQuantityCart(id) {
		let products = [];

		if(localStorage.getItem('products')){
			products = JSON.parse(localStorage.getItem('products'));
		}

		var item = products.find(item => item.productId === id);

		if (item) {
			item.quantity = parseInt($("#qty"+id).val());
		}

		localStorage.setItem('products', JSON.stringify(products));
	}

	function plusQuantityCart(id) {
		let products = [];

		if(localStorage.getItem('products')){
			products = JSON.parse(localStorage.getItem('products'));
		}

		var item = products.find(item => item.productId === id);

		if (item) {
			item.quantity += 1;
		}

		localStorage.setItem('products', JSON.stringify(products));
	}

	function minusQuantityCart(id) {
		let products = [];

		if(localStorage.getItem('products')){
			products = JSON.parse(localStorage.getItem('products'));
		}

		var item = products.find(item => item.productId === id);

		if (item) {
			if((item.quantity - 1) == 0) {
				item.quantity = 1;
			} else {
				item.quantity -= 1;
			}
		}

		localStorage.setItem('products', JSON.stringify(products));
	}

	function redirectCartWA() {
		var link = "https://api.whatsapp.com/send?phone={{hp($data->whatsapp)}}&text=";
		var string = "*Halo%2C%20Purbengkara%20%F0%9F%91%8B*%0ASaya%20ingin%20order%20produk%20ini%20%3A%20";

		let products = [];

		if(localStorage.getItem('products')){
			products = JSON.parse(localStorage.getItem('products'));
		}

		for (var i = 0; i < products.length; i++) {
			string += "%20%0A%20%0A" + (i+1) + ". " + products[i].name + " - " + products[i].quantity + " pcs %20%0A" + products[i].price + "%20%0A" + products[i].link;
		}

		link += string;

		window.open(link,'_blank');
	}

	</script>
