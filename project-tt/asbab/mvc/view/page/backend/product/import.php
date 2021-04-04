<?php if(!empty($link_view2['dataProduct'])) :?>
<?php foreach ($link_view2['dataProduct'] as $key => $value) :?>
<form action="./public/backend/ProductManager/importUp/<?= $value['id'] ;?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="glyphicon glyphicon-text-background"></i> Nhập hàng</h1>
            <div class="breadcrumb">
                <button type = "submit" name="submit" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-floppy-save"></span>
                    Lưu[Cập nhật]
                </button>
                <a class="btn btn-primary btn-sm" href="admin/product" role="button">
                    <span class="glyphicon glyphicon-remove do_nos"></span> Thoát
                </a>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box" id="view">
                        <div class="box-body">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tên sản phẩm </label>
                                        <input type="text" class="form-control" disabled name="name" style="width:100%" placeholder="Tên sản phẩm" value="<?php echo $value['name'] ?>" >
                                        <div class="error" id="password_error"><?php;?></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <select name="catid" class="form-control" style="width:300px" disabled>
                                            <option value = "">[--Chọn loại sản phẩm--]</option>
                                            <option value = "0">No Parent</option>
                                            <option selected value = ""><?= $link_view2['nameCategoryByID'] ;?></option>

                                        </select>
                                        <div class="error" id="password_error"><?php ;?></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Tổng số lượng đã nhập</label>
                                            <input type="number" class="form-control" name="number1" placeholder="Số lượng" min="0" max="10000" value="<?php echo $value['number'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label>Số lượng sản phẩm đã bán</label>
                                            <input type="number" class="form-control" name="number_buy" placeholder="Số lượng" min="0" max="10000" value="<?php echo $value['number_buy'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label>Số lượng còn của cửa hàng</label>
                                            <input type="number" class="form-control"  placeholder="Số lượng" min="0" max="10000" value="<?php echo $value['number']-$value['number_buy'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Nhập số lượng nhập thêm<span class = "maudo">(*)</span></label>
                                                <input type="number" class="form-control" name="number_add" style="width:100%" placeholder="Số lượng" min="0" max="10000">

                                                <div class="error" id="password_error"><?php;?></div>
                                            </div>
                                        </div>
                                        </div>
                                        </div><!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
            </section>
    </form>
<?php endforeach; ?>
<?php endif; ?>
