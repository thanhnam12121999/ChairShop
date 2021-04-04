
<!-- End Offset Wrapper -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">shopping cart</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="./public/cart/updateToCart" method="post">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-thumbnail">products</th>
                                <th class="product-name">name of products</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $total_price_prod =0; $total_all = 0;?>
                            <?php if (!empty($link_view1['getListCart'])) :?>
                            <?php foreach ($link_view1['getListCart'] as $key1 => $value1) :?>
                            <tr>
                                <td class="product-thumbnail"><a href="#"><img src="./assets/images/product/<?= $value1['avatar'] ?>" alt="product img" /></a></td>
                                <td class="product-name"><a href="#"><?= $value1['name'] ?></a>
                                    <ul  class="pro__prize">
                                        <li class="old__prize">$<?= $value1['price'] ?></li>
                                        <li>$<?= $value1['price_saled'] ?></li>
                                    </ul>
                                </td>
                                <td class="product-price"><span class="amount">$<?= $value1['price_saled'] ?></span></td>
                                <td class="product-quantity"><input type="number" name="quantity[<?= $value1['id'] ?>]" value="<?= $_SESSION['cart'][$value1['id']] ?>" /></td>
                                <td class="product-subtotal">$<?= $value1['price_saled'] ?></td>
                                <td class="product-remove"><a href="./public/cart/deletePro/<?= $value1['id'] ?>"><i class="icon-trash icons"></i></a></td>
                            </tr>
                            <?php $total_price_prod += $value1['price_saled']; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                    <a href="#">Continue Shopping</a>
                                </div>
                                <button style="border: 0px" class="buttons-cart checkout--btn"  name="submit">
                                    <a>update</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="ht__coupon__code">
                                <span>enter your discount code</span>
                                <form action="./public/cart/checkcodediscount" method="post">
                                <div class="coupon__box">
                                    <input type="text" name="code_discount" placeholder="">
                                    <div class="ht__cp__btn">
                                        <button name="submit" style="border: 0px">
                                            <a>enter</a>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <form action="./public/payment/" method="post">
                        <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="htc__cart__total">
                                <h6>cart total</h6>
                                <div class="cart__desk__list">
                                    <ul class="cart__desc">
                                        <li>cart total</li>
                                        <li>tax</li>
                                        <li>shipping</li>
                                        <li>discount</li>
                                    </ul>
                                    <ul class="cart__price">
                                        <li>$<?= $total_price_prod; ?>.00</li>
                                        <li>$<?= ceil(($total_price_prod*10)/100); ?>.00</li>
                                        <li>$2.00</li>
                                        <!--discount-->
                                        <?php $discount = 0 ;
                                        if (!empty($link_view1['checkDiscount'])) :?>
                                            <?php foreach ($link_view1['checkDiscount'] as $key => $value) :?>
                                                <li>$<input name="discount1" class="cart_discount" value="<?= $value['discount'] ?>"></li>
                                            <?php $discount += $value['discount'] ;?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="cart__total">
                                    <span>order total</span>
                                    <span>$<?= $total_price_prod + ceil(($total_price_prod*10)/100) +2 - $discount ;?>.00</span>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active">
                                        <button name="submit" style="width: 100%;border: 0px"><a>payment</a></button>
                                    </li>
                                    <li><a href="#">continue shopping</a></li>
                                </ul>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
<!-- Start Brand Area -->
<div class="htc__brand__area bg__cat--4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ht__brand__inner">
                    <ul class="brand__list owl-carousel clearfix">
                        <li><a href="#"><img src="./assets/images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/2.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/3.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/4.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="./assets/images/brand/2.png" alt="brand images"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->
<!-- Start Banner Area -->
<div class="htc__banner__area">
    <ul class="banner__list owl-carousel owl-theme clearfix">
        <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
    </ul>
</div>
<!-- End Banner Area -->
<!-- End Banner Area -->
