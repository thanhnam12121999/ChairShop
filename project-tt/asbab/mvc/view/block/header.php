

<!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container">
                <div class="row">
                    <div class="menumenu__container clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                            <div class="logo">
                                <a href="./public/home"><img src="assets/images/logo/6.png" alt="logo images"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                            <nav class="main__menu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="./public/home">Home</a></li>
                                    <li class="drop"><a href="public/officechair">OFFICE CHAIR</a></li>
                                    <li class="drop"><a href="./public/productgrid">Gaming Chair</a></li>
                                    <li class="drop"><a href="./public/productgrid">Product</a>
                                    </li>
                                    <li class="drop"><a href="public/bloggrid">blog</a>
                                        <ul class="dropdown">
                                            <li><a href="public/bloggrid">Blog Grid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="public/contactus">contact</a></li>
                                </ul>
                            </nav>

                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="./public/home">Home</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="cart.html">Cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="product-grid.html">product grid</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                            <div class="header__right">
                                <div class="header__search search search__open">
                                    <a class="icon-pad-right" href="#"><i class="icon-magnifier icons"></i></a>
                                </div>
                                <div class="header__account">
                                    <a class="icon-pad-right"><i class="icon-user icons"></i></a>
                                    <div class="dropdown-user">
                                        <a class="dropdown-item" href="./public/profile">Profile</a>
                                        <a class="dropdown-item" href="./public/login/getLogout">Logout</a>
                                    </div>
                                </div>
                                <div class="htc__shopping__cart">
                                    <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                    <a class="icon-pad-right" ><span class="htc__qua"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']): '0' ;?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="public/search" method="post">
                                <input placeholder="Search here... " name="search" type="text">
                                <button name="submit" type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Cart Panel -->

        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
<!--list product cart -->
                <?php $total = 0; ?>
                <?php if (!empty($link_view1['getListCart'])) :?>
                <?php foreach ($link_view1['getListCart'] as $key1 => $value1)  :?>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="./assets/images/product/<?= $value1['avatar'] ?>" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html"><?= $value1['name'] ?></a></h2>
                            <span class="quantity">QTY: <?= $_SESSION["cart"][$value1['id']] ?></span>
                            <span class="shp__price">$<?= $value1['price_saled'] ?></span>
                        </div>
                        <div class="remove__btn">
                            <a href="./public/detail/deletePro/<?= $value1['id'] ?>" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    $total += $value1['price_saled'];
                ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$<?= $total ?></li>
                </ul>
<!---->
                <ul class="shopping__btn">
                    <li><a href="./public/cart">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
