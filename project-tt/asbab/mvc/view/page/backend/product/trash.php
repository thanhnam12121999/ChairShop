 <section class="content-header">
        <h1><i class="glyphicon glyphicon-cd"></i> Thùng rác sản phẩm</h1>
        <div class="breadcrumb">
            <a class="btn btn-primary btn-sm" href="./public/backend/ProductManager" role="button">
                <span class="glyphicon glyphicon-remove do_nos"></span> Thoát
            </a>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box" id="view">
                    <div class="box-header with-border">
                        <!-- /.box-header -->
                        <div class="box-body">
<!--                            --><?php // if($this->session->flashdata('success')):?>
<!--                                <div class="row">-->
<!--                                    <div class="alert alert-success">-->
<!--                                        --><?php //echo $this->session->flashdata('success'); ?>
<!--                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php // endif;?>
                            <div class="row" style='padding:0px; margin:0px;'>
                                <!--ND-->
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Hình</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Người đăng</th>
                                            <th class="text-center">Khôi phục</th>
                                            <th class="text-center">Xóa VV</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($link_view2['dataTrash'] as $key => $value):?>
                                            <tr>
                                                <td class="text-center"><?php echo $value['id'] ?></td>
                                                <td style="width:100px">
                                                    <img src="./assets/images/product/<?php echo $value['avatar'] ?>" alt="<?php echo $value['name'] ?>" class="img-responsive">
                                                </td>
                                                <td><?php echo $value['name'] ?></td>
                                                <td>Chủ Gian Hàng</td>
                                                <td class="text-center">
                                                    <a class="btn btn-success btn-xs" href="./public/backend/ProductManager/restoreProduct/<?php echo $value['id'] ?>" role = "button">
                                                        <span class="glyphicon glyphicon-edit"></span> Khôi phục
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="./public/backend/ProductManager/deleteProduct/<?php echo $value['id'] ?>" onclick="return confirm('Xác nhận xóa ?')" role = "button">
                                                        <span class="glyphicon glyphicon-trash"></span>Xóa VV
                                                    </a>
                                                </td>


                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <ul class="pagination">
<!--                                            --><?php //echo $strphantrang ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.ND -->
                            </div>
                        </div><!-- ./box-body -->
                    </div><!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->
