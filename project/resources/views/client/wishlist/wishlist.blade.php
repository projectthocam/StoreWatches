@extends('client.layout.layout')
@section('title', 'product index')
@section('content')
<main id="main" class="">
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
				
				
														
						<div id="yith-wcwl-messages"></div>



<form id="yith-wcwl-form" action="http://mauweb.monamedia.net/donghohaitrieu/wishlist/view/" method="post" class="woocommerce"><form id="yith-wcwl-form" action="http://mauweb.monamedia.net/donghohaitrieu/wishlist/view/" method="post" class="woocommerce">

    <input type="hidden" id="yith_wcwl_form_nonce" name="yith_wcwl_form_nonce" value="03e188b75a"><input type="hidden" name="_wp_http_referer" value="/donghohaitrieu/wp-admin/admin-ajax.php">
    <!-- TITLE -->
    
	<div class="woocommerce-message message-wrapper" role="alert">
		<div class="message-container container success-color medium-text-center">
			<i class="icon-checkmark"></i>			Product successfully removed.					</div>
	</div>

    <!-- WISHLIST TABLE -->
	<table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5" data-page="1" data-id="" data-token="">

	    
        <thead>
        <tr>
	        
	        		        <th class="product-remove"></th>
	        
            <th class="product-thumbnail"></th>

            <th class="product-name">
                <span class="nobr">Product Name</span>
            </th>

            
                <th class="product-price">
                    <span class="nobr">
                        Unit Price                    </span>
                </th>

            
            
                <th class="product-stock-status">
                    <span class="nobr">
                        Stock Status                    </span>
                </th>

            
            
                <th class="product-add-to-cart"></th>

                    </tr>
        </thead>

        <tbody>
                            <tr id="yith-wcwl-row-755" data-row-id="755">
	                    
                                                <td class="product-remove">
                            <div>
                                <a href="/donghohaitrieu/wp-admin/admin-ajax.php?remove_from_wishlist=755" class="remove remove_from_wishlist" title="Remove this product">×</a>
                            </div>
                        </td>
                        
                        <td class="product-thumbnail">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-2/">
                                <img width="300" height="300" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png 300w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-150x150.png 150w, http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px">                            </a>
                        </td>

                        <td class="product-name">
                            <a href="http://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-2/">Classico 2</a>
                                                    </td>

                                                    <td class="product-price">
                                <span class="woocommerce-Price-amount amount">700,000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span>                            </td>
                        
                                                    <td class="product-stock-status">
                                <span class="wishlist-in-stock">In Stock</span>                            </td>
                        
	                                            <td class="product-add-to-cart">
	                        <!-- Date added -->
	                        
                            <!-- Add to cart button -->
                                                            <a href="/donghohaitrieu/wp-admin/admin-ajax.php?add-to-cart=755" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt" data-product_id="755" data-product_sku="P006-1-1" aria-label="Thêm “Classico 2” vào giỏ hàng" rel="nofollow"> Add to Cart</a>                            
	                        <!-- Change wishlist -->
							
	                        <!-- Remove from wishlist -->
	                                                </td>
	                                    </tr>
                        </tbody>

        <tfoot>
        <tr>
	        <td colspan="6">
	            
	            
		        	        </td>
        </tr>
        </tfoot>

    </table>

    <input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist" value="b438c1790f"><input type="hidden" name="_wp_http_referer" value="/donghohaitrieu/wp-admin/admin-ajax.php">
            <input type="hidden" value="" name="wishlist_id" id="wishlist_id">
    
    
</form></form>




						
												</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>


</main>
	@endsection