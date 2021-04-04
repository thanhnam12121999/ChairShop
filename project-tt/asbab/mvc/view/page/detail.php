<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=359697018621138&autoLogAppEvents=1" nonce="1uXg1qyZ"></script>
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
                            <a class="breadcrumb-item" href="product-grid.html">Products</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">ean shirt</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
    <!-- Start Product Details Top -->
    <div class="htc__product__details__top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="htc__product__details__tab__content">
                        <!-- Start Product Big Images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                                <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                    <img style="width: 100%;height: 600px;object-fit: scale-down;" src="./assets/images/product/<?= $value1['avatar'] ?>"full-image">
                                </div>
<!--image-detail-product-->
                                    <?php $ai = 1; ?>
                                    <?php foreach ($link_view1['images'] as $key2 => $value2) :?>
                                        <div role="tabpanel" class="tab-pane fade " id="img-tab-<?= $ai += 1; ?>">
                                            <img style="width: 100%;height: 600px" src="./assets/images/product/<?= $value2['name'] ;?>"full-image">
                                        </div>
                                    <?php endforeach; ?>
<!--image-detail-product-->
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->

                        <ul style="width: 100%;justify-content: center;" class="product__small__images" role="tablist">
                            <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img style="width: 80px;height: 106px" src="./assets/images/product/<?= $value1['avatar'] ?>" alt="small-image">
                                </a>
                            </li>
<!--image-detail-product-->
                                <?php $ai2 = 1; ?>
                                <?php foreach ($link_view1['images'] as $key2 => $value2) :?>
                                    <li role="presentation" class="pot-small-img ">
                                        <a href="#img-tab-<?= $ai2 += 1;?>" role="tab" data-toggle="tab">
                                            <img style="width: 80px;height: 106px" src="./assets/images/product/<?= $value2['name'] ;?>" alt="small-image">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
<!--image-detail-product-->
                            <?php endforeach; ?>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                        <h2><?= $value1['name'] ;?></h2>
                        <h6>Model: <span>MNG001</span></h6>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">$<?= $value1['price'] ;?></li>
                            <li>$<?= $value1['price_saled'] ;?></li>
                        </ul>
                        <p class="pro__info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>

                        <div class="ht__pro__desc">
                            <div class="sin__desc">
                                <p><span>Availability:</span> In Stock</p>
                            </div>
                            <div class="sin__desc align--left">
                                <p><span>color:</span></p>
                                <ul class="pro__color">
                                    <li class="red"><a href="#">red</a></li>
                                    <li class="green"><a href="#">green</a></li>
                                    <li class="balck"><a href="#">balck</a></li>
                                </ul>
                                <div class="pro__more__btn">
                                    <a href="#">more</a>
                                </div>
                            </div>
                            <div class="sin__desc align--left">
                                <p><span>Categories:</span></p>
                                <ul class="pro__cat__list">
                                    <li><a href="#">Chair,</a></li>
                                    <li><a href="#">Gaming</a></li>
                                </ul>
                            </div>
                            <div class="sin__desc align--left">
                                <p><span>Product tags:</span></p>
                                <ul class="pro__cat__list">
                                    <li><a href="#">Chair,</a></li>
                                    <li><a href="#">Gaming,</a></li>
                                    <li><a href="#">Gamer,</a></li>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                            <form method="post" action="http://localhost:8080/project-tt/asbab/public/detail/addtocart">
                                <button style="border: 0px" class="sin__desc align--left cr__btn" name="quantity[<?= $value1['id'] ?>]" value="1">
                                    <a>Add Cart</a>
                                </button>
                            </form>
                            <div class="sin__desc product__share__link">
                                <p><span>Share this:</span></p>
                                <ul class="pro__share">
                                    <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Start List And Grid View -->
                <ul class="pro__details__tab" role="tablist">
                    <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
                    <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">shipping</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ht__pro__details__content">
                    <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                        <div class="pro__tab__content__inner">
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <ul class="container descr_before">
                                <?=  $value1['Standard_Featured'] ;?>
                            </ul>
                            <?php if (!empty($value1['detail'])) :?>
                            <div class="row">
                                <div class="col col-lg-8 product__detail">
                                    <h4 class="ht__pro__title">Description</h4>
                                    <hr>
                                        <div class="product__detail__outside">

                                            <div class="container show__main__description">
                                                <ul>
                                                    <?=  $value1['detail'] ;?>
                                                </ul>
                                                <div id="closeDetail">
                                                    <p>X</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="blur1"></div>
                                    <div class="blur__bottom__description"></div>
                                </div>
                                <div class="col col-lg-4">
                                    <h4 class="ht__pro__title">Related News</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="see__more col col-lg-8">
                                    <span class="see__more__p" style="">SEE MORE ...</span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Description -->
<!-- Start Product Area -->
<!---->
<div class="container" style="margin-bottom: 50px">
    <h2 style="padding-bottom: 50px;font-weight: 600">Comment</h2>
    <div style="margin-left: 30px" ">
        <div class="fb-comments" data-href="http://localhost:8080/project-tt/asbab/public/detail/index" data-width="" data-numposts="5"></div>
    </div>
</div>
<!---->
<section class="htc__product__area--2 pb--100 product-details-res">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__wrap clearfix">
                <!-- Start Single Product -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product-details.html">
                                <img src="images/product/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">Product Title Here </a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">$30.3</li>
                                <li>$25.9</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                <!-- Start Single Product -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product-details.html">
                                <img src="images/product/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">Product Title Here </a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">$30.3</li>
                                <li>$25.9</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                <!-- Start Single Product -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product-details.html">
                                <img src="images/product/3.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">Product Title Here </a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">$30.3</li>
                                <li>$25.9</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
                <!-- Start Single Product -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product-details.html">
                                <img src="images/product/4.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product-details.html">Product Title Here </a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">$30.3</li>
                                <li>$25.9</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->
<!-- Start Banner Area -->
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
