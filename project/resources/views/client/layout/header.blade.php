<header id="header" class="header has-sticky sticky-jump">
  <div class="header-wrapper">
 <div id="top-bar" class="header-top hide-for-sticky hide-for-medium">
   <div class="flex-row container">
     <div class="flex-col hide-for-medium flex-left">
         <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
             <li class="html custom html_topbar_left"><p class="mona_html showroom">319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p></li><li class="html custom html_topbar_right"><p class="mona_html hotline"><a href="tel:0769220162">076 922 0162</a></p></li>          </ul>
     </div><!-- flex-col left -->

     <div class="flex-col hide-for-medium flex-center">
         <ul class="nav nav-center nav-small  nav-divided">
                       </ul>
     </div><!-- center -->

     <div class="flex-col hide-for-medium flex-right">
        <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
             <li class="html header-social-icons ml-0">
 <div class="social-icons follow-icons" ><a href="http://url" target="_blank" data-label="Facebook"  rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook"><i class="icon-facebook" ></i></a><a href="http://url" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram"><i class="icon-instagram" ></i></a><a href="http://url" target="_blank"  data-label="Twitter"  rel="noopener noreferrer nofollow" class="icon plain  twitter tooltip" title="Follow on Twitter"><i class="icon-twitter" ></i></a></div></li>          </ul>
     </div><!-- .flex-col right -->

     <div class="flex-col hide-for-medium flex-right">
      @if(!Auth::guard("client")->check())
     <a href="{{route('SignInIndex')}}"><div style="color:white">Đăng nhập / Đăng ký</div></a>
     @else
     <a href="#"><div style="color:white">{{Auth::guard("client")->user()->name}}</div></a>
     @endif

     </div>{{--<--.flex-col right --> --}}

   </div><!-- .flex-row -->
</div><!-- #header-top -->
<div id="masthead" class="header-main hide-for-sticky nav-dark">
     <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

         <!-- Logo -->
         <div id="logo" class="flex-col logo">
           <!-- Header logo -->
<a href="https://mauweb.monamedia.net/donghohaitrieu/" title="Đồng Hồ Hải Triều" rel="home">
   <img width="200" height="100" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" class="header_logo header-logo" alt="Đồng Hồ Hải Triều" /><img width="200" height="100" src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" class="header-logo-dark" alt="Đồng Hồ Hải Triều" /></a>
         </div>

         <!-- Mobile Left Elements -->
         <div class="flex-col show-for-medium flex-left">
           <ul class="mobile-nav nav nav-left ">
             <li class="nav-icon has-icon">
     <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
   
     <i class="icon-menu" ></i>
         </a>
 </li>            </ul>
         </div>

         <!-- Left Elements -->
         <div class="flex-col hide-for-medium flex-left
           flex-grow">
           <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" >
             <li class="header-search-form search-form html relative has-icon">
 <div class="header-search-form-wrapper">
   <div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://mauweb.monamedia.net/donghohaitrieu/">
   <div class="flex-row relative">
                 <div class="flex-col flex-grow">
       <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm&hellip;" />
       <input type="hidden" name="post_type" value="product" />
             </div><!-- .flex-col -->
     <div class="flex-col">
       <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
         <i class="icon-search" ></i>				</button>
     </div><!-- .flex-col -->
   </div><!-- .flex-row -->
  <div class="live-search-results text-left z-top"></div>
</form>
</div>	</div>
</li>            </ul>
         </div>

         <!-- Right Elements -->
         <div class="flex-col hide-for-medium flex-right">
           <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
             <li class="header-wishlist-icon">
   <a href="{{route('Wishlist')}}" class="wishlist-link is-small">
             <i class="wishlist-icon icon-heart"
       >
     </i>
     </a>
 </li><li class="cart-item has-icon has-dropdown">
 @if(Session::has('cart'))
<a href="{{route('Cart')}}" title="Giỏ hàng" class="header-cart-link is-small">



   <span class="cart-icon image-icon">
   <strong>{{Session('cart')->totalQty}}</strong>
 </span>
 </a>

<ul class="nav-dropdown nav-dropdown-simple">
   <li class="html widget_shopping_cart">
        <div class="widget_shopping_cart_content">
        @foreach($product_cart as $product)
            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
				<li class="woocommerce-mini-cart-item mini_cart_item">
					<a href="{{route('DeleteItem',$product['item']['id'])}}" class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="748" data-cart_item_key="e49b8b4053df9505e1f48c3a701c0682" data-product_sku="P006">×</a>													
                    <a href="{{url('client/infor/'.$product['item']['id'])}}">
                        <img width="300" height="300" src="{{ asset($product['item']['img'])}}">
                        {{$product['item']['name']}}
                    </a>
                    <span class="quantity">{{$product['qty']}} × <span class="woocommerce-Price-amount amount">{{number_format($product['item']['price'], 0, ',', ',')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span>		
                </li>
		    </ul>
        @endforeach
        <p class="woocommerce-mini-cart__total total"><strong>Tổng phụ:</strong> <span class="woocommerce-Price-amount amount">{{number_format(Session('cart')->totalPrice, 0, ',', ',')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></p>
        <p class="woocommerce-mini-cart__buttons buttons">
            <a href="{{route('Cart')}}" class="button wc-forward">Xem giỏ hàng</a>
            <a href="{{route('ThanhToan')}}" class="button checkout wc-forward">Thanh toán</a>
        </p>
        </div>
   </li>
    </ul><!-- .nav-dropdown -->

</li>
           </ul>
         </div>

         <!-- Mobile Right Elements -->
         <div class="flex-col show-for-medium flex-right">
           <ul class="mobile-nav nav nav-right ">
             <li class="cart-item has-icon">
   <span class="cart-icon image-icon">
   <strong></strong>
 </span> 
 </a>


 <!-- Cart Sidebar Popup -->
 <div id="cart-popup" class="mfp-hide widget_shopping_cart">
 <div class="cart-popup-inner inner-padding">
     <div class="cart-popup-title text-center">
         <h4 class="uppercase">Giỏ hàng</h4>
         <div class="is-divider"></div>
     </div>
     <div class="widget_shopping_cart_content">


     </div>
            <div class="cart-sidebar-content relative"></div>  </div>
 </div>

</li>
           </ul>
         </div>

     </div><!-- .header-inner -->
     @else
     <a href="https://mauweb.monamedia.net/donghohaitrieu/gio-hang/" title="Giỏ hàng" class="header-cart-link is-small">



   <span class="cart-icon image-icon">
   <strong>0</strong>
 </span>
 </a>

<ul class="nav-dropdown nav-dropdown-simple">
   <li class="html widget_shopping_cart">
     <div class="widget_shopping_cart_content">
       

 <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>


     </div>
   </li>
    </ul><!-- .nav-dropdown -->

</li>
           </ul>
         </div>

         <!-- Mobile Right Elements -->
         <div class="flex-col show-for-medium flex-right">
           <ul class="mobile-nav nav nav-right ">
             <li class="cart-item has-icon">
 
   <span class="cart-icon image-icon">
   <strong></strong>
 </span> 
 </a>


 <!-- Cart Sidebar Popup -->
 <div id="cart-popup" class="mfp-hide widget_shopping_cart">
 <div class="cart-popup-inner inner-padding">
     <div class="cart-popup-title text-center">
         <h4 class="uppercase">Giỏ hàng</h4>
         <div class="is-divider"></div>
     </div>
     <div class="widget_shopping_cart_content">


     </div>
            <div class="cart-sidebar-content relative"></div>  </div>
 </div>

</li>
           </ul>
         </div>

     </div><!-- .header-inner -->
     @endif
    
           <!-- Header divider -->
     <div class="container"><div class="top-divider full-width"></div></div>
     </div><!-- .header-main --><div id="wide-nav" class="header-bottom wide-nav flex-has-center hide-for-medium">
   <div class="flex-row container">

           
                       <div class="flex-col hide-for-medium flex-center">
               <ul class="nav header-nav header-bottom-nav nav-center  nav-uppercase">
                   <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item active  menu-item-24"><a href="{{route('Home')}}" class="nav-top-link">Trang chủ</a></li>
<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-22"><a href="{{route('Intro')}}" class="nav-top-link">Giới thiệu</a></li>
<li id="menu-item-916" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-916"><a href="{{route('WatchMen')}}" class="nav-top-link">Đồng hồ nam</a></li>
<li id="menu-item-917" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-917"><a href="{{route('WatchWomen')}}" class="nav-top-link">Đồng hồ nữ</a></li>
<li id="menu-item-918" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-918"><a href="{{route('Blog')}}" class="nav-top-link">Blogs</a></li>
<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-23"><a href="{{route('Contact')}}" class="nav-top-link">Liên hệ</a></li>
               </ul>
           </div><!-- flex-col -->
           
           
           
   </div><!-- .flex-row -->
</div><!-- .header-bottom -->

<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div><!-- .header-bg-container -->   </div><!-- header-wrapper-->
</header>