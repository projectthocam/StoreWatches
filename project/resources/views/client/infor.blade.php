@extends('client.layout.layout') @section('title', 'product index')
@section('content')
<main id="main" class="">
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <!-- /.container -->
        <div
            id="product-748"
            class="post-748 product type-product status-publish has-post-thumbnail product_cat-best-seller product_cat-dong-ho-nam first instock shipping-taxable purchasable product-type-simple"
        >
            <div class="product-container">
                <div class="product-main">
                    <div class="row content-row mb-0">
                        <div class="product-gallery large-6 col">
                            <div
                                class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                data-columns="4"
                            >
                                <div
                                    class="badge-container is-larger absolute left top z-1"
                                ></div>
                                <div
                                    class="image-tools absolute top show-on-hover right z-3"
                                >
                                    <div class="wishlist-icon">
                                        <button
                                            class="wishlist-button button is-outline circle icon"
                                        >
                                            <i class="icon-heart"></i>
                                        </button>
                                        <div class="wishlist-popup dark">
                                            <div
                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-748"
                                            >
                                                <div
                                                    class="yith-wcwl-add-button show"
                                                    style="display: block"
                                                >
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=748"
                                                        rel="nofollow"
                                                        data-product-id="748"
                                                        data-product-type="simple"
                                                        class="add_to_wishlist"
                                                    >
                                                        Thêm yêu thích</a
                                                    >
                                                    <img
                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                        class="ajax-loading"
                                                        alt="loading"
                                                        width="16"
                                                        height="16"
                                                        style="
                                                            visibility: hidden;
                                                        "
                                                    />
                                                </div>

                                                <div
                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                    style="display: none"
                                                >
                                                    <span class="feedback"
                                                        >Đã thêm yêu thích</span
                                                    >
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                        rel="nofollow"
                                                    >
                                                        Đã thêm yêu thích
                                                    </a>
                                                </div>

                                                <div
                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                    style="display: none"
                                                >
                                                    <span class="feedback"
                                                        >The product is already
                                                        in the wishlist!</span
                                                    >
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                        rel="nofollow"
                                                    >
                                                        Đã thêm yêu thích
                                                    </a>
                                                </div>

                                                <div style="clear: both"></div>
                                                <div
                                                    class="yith-wcwl-wishlistaddresponse"
                                                ></div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                                <figure
                                    class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                    data-flickity-options='{
                "cellAlign": "center",
                "wrapAround": true,
                "autoPlay": false,
                "prevNextButtons":true,
                "adaptiveHeight": true,
                "imagesLoaded": true,
                "lazyLoad": 1,
                "dragThreshold" : 15,
                "pageDots": false,
                "rightToLeft": false       }'
                                >
                                    <div
                                        class="woocommerce-product-gallery__image slide first"
                                    >
                                        <a
                                            href="{{ asset('img/'.$product->img)}}"
                                        >
                                            <img
                                                width="600"
                                                height="700"
                                                src="{{ asset($product->img)}}"
                                                class="wp-post-image skip-lazy"
                                                alt=""
                                                title="{{$product->id}}"
                                                data-caption=""
                                                data-large_image="{{ asset('img/'.$product->img)}}"
                                                data-large_image_width="600"
                                                data-large_image_height="700"
                                                sizes="(max-width: 600px) 100vw, 600px"
                                        /></a>
                                    </div>
                                    @foreach($productImages as $item)
                                    <div
                                        class="woocommerce-product-gallery__image slide"
                                    >
                                        <a
                                            href="{{ asset('/'.$item->img_product)}}"
                                            ><img
                                                width="600"
                                                height="700"
                                                src="{{ asset('/'.$item->img_product)}}"
                                                class="skip-lazy"
                                                title="product-02"
                                                data-large_image_width="600"
                                                data-large_image_height="700"
                                                sizes="(max-width: 600px) 100vw, 600px"
                                        /></a>
                                    </div>
                                    @endforeach
                                </figure>

                                <div
                                    class="image-tools absolute bottom left z-3"
                                >
                                    <a
                                        href="#product-zoom"
                                        class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                        title="Zoom"
                                    >
                                        <i class="icon-expand"></i>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                data-flickity-options='{
									"cellAlign": "left",
									"wrapAround": false,
									"autoPlay": false,
									"prevNextButtons": true,
									"asNavFor": ".product-gallery-slider",
									"percentPosition": true,
									"imagesLoaded": true,
									"pageDots": false,
									"rightToLeft": false,
									"contain": true
								}'
                            >
                                @foreach($productImages as $item)
                                <div class="col is-nav-selected first">
                                    <a>
                                        <img
                                            src="{{ asset('/'.$item->img_product)}}"
                                            alt=""
                                            width="300"
                                            height="300"
                                            class="attachment-woocommerce_thumbnail"
                                        />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- .product-thumbnails -->
                        <div
                            class="product-info summary col-fit col entry-summary product-summary"
                        >
                            <nav class="woocommerce-breadcrumb breadcrumbs">
                                <a
                                    href="https://mauweb.monamedia.net/donghohaitrieu"
                                    >Trang chủ</a
                                >
                                <span class="divider">&#47;</span>
                                <a
                                    href="https://mauweb.monamedia.net/donghohaitrieu/danh-muc/dong-ho-nam/"
                                    >Đồng hồ nam</a
                                >
                            </nav>
                            <h1 class="product-title product_title entry-title">
                                {{$product->name}}
                            </h1>

                            <div class="is-divider small"></div>
                            <ul
                                class="next-prev-thumbs is-small show-for-medium"
                            >
                                <li class="prod-dropdown has-dropdown">
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                        rel="next"
                                        class="button icon is-outline circle"
                                    >
                                        <i class="icon-angle-left"></i>
                                    </a>
                                    <div class="nav-dropdown">
                                        <a
                                            title="Classico 1"
                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                        >
                                            <img
                                                width="100"
                                                height="100"
                                                src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png"
                                                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                alt=""
                                                srcset="
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w,
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                    http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w
                                                "
                                                sizes="(max-width: 100px) 100vw, 100px"
                                        /></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="price-wrapper">
                                <p class="price product-page-price">
                                    <span
                                        class="woocommerce-Price-amount amount"
                                        >{{number_format($product->price)































                                        }}&nbsp;<span
                                            class="woocommerce-Price-currencySymbol"
                                            >&#8363;</span
                                        ></span
                                    >
                                </p>
                            </div>
                            <div class="product-short-description">
                                <p>{!!$product->information!!}</p>
                                <ul class="stock-cont">
                                    <li class="product-sku">Sku: P006</li>
                                    <li class="product-stock-status">
                                        Categories:
                                        <a
                                            href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html#"
                                            >Butter &amp; Eggs,</a
                                        >
                                        <a
                                            href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html#"
                                            >Cultured Butter</a
                                        >
                                    </li>
                                    <li class="product-stock-status">
                                        Tag:
                                        <a
                                            href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html#"
                                            >Man</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <form
                                class="cart"
                                action="{{route('AddToCart')}}"
                                method="get"
                                enctype="multipart/form-data"
                            >
                                <div class="quantity buttons_added">
                                    <input type='hidden' name="id" value="{{$product->id}}">
                                    <input
                                        type="button"
                                        value="-"
                                        class="minus button is-form"
                                    />
                                    <label
                                        class="screen-reader-text"
                                        for="quantity"
                                        >Số lượng</label
                                    >
                                    <input
                                        type="number"
                                        id="quantity"
                                        class="input-text qty text"
                                        step="1"
                                        min="1"
                                        max="9999"
                                        name="quantity"
                                        value="1"
                                        title="SL"
                                        size="4"
                                        pattern="[0-9]*"
                                        inputmode="numeric"
                                        aria-labelledby=""
                                    />
                                    <input
                                        type="button"
                                        value="+"
                                        class="plus button is-form"
                                    />
                                </div>

                                <button
                                    type="submit"
                                    class="single_add_to_cart_button button alt"
                                >
                                    Thêm vào giỏ
                                </button>
                            </form>

                            <div class="row row-small" id="row-36018121">
                                <div class="col medium-6 small-12 large-6">
                                    <div class="col-inner">
                                        <p>
                                            <strong
                                                >Tính phí ship tự động</strong
                                            >
                                        </p>

                                        <div
                                            class="row large-columns-3 medium-columns- small-columns-2 row-xsmall"
                                        >
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghn-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ghtk-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-ninja-van-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-shipchung-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-viettle-post-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="338,339,340,341,342,343"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vn-post-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col medium-6 small-12 large-6">
                                    <div class="col-inner">
                                        <p><strong>Thanh toán</strong></p>

                                        <div
                                            class="row large-columns-3 medium-columns- small-columns-2 row-xsmall"
                                        >
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-acb-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-techcombank-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vib-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-vcb-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-paypal-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                            <div class="gallery-col col">
                                                <div class="col-inner">
                                                    <a
                                                        class="image-lightbox lightbox-gallery"
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard.jpg"
                                                        title=""
                                                    >
                                                        <div
                                                            class="box has-hover gallery-box box-overlay dark"
                                                        >
                                                            <div
                                                                class="box-image"
                                                            >
                                                                <img
                                                                    width="400"
                                                                    height="200"
                                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard.jpg"
                                                                    class="attachment-original size-original"
                                                                    alt=""
                                                                    ids="348,345,347,346,344,349"
                                                                    col_spacing="xsmall"
                                                                    columns="3"
                                                                    image_size="original"
                                                                    image_overlay="rgba(255, 255, 255, 0)"
                                                                    srcset="
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard.jpg         400w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard-300x150.jpg 300w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard-24x12.jpg    24w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard-36x18.jpg    36w,
                                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2018/10/logo-mastercard-48x24.jpg    48w
                                                                    "
                                                                    sizes="(max-width: 400px) 100vw, 400px"
                                                                />
                                                                <div
                                                                    class="overlay fill"
                                                                    style="
                                                                        background-color: rgba(
                                                                            255,
                                                                            255,
                                                                            255,
                                                                            0
                                                                        );
                                                                    "
                                                                ></div>
                                                            </div>
                                                            <!-- .image -->
                                                            <div
                                                                class="box-text text-left"
                                                            >
                                                                <p></p>
                                                            </div>
                                                            <!-- .text -->
                                                        </div>
                                                        <!-- .box -->
                                                    </a>
                                                </div>
                                                <!-- .col-inner -->
                                            </div>
                                            <!-- .col -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col small-12 large-12">
                                    <div class="col-inner">
                                        <p>
                                            <strong
                                                >"Hãy trở thành Affilicate của
                                                chúng tôi để tìm thêm thu nhập
                                                thụ động, kiếm tiền
                                                online"</strong
                                            >
                                        </p>
                                        <a
                                            href="https://mauweb.monamedia.net/donghohaitrieu/dang-ky-affilicate/"
                                            target="_self"
                                            class="button primary lowercase"
                                        >
                                            <span>Đăng ký Affilicate</span>
                                        </a>
                                    </div>
                                </div>

                                <style scope="scope"></style>
                            </div>
                            <div
                                class="yith-wcwl-add-to-wishlist add-to-wishlist-748"
                            >
                                <div
                                    class="yith-wcwl-add-button show"
                                    style="display: block"
                                >
                                    <a
                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=748"
                                        rel="nofollow"
                                        data-product-id="748"
                                        data-product-type="simple"
                                        class="add_to_wishlist"
                                    >
                                        Thêm yêu thích</a
                                    >
                                    <img
                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                        class="ajax-loading"
                                        alt="loading"
                                        width="16"
                                        height="16"
                                        style="visibility: hidden"
                                    />
                                </div>

                                <div
                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                    style="display: none"
                                >
                                    <span class="feedback"
                                        >Đã thêm yêu thích</span
                                    >
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                        rel="nofollow"
                                    >
                                        Đã thêm yêu thích
                                    </a>
                                </div>

                                <div
                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                    style="display: none"
                                >
                                    <span class="feedback"
                                        >The product is already in the
                                        wishlist!</span
                                    >
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                        rel="nofollow"
                                    >
                                        Đã thêm yêu thích
                                    </a>
                                </div>

                                <div style="clear: both"></div>
                                <div
                                    class="yith-wcwl-wishlistaddresponse"
                                ></div>
                            </div>

                            <div class="clear"></div>
                            <div class="product_meta">
                                <span class="sku_wrapper"
                                    >Mã: <span class="sku">P006</span></span
                                >

                                <span class="posted_in"
                                    >Danh mục:
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/danh-muc/best-seller/"
                                        rel="tag"
                                        >Best seller</a
                                    >,
                                    <a
                                        href="https://mauweb.monamedia.net/donghohaitrieu/danh-muc/dong-ho-nam/"
                                        rel="tag"
                                        >Đồng hồ nam</a
                                    ></span
                                >
                            </div>
                        </div>
                        <!-- .summary -->

                        <div id="product-sidebar" class="mfp-hide">
                            <div class="sidebar-inner">
                                <div
                                    class="hide-for-off-canvas"
                                    style="width: 100%"
                                >
                                    <ul
                                        class="next-prev-thumbs is-small nav-right text-right"
                                    >
                                        <li class="prod-dropdown has-dropdown">
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                rel="next"
                                                class="button icon is-outline circle"
                                            >
                                                <i class="icon-angle-left"></i>
                                            </a>
                                            <div class="nav-dropdown">
                                                <a
                                                    title="Classico 1"
                                                    href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                >
                                                    <img
                                                        width="100"
                                                        height="100"
                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png"
                                                        class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                        alt=""
                                                        srcset="
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w,
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                            http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w
                                                        "
                                                        sizes="(max-width: 100px) 100vw, 100px"
                                                /></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <aside
                                    id="woocommerce_products-2"
                                    class="widget woocommerce widget_products"
                                >
                                    <span class="widget-title shop-sidebar"
                                        >Sản phẩm</span
                                    >
                                    <div class="is-divider small"></div>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/dich-vu-tu-van/"
                                            >
                                                <img
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/woocommerce/assets/images/placeholder.png"
                                                    alt="Nơi nhập dữ liệu"
                                                    width="100"
                                                    class="woocommerce-placeholder wp-post-image"
                                                    height="100"
                                                />
                                                <span class="product-title"
                                                    >Dịch vụ tư vấn</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >300,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-10/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 10</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-9/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 9</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-8/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 8</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-7/"
                                            >
                                                <img
                                                    width="100"
                                                    height="100"
                                                    src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg"
                                                    class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                    alt=""
                                                    srcset="
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg 100w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-150x150.jpg 150w,
                                                        http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-300x300.jpg 300w
                                                    "
                                                    sizes="(max-width: 100px) 100vw, 100px"
                                                />
                                                <span class="product-title"
                                                    >Simple 7</span
                                                >
                                            </a>

                                            <span
                                                class="woocommerce-Price-amount amount"
                                                >700,000&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol"
                                                    >&#8363;</span
                                                ></span
                                            >
                                        </li>
                                    </ul>
                                </aside>
                                <aside
                                    id="flatsome_recent_posts-3"
                                    class="widget flatsome_recent_posts"
                                >
                                    <span class="widget-title shop-sidebar"
                                        >Bài viết mới nhất</span
                                    >
                                    <div class="is-divider small"></div>
                                    <ul>
                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
                                                        title="Chiếc đồng hồ của những CEO quyền lực nhất thế giới"
                                                        >Chiếc đồng hồ của những
                                                        CEO quyền lực nhất thế
                                                        giới</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/"
                                                        title="12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại"
                                                        >12 chiếc đồng hồ dành
                                                        cho nữ giới đắt giá nhất
                                                        mọi thời đại</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/"
                                                        title="10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng số 3"
                                                        >10 thương hiệu đồng hồ
                                                        cao cấp hàng đầu mọi quý
                                                        ông đều quan tâm, Rolex
                                                        xếp hạng số 3</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/photo-1-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/"
                                                        title="6 chiếc đồng hồ ấn tượng tại Oscar 2019: Từ những thương hiệu đình đám với cái giá &#8220;cắt cổ&#8221;"
                                                        >6 chiếc đồng hồ ấn
                                                        tượng tại Oscar 2019: Từ
                                                        những thương hiệu đình
                                                        đám với cái giá
                                                        &#8220;cắt cổ&#8221;</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/6-chiec-dong-ho-an-tuong-tai-oscar-2019-tu-nhung-thuong-hieu-dinh-dam-voi-cai-gia-cat-co/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>

                                        <li class="recent-blog-posts-li">
                                            <div
                                                class="flex-row recent-blog-posts align-top pt-half pb-half"
                                            >
                                                <div class="flex-col mr-half">
                                                    <div
                                                        class="badge post-date badge-circle"
                                                    >
                                                        <div
                                                            class="badge-inner bg-fill"
                                                            style="
                                                                background: url(http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/news-1-150x150.jpg);
                                                                border: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                                <!-- .flex-col -->
                                                <div class="flex-col flex-grow">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/"
                                                        title="Casio sẽ ra mắt đồng hồ thông minh thương hiệu G-Shock để cạnh tranh với Apple Watch?"
                                                        >Casio sẽ ra mắt đồng hồ
                                                        thông minh thương hiệu
                                                        G-Shock để cạnh tranh
                                                        với Apple Watch?</a
                                                    >
                                                    <span
                                                        class="post_comments op-7 block is-xsmall"
                                                        ><a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/casio-se-ra-mat-dong-ho-thong-minh-thuong-hieu-g-shock-de-canh-tranh-voi-apple-watch/#respond"
                                                        ></a
                                                    ></span>
                                                </div>
                                            </div>
                                            <!-- .flex-row -->
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                            <!-- .sidebar-inner -->
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .product-main -->

                <div class="product-footer">
                    <div class="container">
                        <div class="woocommerce-tabs container tabbed-content">
                            <ul
                                class="product-tabs small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left"
                            >
                                <li class="description_tab active">
                                    <a href="#tab-description">Mô tả</a>
                                </li>
                                <li class="reviews_tab">
                                    <a href="#tab-reviews">Đánh giá (0)</a>
                                </li>
                            </ul>
                            <div class="tab-panels">
                                <div
                                    class="panel entry-content active"
                                    id="tab-description"
                                >
                                    {!!$product->descript!!}
                                </div>

                                <div
                                    class="panel entry-content"
                                    id="tab-reviews"
                                >
                                    <div class="row" id="reviews">
                                        <div class="col large-12" id="comments">
                                            <h3 class="normal">Đánh giá</h3>

                                            <p class="woocommerce-noreviews">
                                                Chưa có đánh giá nào.
                                            </p>
                                        </div>

                                        <div
                                            id="review_form_wrapper"
                                            class="large-12 col"
                                        >
                                            <div
                                                id="review_form"
                                                class="col-inner"
                                            >
                                                <div
                                                    class="review-form-inner has-border"
                                                >
                                                    <div
                                                        id="respond"
                                                        class="comment-respond"
                                                    >
                                                        <h3
                                                            id="reply-title"
                                                            class="comment-reply-title"
                                                        >
                                                            Hãy là người đầu
                                                            tiên nhận xét
                                                            &ldquo;Classico&rdquo;
                                                            <small
                                                                ><a
                                                                    rel="nofollow"
                                                                    id="cancel-comment-reply-link"
                                                                    href="/donghohaitrieu/san-pham/ornare-sed-consequat/#respond"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                    >Hủy</a
                                                                ></small
                                                            >
                                                        </h3>
                                                        <form
                                                            action="https://mauweb.monamedia.net/donghohaitrieu/wp-comments-post.php"
                                                            method="post"
                                                            id="commentform"
                                                            class="comment-form"
                                                            novalidate
                                                        >
                                                            <div
                                                                class="comment-form-rating"
                                                            >
                                                                <label
                                                                    for="rating"
                                                                    >Đánh giá
                                                                    của
                                                                    bạn</label
                                                                ><select
                                                                    name="rating"
                                                                    id="rating"
                                                                    required
                                                                >
                                                                    <option
                                                                        value=""
                                                                    >
                                                                        Xếp
                                                                        hạng&hellip;
                                                                    </option>
                                                                    <option
                                                                        value="5"
                                                                    >
                                                                        Rất tốt
                                                                    </option>
                                                                    <option
                                                                        value="4"
                                                                    >
                                                                        Tốt
                                                                    </option>
                                                                    <option
                                                                        value="3"
                                                                    >
                                                                        Trung
                                                                        bình
                                                                    </option>
                                                                    <option
                                                                        value="2"
                                                                    >
                                                                        Không tệ
                                                                    </option>
                                                                    <option
                                                                        value="1"
                                                                    >
                                                                        Rất tệ
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <p
                                                                class="comment-form-comment"
                                                            >
                                                                <label
                                                                    for="comment"
                                                                    >Nhận xét
                                                                    của
                                                                    bạn&nbsp;<span
                                                                        class="required"
                                                                        >*</span
                                                                    ></label
                                                                ><textarea
                                                                    id="comment"
                                                                    name="comment"
                                                                    cols="45"
                                                                    rows="8"
                                                                    required
                                                                ></textarea>
                                                            </p>
                                                            <p
                                                                class="comment-form-author"
                                                            >
                                                                <label
                                                                    for="author"
                                                                    >Tên&nbsp;<span
                                                                        class="required"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <input
                                                                    id="author"
                                                                    name="author"
                                                                    type="text"
                                                                    value=""
                                                                    size="30"
                                                                    required
                                                                />
                                                            </p>
                                                            <p
                                                                class="comment-form-email"
                                                            >
                                                                <label
                                                                    for="email"
                                                                    >Email&nbsp;<span
                                                                        class="required"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                                <input
                                                                    id="email"
                                                                    name="email"
                                                                    type="email"
                                                                    value=""
                                                                    size="30"
                                                                    required
                                                                />
                                                            </p>
                                                            <p
                                                                class="form-submit"
                                                            >
                                                                <input
                                                                    name="submit"
                                                                    type="submit"
                                                                    id="submit"
                                                                    class="submit"
                                                                    value="Gửi đi"
                                                                />
                                                                <input
                                                                    type="hidden"
                                                                    name="comment_post_ID"
                                                                    value="748"
                                                                    id="comment_post_ID"
                                                                />
                                                                <input
                                                                    type="hidden"
                                                                    name="comment_parent"
                                                                    id="comment_parent"
                                                                    value="0"
                                                                />
                                                            </p>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .tab-panels -->
                        </div>
                        <!-- .tabbed-content -->

                        <div
                            class="related related-products-wrapper product-section"
                        >
                            <h3
                                class="product-section-title container-width product-section-title-related pt-half pb-half uppercase"
                            >
                                Sản phẩm tương tự
                            </h3>

                            <div
                                class="row large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'
                            >
                                c

                                <div
                                    class="product-small col has-hover post-778 product type-product status-publish has-post-thumbnail product_cat-dong-ho-nam product_cat-popular instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-7/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-300x300.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-300x300.jpg 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-150x150.jpg 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-12-100x100.jpg 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-778"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=778"
                                                                        rel="nofollow"
                                                                        data-product-id="778"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-7/"
                                                            >Simple 7</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >700,000&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=778"
                                                        rel="nofollow"
                                                        data-product_id="778"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->

                                <div
                                    class="product-small col has-hover post-757 product type-product status-publish has-post-thumbnail product_cat-best-seller instock sale shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        >
                                            <div
                                                class="callout badge badge-circle"
                                            >
                                                <div
                                                    class="badge-inner secondary on-sale"
                                                >
                                                    <span class="onsale"
                                                        >-29%</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-4/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05-300x300.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-05-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-757"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=757"
                                                                        rel="nofollow"
                                                                        data-product-id="757"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-4/"
                                                            >Classico 4</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><del
                                                            ><span
                                                                class="woocommerce-Price-amount amount"
                                                                >700,000&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol"
                                                                    >&#8363;</span
                                                                ></span
                                                            ></del
                                                        >
                                                        <ins
                                                            ><span
                                                                class="woocommerce-Price-amount amount"
                                                                >500,000&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol"
                                                                    >&#8363;</span
                                                                ></span
                                                            ></ins
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=757"
                                                        rel="nofollow"
                                                        data-product_id="757"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->

                                <div
                                    class="product-small col has-hover post-754 product type-product status-publish has-post-thumbnail product_cat-best-seller last instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-754"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=754"
                                                                        rel="nofollow"
                                                                        data-product-id="754"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-1/"
                                                            >Classico 1</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >700,000&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=754"
                                                        rel="nofollow"
                                                        data-product_id="754"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->

                                <div
                                    class="product-small col has-hover post-782 product type-product status-publish has-post-thumbnail product_cat-dong-ho-nam product_cat-popular first instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-9/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-300x300.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-300x300.jpg 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-150x150.jpg 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-100x100.jpg 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-782"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=782"
                                                                        rel="nofollow"
                                                                        data-product-id="782"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/simple-9/"
                                                            >Simple 9</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >700,000&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=782"
                                                        rel="nofollow"
                                                        data-product_id="782"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->

                                <div
                                    class="product-small col has-hover post-756 product type-product status-publish has-post-thumbnail product_cat-best-seller instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-3/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-300x300.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-04-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-756"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=756"
                                                                        rel="nofollow"
                                                                        data-product-id="756"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-3/"
                                                            >Classico 3</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >700,000&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=756"
                                                        rel="nofollow"
                                                        data-product_id="756"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->

                                <div
                                    class="product-small col has-hover post-755 product type-product status-publish has-post-thumbnail product_cat-best-seller product_cat-dong-ho-nam instock shipping-taxable purchasable product-type-simple"
                                >
                                    <div class="col-inner">
                                        <div
                                            class="badge-container absolute left top z-1"
                                        ></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a
                                                        href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-2/"
                                                    >
                                                        <img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-03-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        /><img
                                                            width="300"
                                                            height="300"
                                                            src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png"
                                                            class="show-on-hover absolute fill hide-for-small back-image"
                                                            alt=""
                                                            srcset="
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-300x300.png 300w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-150x150.png 150w,
                                                                http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-02-100x100.png 100w
                                                            "
                                                            sizes="(max-width: 300px) 100vw, 300px"
                                                        />
                                                    </a>
                                                </div>
                                                <div
                                                    class="image-tools is-small top right show-on-hover"
                                                >
                                                    <div class="wishlist-icon">
                                                        <button
                                                            class="wishlist-button button is-outline circle icon"
                                                        >
                                                            <i
                                                                class="icon-heart"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            class="wishlist-popup dark"
                                                        >
                                                            <div
                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-755"
                                                            >
                                                                <div
                                                                    class="yith-wcwl-add-button show"
                                                                    style="
                                                                        display: block;
                                                                    "
                                                                >
                                                                    <a
                                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add_to_wishlist=755"
                                                                        rel="nofollow"
                                                                        data-product-id="755"
                                                                        data-product-type="simple"
                                                                        class="add_to_wishlist"
                                                                    >
                                                                        Thêm yêu
                                                                        thích</a
                                                                    >
                                                                    <img
                                                                        src="https://mauweb.monamedia.net/donghohaitrieu/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                        class="ajax-loading"
                                                                        alt="loading"
                                                                        width="16"
                                                                        height="16"
                                                                        style="
                                                                            visibility: hidden;
                                                                        "
                                                                    />
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >Đã thêm
                                                                        yêu
                                                                        thích</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                    style="
                                                                        display: none;
                                                                    "
                                                                >
                                                                    <span
                                                                        class="feedback"
                                                                        >The
                                                                        product
                                                                        is
                                                                        already
                                                                        in the
                                                                        wishlist!</span
                                                                    >
                                                                    <a
                                                                        href="https://mauweb.monamedia.net/donghohaitrieu/wishlist/"
                                                                        rel="nofollow"
                                                                    >
                                                                        Đã thêm
                                                                        yêu
                                                                        thích
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    style="
                                                                        clear: both;
                                                                    "
                                                                ></div>
                                                                <div
                                                                    class="yith-wcwl-wishlistaddresponse"
                                                                ></div>
                                                            </div>

                                                            <div
                                                                class="clear"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-tools is-small hide-for-small bottom left show-on-hover"
                                                ></div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"
                                                ></div>
                                            </div>
                                            <!-- box-image -->

                                            <div
                                                class="box-text box-text-products text-center grid-style-2"
                                            >
                                                <div class="title-wrapper">
                                                    <p
                                                        class="name product-title"
                                                    >
                                                        <a
                                                            href="https://mauweb.monamedia.net/donghohaitrieu/san-pham/classico-2/"
                                                            >Classico 2</a
                                                        >
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"
                                                        ><span
                                                            class="woocommerce-Price-amount amount"
                                                            >700,000&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol"
                                                                >&#8363;</span
                                                            ></span
                                                        ></span
                                                    >
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a
                                                        href="/donghohaitrieu/san-pham/ornare-sed-consequat/?add-to-cart=755"
                                                        rel="nofollow"
                                                        data-product_id="755"
                                                        class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small"
                                                        >Thêm vào giỏ</a
                                                    >
                                                </div>
                                            </div>
                                            <!-- box-text -->
                                        </div>
                                        <!-- box -->
                                    </div>
                                    <!-- .col-inner -->
                                </div>
                                <!-- col -->
                            </div>
                        </div>
                    </div>
                    <!-- container -->
                </div>
                <!-- product-footer -->
            </div>
            <!-- .product-container -->
        </div>
    </div>
    <!-- shop container -->
</main>

@endsection
