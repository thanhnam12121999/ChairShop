
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
                                <!-- start error -->
                                <?php if (!empty($_SESSION['error'])) :?>
                                    <div style="margin-top: 20px;" class="row">
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Warning!</strong> <?= $_SESSION['error'] ;?>
                                            <?php unset($_SESSION['error']) ;?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- end error -->
                                <!-- Start Single Product -->
                                <?php if (!empty($link_view1['data'])) :?>
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
                                <?php endif; ?>
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
                            <?php if (!empty($link_view1['totalPage']) && !empty($link_view1['currentPage']) && !empty($link_view1['keySearch'])) :?>
                                <?php
                                    $currentpage = (int)$link_view1['currentPage'] ;
                                    $totalPage = (int)$link_view1['totalPage'] ;
                                    $keySearch = $link_view1['keySearch'] ;
                                ?>
                            <!--prev -->
                            <?php if ($currentpage > 1 && $totalPage > 1) :?>
                                <li><a href="public/search/key/<?= $keySearch."/".($currentpage - 1) ;?>"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <?php endif; ?>
                            <!--prev -->
                            <?php for ($i = 1; $i <= $totalPage; $i++) :?>
                                <?php if ($i == $currentpage) :?>
                                    <li class="active"><a href="public/search/key/<?= $keySearch."/".$i ;?>"><?= $i ;?></a></li>
                                <?php elseif ($i > ($currentpage -2 ) && $i < ($currentpage + 2 )) :?>
                                    <li><a href="public/search/key/<?= $keySearch."/".$i ;?>"><?= $i ;?></a></li>
                                <?php endif; ?>
                            <?php endfor; ?>
                                <!-- next -->
                                <?php if ($currentpage > 1 && $totalPage > 1) :?>
                                    <li><a href="public/search/key/<?= $keySearch."/".($currentpage + 1) ;?>"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                <?php endif; ?>
                                <!-- next -->
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- End Pagenation -->
            </div>
            <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                <div class="htc__product__leftsidebar">
                    <!-- Start Category Area -->
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
                    <!-- End Category Area -->

                    <!-- Start Pro Size -->
                    <div class="ht__pro__size">
                        <h4 class="title__line--4">Size</h4>
                        <ul class="ht__size__list">
                            <li><a href="#">xs</a></li>
                            <li><a href="#">s</a></li>
                            <li><a href="#">m</a></li>
                            <li><a href="#">reld</a></li>
                            <li><a href="#">xl</a></li>
                        </ul>
                    </div>
                    <!-- End Pro Size -->
                    <!-- Start Tag Area -->
                    <div class="htc__tag">
                        <h4 class="title__line--4">tags</h4>
                        <ul class="ht__tag__list">
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Jewelry</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Aceessories</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Watch</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div>
                    <!-- End Tag Area -->
                    <!-- Start Compare Area -->
                    <div class="htc__compare__area">
                        <h4 class="title__line--4">compare</h4>
                        <ul class="htc__compare__list">
                            <li><a href="#">White men’s polo<i class="icon-trash icons"></i></a></li>
                            <li><a href="#">T-shirt for style girl...<i class="icon-trash icons"></i></a></li>
                            <li><a href="#">Basic dress for women...<i class="icon-trash icons"></i></a></li>
                        </ul>
                        <ul class="ht__com__btn">
                            <li><a href="#">clear all</a></li>
                            <li class="compare"><a href="#">Compare</a></li>
                        </ul>
                    </div>
                    <!-- End Compare Area -->
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