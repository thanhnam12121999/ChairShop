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
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Area -->
<section class="htc__contact__area ptb--100 bg__white">
    <div class="container">
        <!-- start error -->
        <?php if (isset($_SESSION['error'])) :?>
        <div class="row">
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Warning!</strong> <?= $_SESSION['error'] ;?>
                <?php unset($_SESSION['error']) ;?>
            </div>
        </div>
        <?php endif; ?>
        <!-- end error -->
        <!-- start success -->
        <?php if (isset($_SESSION['success'])) :?>
            <div class="row">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <?= $_SESSION['success'] ;?>
                    <?php unset($_SESSION['success']) ;?>
                </div>
            </div>
        <?php endif; ?>
        <!-- end success -->
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="map-contacts--2">
                    <div id="googleMap"></div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <h2 class="title__line--6">CONTACT US</h2>
                <div class="address">
                    <div class="address__icon">
                        <i class="icon-location-pin icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">our address</h2>
                        <p>666 5th Ave New York, NY, United </p>
                    </div>
                </div>
                <div class="address">
                    <div class="address__icon">
                        <i class="icon-envelope icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">openning hour</h2>
                        <p>666 5th Ave New York, NY, United </p>
                    </div>
                </div>

                <div class="address">
                    <div class="address__icon">
                        <i class="icon-phone icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">Phone Number</h2>
                        <p>123-6586-587456</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-form-wrap mt--60">
                <div class="col-xs-12">
                    <div class="contact-title">
                        <h2 class="title__line--6">SEND A MAIL</h2>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form id="contact-form" action="public/contactus/sendMessage" method="post">
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="text" name="name" placeholder="Your Name*">
                                <input type="email" name="email" placeholder="Mail*">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box message">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <button name="submit" type="submit" class="fv-btn">Send MESSAGE</button>
                        </div>
                    </form>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
<!-- End Banner Area -->

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo "></script>-->


