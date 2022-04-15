@extends('user/layout')

@section('container')

<div class="wrap-breadcrumb">
    <ul>
        <li class="item-link"><a href="#" class="link">home</a></li>
        <li class="item-link"><span>login</span></li>
    </ul>
</div>
<div class=" main-content-area shopping-cart">

    <div class="wrap-iten-in-cart">
        <h3 class="box-title">Medicines Name</h3>

        <ul class="products-cart">
            @foreach ($data as $list)

            <li class="pr-cart-item">
                <div class="product-image">
                    <figure><img src="{{asset('uploads/products/'.$list->imagePath)}}" alt=""></figure>
                </div>
                <div class="product-name">
                    <a class="link-to-product" href="#">{{$list->product_name}}</a>
                </div>
                <div class="price-field produtc-price"><p class="price">{{$list->sale_price}} Tk</p></div>
                <div class="quantity">
                    <!-- <div class="quantity-input">
                        <input type="text" name="product-quatity" value="{{$list->amount}}" data-max="120" pattern="[0-9]*" >
                        <a class="btn btn-increase" href="cart/add/{{$list->product_id}}/increase"></a>
                        <a class="btn btn-reduce" href="cart/add/{{$list->product_id}}/reduce"></a>
                    </div> -->

                    <div class="input-group">
                        <a class="btn btn-reduce" href="cart/add/{{$list->product_id}}/increase"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                        <a class="btn btn-increase" href="cart/add/{{$list->product_id}}/reduce"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                        <input type="text" class="form-control" name="product-quatity" value="{{$list->amount}}" style="width=80px;" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>

                <div class="price-field sub-total"><p class="price">{{$list->price}} Tk</p></div>
                <div>
                    <a href="cart/delete/{{$list->product_id}}" class="btn btn-delete" title="">
                        <!-- <span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a> -->
                        <i class="fa fa-times-circle" style="font-size=100px;" aria-hidden="true"></i>
                    </a>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

    <div class="summary">
        <div class="order-summary">
            <h4 class="title-box">Order Summary</h4>
            <p class="summary-info"><span class="title">Subtotal</span><b class="index">{{$sum}} Tk</b></p>
            <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
            <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{$sum}} Tk</b></p>
        </div>
        <div class="checkout-info">
            <label class="checkbox-field">
                <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
            </label>
            <a class="btn btn-checkout" href="checkout/{{$sum}}">Check out</a>
            <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        </div>
        <div class="update-clear">
            <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
            <a class="btn btn-update" href="#">Update Shopping Cart</a>
        </div>
    </div>
</div>

@endsection
