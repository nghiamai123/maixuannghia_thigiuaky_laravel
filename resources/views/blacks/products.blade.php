@extends('layout.master')
@section('products')
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
</head>
<div class="wrapper">
    <div class="inner">
        <div class="section-title">
            <h2>Sản Phẩm Của Chúng Tôi</h2>
        </div>
        <div class="section-content">
            <div class="tab"><button id="defaultOpenTab" class="tablinks active" onclick="openTabs(event,'tab_20')">Hoa
                    quả</button><button class="tablinks " onclick="openTabs(event,'tab_21')">Thực phẩm khô</button><button
                    class="tablinks " onclick="openTabs(event,'tab_19')">Rau hữu cơ</button></div>
            <div id="tab_20" class="tabcontent" style="display: block;">
                <div class="woocommerce columns-4 ">
                    <div class="grid-uniform md-mg-left-10 products columns-4">


                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="NHO XANH"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">NHO XANH</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="MÙNG TƠI"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">MÙNG TƠI</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/dua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="DỨA"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">DỨA</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="CỦ DỀN"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">CỦ DỀN</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cam Cao Phong"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">Cam Cao Phong</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cà chua"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">Cà chua</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">15,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Bơ xanh"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">Bơ xanh</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="BÍ NGÔ"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">BÍ NGÔ</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab_21" class="tabcontent" style="display: none;">
                <div class="woocommerce columns-4 ">
                    <div class="grid-uniform md-mg-left-10 products columns-4">
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="NHO XANH"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">NHO XANH</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="MÙNG TƠI"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">MÙNG TƠI</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/dua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="DỨA"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">DỨA</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="CỦ DỀN"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">CỦ DỀN</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cam Cao Phong"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">Cam Cao Phong</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cà chua"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">Cà chua</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">15,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Bơ xanh"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">Bơ xanh</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="BÍ NGÔ"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">BÍ NGÔ</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab_19" class="tabcontent" style="display: none;">
                <div class="woocommerce columns-4 ">
                    <div class="grid-uniform md-mg-left-10 products columns-4">
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="NHO XANH"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">NHO XANH</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="MÙNG TƠI"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">MÙNG TƠI</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/dua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="DỨA"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">DỨA</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/dua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="CỦ DỀN"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">CỦ DỀN</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cam Cao Phong"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">Cam Cao Phong</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Cà chua"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">Cà chua</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">15,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="Bơ xanh"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">Bơ xanh</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                        <img width="260" height="260"
                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg"
                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                            alt="BÍ NGÔ"
                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg 480w"
                                            sizes="100vw" /> </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">BÍ NGÔ</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span
                                                class="woocommerce-Price-amount amount">12,000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span
                                                    class="woocommerce-Price-amount amount">15,000<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="https://at10.mediawz.com/san-pham/bi-ngo/">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide"
                                                data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
@endsection