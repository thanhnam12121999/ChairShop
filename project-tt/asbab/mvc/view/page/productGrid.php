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
                            <span class="breadcrumb-item active">Product</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                <div class="htc__product__rightidebar">
                    <div class="htc__grid__top">
                        <div class="htc__select__option">
                            <select class="ht__select">
                                <option>Default softing</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by newness</option>
                            </select>
                            <select class="ht__select">
                                <option>Show by</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by newness</option>
                            </select>
                        </div>
                        <div class="ht__pro__qun">
                            <span>Showing 1-12 of 1033 products</span>
                        </div>
                        <!-- Start List And Grid View -->
                        <ul class="view__mode" role="tablist">
                            <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                            <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                        </ul>
                        <!-- End List And Grid View -->
                    </div>
                    <?php if (!empty($link_view1['emptyProduct'])) : ?>
                    <div class="alert alert-danger alert-dismissible mt--20">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?= $link_view1['emptyProduct'];  ?></strong>
                    </div>
                    <?php endif; ?>
                    <!-- Start Product View -->
                    <div class="row">
                        <div class="shop__grid__view__wrap">
                            <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                <!-- Start Single Product -->
                                <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                                <div style="max-height: 381px" class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category">
                                        <div class="ht__cat__thumb">
                                            <a href="./public/detail/index/<?= $value1['id'] ;?>">
                                                <img src="./assets/images/product/<?= $value1['avatar'] ?>" alt="product images">
                                            </a>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
                                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                <li><a href="./public/cart"><i class="icon-handbag icons"></i></a></li>

                                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <h4><a href="./public/detail/index/<?= $value1['id'] ;?>"><?= $value1['name'] ;?></a></h4>
                                            <ul class="fr__pro__prize">
                                                <li class="old__prize">$<?= $value1['price'] ;?></li>
                                                <li>$<?= $value1['price_saled'] ;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                                <?php endforeach; ?>
                            </div>
                            <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                <div class="col-xs-12">
                                    <div class="ht__list__wrap">
                                        <?php foreach ($link_view1['data'] as $key1 => $value1) :?>
                                        <!-- Start List Product -->
                                        <div class="ht__list__product">
                                            <div class="ht__list__thumb">
                                                <a href="./public/detail/index/<?= $value1['id'] ;?>"><img src="./assets/images/product/<?= $value1['avatar'] ;?>" alt="product images"></a>
                                            </div>
                                            <div class="htc__list__details">
                                                <h2><a href="./public/detail/index/<?= $value1['id'] ;?>"><?= $value1['name'] ;?> </a></h2>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize">$<?= $value1['price'] ;?></li>
                                                    <li>$<?= $value1['price_saled'] ;?></li>
                                                </ul>
                                                <ul class="rating">
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <form method="post" action="http://localhost:8080/project-tt/asbab/public/detail/addtocart">
                                                    <button style="border: 0px" class="sin__desc align--left cr__btn" name="quantity[<?= $value1['id'] ?>]" value="1">
                                                        <a>Add Cart</a>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End List Product -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product View -->
                </div>
                <!-- Start Pagenation -->
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="htc__pagenation">
                            <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">19</a></li>
                            <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Pagenation -->
            </div>
            <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                <div class="htc__product__leftsidebar">
                    <!-- Start Prize Range -->
                    <div class="htc-grid-range">
                        <h4 class="title__line--4">Price</h4>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                            <!--start page filter-->
                                <?php if (!empty($link_view1['linkPageFilter'])) :?>
                                <form action="./public/<?= $link_view1['linkPageFilter'] ;?>" method="POST">
                                    <div id="slider-range"></div>
                                    <div class="slider__range--output">
                                        <div class="price__output--wrap">
                                            <div class="price--output">
                                                <span>Price :</span><input type="text" name="filter" id="amount" readonly>
                                            </div>
                                            <div class="price--filter">
                                                <button>
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php endif; ?>
                                <!--end page filter-->
                            </div>
                        </div>
                    </div>
                    <!-- End Prize Range -->
                    <!-- Start Category Area -->
                    <div class="htc__category">
                        <h4 class="title__line--4">categories</h4>
                        <ul class="ht__cat__list">
                            <?php foreach ($link_view1['listNameCategory'] as $key1 => $value1) :?>
                            <li><a href="#"><?= $value1['name'] ;?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- End Category Area -->
                    <!-- Start Pro Color -->
                    <div class="ht__pro__color">
                        <h4 class="title__line--4">color</h4>
                        <ul class="ht__color__list">
                            <?php foreach ($link_view1['dataProperties'] as $key1 => $value1) :?>
                            <li class="<?= $value1['value'] ;?>"><a href="./public/ProductGrid/productColor/<?= $value1['id'] ;?>"><?= $value1['value'] ;?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- End Pro Color -->
                    <!-- Start Best Sell Area -->
                    <div class="htc__recent__product">
                        <h2 class="title__line--4">best seller</h2>
                        <div class="htc__recent__product__inner">
                            <!-- Start Single Product -->
                            <?php foreach ($link_view1['bestSeller'] as $key1 => $value1) :?>
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="product-details.html">
                                        <img src="./assets/images/product/<?= $value1['avatar'] ?>" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="product-details.html">Product Title Here</a></h2>
                                    <ul class="rating">
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                        <li class="old"><i class="icon-star icons"></i></li>
                                    </ul>
                                    <ul  class="pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- End Best Sell Area -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Grid -->
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