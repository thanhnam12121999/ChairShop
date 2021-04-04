<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(./assets/images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="checkout-wrap ptb--100">
    <div class="container">
        <form action="./public/payment/getCheckout" method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="checkout__inner">
                    <div class="accordion-list">
                        <div class="accordion">
                            <div class="accordion__title">
                                Billing Information
                            </div>
                            <div class="accordion__body">
                                    <div class="bilinfo">
                                        <?php
                                        if (!empty($_SESSION["form-bill"])) { ?>
                                            <div style="margin-bottom: 20px">
                                                <div style="color: red;font-size: 15px"><?php echo $_SESSION['form-bill']; ?></div>
                                            </div>
                                            <?php $_SESSION["form-bill"] = ""; ?>
                                        <?php } ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-input mt-0">
                                                    <select name="province" id="province">
                                                        <option value="select">Select your province</option>
                                                        <?php foreach ($link_view1['province'] as $key1 => $value1) :?>
                                                            <option value="<?= $value1['id'] ?>"><?= $value1['name'] ;?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input ">
                                                    <select name="District" id="District">
                                                        <option value="select">District</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="text" name="txh_name" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Company name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Street Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Apartment/Block/House (optional)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="email" name="txt_email" placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-input">
                                                    <input type="text" name="txt_phone" placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="accordion__title">
                                shipping method
                            </div>
                            <div class="accordion__body">
                                <div class="shipmethod">
                                        <div class="single-input">
                                            <p>
                                                <input type="radio" name="ship-method" id="ship-fast">
                                                <label for="ship-fast">Delivery</label><img style="height: 25px;margin-left: 10px" src="./assets/images/partner-ship/viettelpost.jpg">
                                            </p>
                                            <p>Shipper will delivery to your Address .</p>
                                        </div>
                                        <div class="single-input">
                                            <p>
                                                <input type="radio" name="ship-method" id="ship-normal">
                                                <label for="ship-normal">Keep Product</label>
                                            </p>
                                            <p>Keep product at the store ,and take product at the store .</p>
                                        </div>
                                </div>
                            </div>
                            <div class="accordion__title">
                                payment information
                            </div>
                            <div class="accordion__body">
                                <div class="paymentinfo">
                                    <div class="single-method">
                                        <button style="border: 0px;background-color: white">
                                            <a><i class="zmdi zmdi-long-arrow-right"></i>COD</a>
                                        </button>
                                    </div>
                                    <div class="single-method">
                                        <button style="border: 0px;background-color: white" name="submit">
                                            <a><i class="zmdi zmdi-long-arrow-right"></i>Payment Online</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="order-details">
                    <h5 class="order-details__title">Your Order</h5>
                    <div class="order-details__item">
                    <?php $total_price_prod =0; $total_all = 0;$discount=0;
                    if (!empty($link_view1['getListCart'])) :?>
                    <?php foreach ($link_view1['getListCart'] as $key => $value) :?>
                        <div class="single-item">
                            <div class="single-item__thumb">
                                <img src="./assets/images/product/<?= $value['avatar'] ?>" alt="ordered item">
                            </div>
                            <div class="single-item__content">
                                <a href="#" style="font-size: 13px"><?= $value['name'] ?></a>
                                <span class="price">$<?= $value['price_saled'] ?></span>
                            </div>
                            <div class="single-item__remove">
                                <a href="./public/payment/deleteCartProd/<?= $value['id'] ?>"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </div>
                    <?php $total_price_prod += $value['price_saled']; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
<!-- WILL FIX 2$ SHIPPING IN ADMIN MANAGE  -->
                    </div>
                    <div class="order-details__count">
                        <div class="order-details__count__single">
                            <h5>sub total</h5>
                            <span class="price">$<?= $total_price_prod; ?></span>
                        </div>
                        <div class="order-details__count__single">
                            <h5>Tax</h5>
                            <span class="price">$<?= ceil(($total_price_prod*10)/100) ;?></span>
                        </div>
                        <div class="order-details__count__single">
                            <h5>Shipping</h5>
                            <span class="price">$2.00</span>
                        </div>
                        <?php if (!empty($link_view1['discount'])) :?>
                            <?php $discount = $link_view1['discount']; ?>
                            <div class="order-details__count__single">
                                <h5>Discount</h5>
                                <span class="price">$<?= $link_view1['discount'];?></span>
                            </div>
                        <?php endif; ?>
                        <?php $total_all = $total_price_prod + ceil(($total_price_prod*10)/100) + 2 + $discount; ?>
                    </div>
                    <div class="ordre-details__total">
                        <h5>Order total</h5>
                        <input style="display: none" class="price" value="<?= ($total_price_prod == 0)? 0 :$total_all ;?>" name="txt_gia">$<?= ($total_price_prod == 0)? 0 :$total_all ;?>
                    </div>
                </div>
            </div>
        </div>
        </form>
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

