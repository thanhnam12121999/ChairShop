<?php if(!empty($link_view2['dataProduct'])) :?>
<?php foreach ($link_view2['dataProduct'] as $key => $value) :?>
<form action="./public/backend/ProductManager/updateProductUp/<?= $value['id'] ;?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
    <section class="content-header">
        <h1><i class="glyphicon glyphicon-cd"></i> Cập nhật sản phẩm</h1>
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
                                <label>Tên sản phẩm <span class = "maudo">(*)</span></label>
                                <input type="text" class="form-control" name="name" style="width:100%" placeholder="Tên sản phẩm" value="<?php echo $value['name'] ?>">
                                <div class="error" id="password_error"><?php ;?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6" style="padding-left: 0px;">
                                        <div class="form-group">
                                            <label>Loại sản phẩm<span class = "maudo">(*)</span></label>
                                            <select name="catid" class="form-control">
                                                <option value = "">[--Chọn loại sản phẩm--]</option>
                                                <?php foreach ($link_view2['listNameCategory'] as $key1 => $value1) :?>
                                                    <option value = "<?= $value1['id'] ;?>"><?= $value1['name'] ;?></option>
                                                <?php endforeach; ;?>
                                            </select>
                                            <div class="error" id="password_error"><?php ;?></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;">
                                        <div class="form-group">
                                            <label>Nhà cung cấp<span class = "maudo">(*)</span></label>
                                            <select name="producer" class="form-control">
                                                <option value = "">[--Chọn nhà cung cấp--]</option>
                                                <?php foreach ($link_view2['dataProducer'] as $key1 => $value1) :?>
                                                    <option value = "<?= $value1['id'] ;?>"><?= $value1['name'] ;?></option>
                                                <?php endforeach; ;?>
                                            </select>
                                            <div class="error" id="password_error"><?php ;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea name="sortDesc" class="form-control" ><?php echo $value['sortDesc'] ?></textarea>
                                <script>CKEDITOR.replace('sortDesc');</script>
                            </div>
                            <div class="form-group">
                                <label>Chi tiết sản phẩm</label>
                                <textarea name="detail" id="detail" class="form-control"><?php echo $value['detail'] ?></textarea>
                                <script>CKEDITOR.replace('detail');</script>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Giá gốc</label>
                                <input name="price_root" class="form-control" type="number" value="<?php echo $value['price'] ?>" min="0"  max="1000000000">
                            </div>
                            <div class="form-group">
                                <label>Khuyến mãi (%)</label>
                                <input name="sale_of" class="form-control" type="number" value="<?php echo $value['sale_percent'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input name="price_buy" class="form-control" type="number" value="<?php echo $value['price_saled'] ?>" min="0"  max="1000000000">
                                <div class="error" id="password_error"><?php ;?></div>
                            </div>
                            <div class="form-group">
                                <label>Số lượng tồn kho</label>
                                <input name="number" class="form-control" type="number" value="<?php echo $value['number'] - $value['number_buy'] ?>" min="1" step="1" max="1000" disabled>
                            </div>
                            <div class="form-group">
                                <label>Số lượng đã bán</label>
                                <input name="number" class="form-control" type="number" value="<?php echo $value['number_buy'] ?>" min="1" step="1" max="1000" disabled>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1" <?php if($value['status'] == 1) {echo 'selected';}?> >Đang kinh doanh</option>
                                    <option value="0" <?php if($value['status'] == 0) {echo 'selected';}?>>Ngừn kinh doanh</option>
                                </select>
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
