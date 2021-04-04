 <section class="content-header">
        <h1><i class="glyphicon glyphicon-cd"></i> Danh sách sản phẩm</h1>
        <div class="breadcrumb">

            <?php
            if(is_numeric(1)){
                echo '<a class="btn btn-primary btn-sm" href="./public/backend/ProductManager/insertproduct" role="button">
				<span class="glyphicon glyphicon-plus"></span> add product
				</a>';
            }else{
                echo '<span style="color:red"> Không đủ quyền </span>';
            }
            ?>
            <a class="btn btn-primary btn-sm" href="./public/backend/ProductManager/trash" role="button">
                <span class="glyphicon glyphicon-trash"></span> Thùng rác(<?php echo $this->dataProduct->countProductTrash() ;?>)
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
<!--                            --><?php // if($this->session->flashdata('error')):?>
<!--                                <div class="row">-->
<!--                                    <div class="alert alert-error">-->
<!--                                        --><?php //echo $this->session->flashdata('error'); ?>
<!--                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php // endif;?>
                            <div class="row" style='padding:0px; margin:0px;'>
                                <!--ND-->
                                <div class="table-responsive" >
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width:20px">ID</th>
                                            <th>Hình</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng trong kho</th>
                                            <th>Loại sản phẩm</th>
                                            <th class="text-center">Trạng thái</th>
                                            <th class="text-center">Nhập hàng</th>
                                            <th class="text-center" colspan="2">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($link_view2['data'] as $key => $value):?>
                                            <tr>
                                                <td class="text-center"><?php echo $value['id'] ?></td>
                                                <td style="width:70px">
                                                    <img src="assets/images/product/<?php echo $value['avatar'] ;?>" alt="<?php echo "" ;?>" class="img-responsive">
                                                </td>
                                                <td  style="font-size: 16px;max-width: 150px"><?php echo $value['name'] ;?></td>
                                                <td class="text-center"> <?php echo $value['number'] - $value['number_buy'] ;?></td>
                                                <td><?php echo $this->dataCategory->getNameCategoryProduct($value['cate_id']); ?></td>
                                                <td class="text-center">
                                                    <a href="./public/backend/ProductManager/setProductStatus/<?= $value['id']."/".$value['status'] ;?>">
                                                        <?php if($value['status'] == 1):?>
                                                            <span class="glyphicon glyphicon-ok-circle" style="color: green;"></span>
                                                        <?php else: ?>
                                                            <span class="glyphicon glyphicon-remove-circle " style="color: red"></span>
                                                        <?php endif; ?>
                                                    </a>
                                                </td>
                                                <?php
                                                $quyen='';
                                                if(is_numeric(1)){
                                                    $quyen.='
															<td class="text-center"><a class="btn btn-info btn-xs" href="./public/backend/ProductManager/import/'.$value['id'].'" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Nhập hàng
															</a>
															</td>
															';
                                                }else{
                                                    $quyen.='
															<td class="text-center">
															<p class="fa fa-lock" style="color:red"> Không đủ quyền</p>
															</td>';
                                                }
                                                echo $quyen;
                                                ?>

                                                <td class="text-center">
                                                    <?php
                                                    if(is_numeric(1)){
                                                        echo '<a class="btn btn-success btn-xs" href="./public/backend/ProductManager/update/'.$value['id'].'" role = "button">
													<span class="glyphicon glyphicon-edit"></span>Cập nhật
												</a>';
                                                    }else{
                                                        echo '<p class="fa fa-lock" style="color:red"> Không thể sửa</p>';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    if(is_numeric(1)){
                                                        echo '<a class="btn btn-danger btn-xs" href="./public/backend/ProductManager/deleteProductTrash/'.$value["id"].'" role = "button">
																<span class="glyphicon glyphicon-trash"></span> Xóa
															</a>';
                                                    } else {
                                                        echo '<p class="fa fa-lock" style="color:red"> Không thể xóa </p>';
                                                    }
                                                    ?>

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
