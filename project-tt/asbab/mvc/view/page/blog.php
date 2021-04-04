
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
                            <span class="breadcrumb-item active">Blog</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="ht__blog__wrap blog--page clearfix">
                <?php foreach ($link_view1['data'] as $key => $value) :?>
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="public/bloggrid/detail/<?= $value['id'] ;?>">
                                <img style="max-height: 265px;" src="assets/images/blog/blog-img/<?= $value['avatar'] ?>" alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <?php
                                    $date = date_create($value['date_create']);
                                    $month = date_format($date,"M");
                                    $day = date_format($date,"d");
                                    $year = date_format($date,"Y");
                                ?>
                                <span><?= $month.' '.$day.', '.$year ;?></span>
                            </div>
                            <h2><a href="public/bloggrid/detail/<?= $value['id'] ;?>"><?= $value['tittle'] ?></a></h2>
                            <p><?= $value['sort_content'] ?></p>
                            <div class="blog__btn">
                                <a href="public/bloggrid/detail/<?= $value['id'] ;?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Start PAgenation -->
        <div class="row">
            <div class="col-xs-12">
                <ul class="htc__pagenation">
                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="zmdi zmdi-more"></i></a></li>
                    <li><a href="#">19</a></li>
                    <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End PAgenation -->
    </div>
</section>
<!-- End Blog Area -->
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
