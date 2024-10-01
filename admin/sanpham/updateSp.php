<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle mb-3">
            <h1>Cập nhật loại hàng hóa</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=updateSp" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <!-- Product Name -->
                        <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="tenSanPham" value="<?= $SP["tenSanPham"] ?>">
                        
                        <!-- Price -->
                        <label for="price" class="form-label mt-3">Giá tiền</label>
                        <input type="text" class="form-control" name="price" value="<?= $SP["price"] ?>">
                        
                        <!-- Category -->
                        <label for="id_danhMuc" class="form-label mt-3">Tên Danh mục</label>
                        <select class="form-select" name="id_danhMuc" id="id_danhMuc">
                            <?php
                            foreach ($listDm as $key => $value) {
                                if ($SP["id_danhMuc"] == $value["id"]) {
                                    echo '<option value="' . $value["id"] . '" selected>' . $value["tenDanhMuc"] . '</option>';
                                } else {
                                    echo '<option value="' . $value["id"] . '">' . $value["tenDanhMuc"] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <!-- Image -->
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">

                        <!-- Description -->
                        <label for="moTa" class="form-label mt-3">Mô Tả</label>
                        <textarea class="form-control" name="moTa" id="moTa" cols="30" rows="5" placeholder="Hãy để lại mô tả"><?= $SP["moTa"] ?></textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?= $id ?>">

                <!-- Buttons -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="submit" name="submit" class="btn btn-primary" value="Cập nhật">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                        <a href="index.php?act=listSp" class="btn btn-outline-primary">Danh Sách</a>
                    </div>
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
