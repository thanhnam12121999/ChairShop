
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
                            <span class="breadcrumb-item active">Blog Details</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start BlogGrid Details Area -->
<section class="htc__blog__details bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <div class="htc__blog__details__wrap">
                    <?php foreach ($link_view1['data'] as $key => $value) :?>
                        <?= $value['content'] ;?>
                    <?php endforeach; ?>
                    <!-- Start comment Form -->
                    <div class="ht__comment__form">
                        <h4 class="title__line--5">Leave a Comment</h4>
                        <div class="ht__comment__form__inner">
                            <div class="comment__form">
                                <input type="text" placeholder="Name *">
                                <input type="email" placeholder="Email *">
                                <input type="text" placeholder="Website">
                            </div>
                            <div class="comment__form message">
                                <textarea name="message"  placeholder="Your Comment"></textarea>
                            </div>
                        </div>
                        <div class="ht__comment__btn--2 mt--30">
                            <a class="fr__btn" href="#">Send</a>
                        </div>
                    </div>
                    <!-- End comment Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End BlogGrid Details Area -->