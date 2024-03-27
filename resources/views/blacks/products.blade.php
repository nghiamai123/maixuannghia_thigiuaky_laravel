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
                    quả</button><button class="tablinks " onclick="openTabs(event,'tab_21')">Thực phẩm khô</button><button class="tablinks " onclick="openTabs(event,'tab_19')">Rau hữu cơ</button></div>
            <div id="tab_20" class="tabcontent" style="display: block;">
                <div class="woocommerce columns-4 ">
                    <div class="grid-uniform md-mg-left-10 products columns-4">

                        @foreach($products as $product)
                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{ 'http://127.0.0.1:8000/details/' . $product->id }}">
                                        <img width="260" height="260" src="{{asset('images/'.$product->image)}}"/></a>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="{{ 'http://127.0.0.1:8000/details/' . $product->id }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-price clearfix">
                                        <span class="current-price"><span class="woocommerce-Price-amount amount">{{ $product->old_price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        <span class="original-price"><s><span class="woocommerce-Price-amount amount">{{ $product->new_price }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                    </div>
                                    <div class="product-actions text-center clearfix">
                                        <a href="{{ 'http://127.0.0.1:8000/details/' . $product->id }}">
                                            <button type="button" class="btn-buyNow buy-now medium--hide small--hide" data-id="1026777806">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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