<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle">
            <h1>Thêm mới Sản phẩm</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=addSp" method="post" enctype="multipart/form-data">
                <div class="row">
                    
                    <!-- left -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" name="tenSanPham" id="tenSanPham"
                                placeholder="Tên sản phẩm">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Giá tiền</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Giá tiền">
                        </div>

                        <div class="mb-3">
                            <label for="id_danhMuc" class="form-label">Tên Danh mục</label>
                            <select class="form-select" name="id_danhMuc" id="id_danhMuc">
                                <?php
                                foreach ($listDm as $key => $value) {
                                    echo '<option value="' . $value["id"] . '">' . $value["tenDanhMuc"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <div class="mb-3">
                            <label for="moTa" class="form-label">Mô Tả</label>
                            <textarea class="form-control" name="moTa" id="moTa" cols="30" rows="5"
                                placeholder="Hãy để lại mô tả"></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Thêm mới">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=listSp" class="btn btn-outline-primary">Danh Sách</a>
                </div>

                <?php
                if (isset($thongBao) && ($thongBao !== "")) {
                    echo $thongBao;
                }
                ?>
            </form>
        </div>
    </div>
</div>