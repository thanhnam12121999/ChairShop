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
                            <span class="breadcrumb-item active">Profile</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container bootstrap snippet mt--50 mb--50">
    <div class="row">
        <div class="col-sm-10" style="padding-left: 8%"><h2>Profile</h2></div>
        <div  class="col-sm-2"><a href="./public/home" class="pull-right"><img style="width: 40px;height: 40px" title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <?php foreach ($link_view1['data'] as $key => $value) :?>
    <form class="form" enctype="multipart/form-data" action="./public/profile/updateInfor/<?= $value['id'] ;?>" method="post" id="registrationForm">
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div class="text-center">
                <img  src="./assets/images/customer/<?= $value['avatar'] ;?>" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6 style="margin-top: 10px">Upload a different photo...</h6>
                <input type="file"  name="image" class="text-center center-block file-upload" style="margin-top: 20px">
            </div></hr><br>
            <?php if (!empty($_SESSION['error'])) :?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Waring!</strong><?= $_SESSION['error'] ;?>
                    <?php unset($_SESSION['error']) ;?>
                </div>
            <?php endif ;?>
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            </ul>


            <div class="tab-content">
                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">
                    <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>User Name</h4></label>
                                <p><?= $value['username'] ;?></p>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Name</h4></label>
                                <input type="text" class="form-control" value="<?= $value['fullname'] ;?>" name="fullname" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" value="<?= $value['phone'] ;?>" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Birthday</h4></label>
                                <input id="birthday" type="text" class="form-control" value="<?=$value['birthday'] ;?>" name="birthday" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" value="<?= $value['email'] ;?>" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label><h4>Address</h4></label>
                                <input type="text" class="form-control" value="<?= $value['address'] ;?>" name="address" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                        </div>

                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->
        </form>
        <?php endforeach; ?>
    </div><!--/col-9-->
</div><!--/row-->
