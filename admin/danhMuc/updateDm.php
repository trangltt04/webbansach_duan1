<div class="row">
    <h3 class="fs-4 ">Sửa danh mục</h3>

    <div class="formContent">
        <form action="index.php?act=updateDm" method="post">

            <div class="row mb-3">
                <label for="maLoai" class="form-label">Mã loại </label><br>
                <input type="text" class="form-control" id="maLoai" name="maLoai" disabled
                    placeholder="Mã loại tự động tăng" value="<?= isset($dm['id']) ? $dm['id'] : ''; ?>"> <br>
            </div>


            <div class="row mb-3">
                <label for="maLoai" class="form-label">Tên loại </label><br>
                <input type="text" class="form-control" id="tenLoai" name="tenLoai" placeholder="Tên danh mục"
                    value="<?= isset($dm['tenDanhMuc']) ? $dm['tenDanhMuc'] : ""; ?>"> <br>
            </div>

            <!-- Buttons -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="id" hidden
                        value="<?= (isset($dm['id']) && $dm['id'] > 0) ? $dm['id'] : ''; ?>">
                    <input type="submit" name="update" class="btn btn-primary" value="Cập nhật">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=listDm" class="btn btn-outline-primary">Danh Sách</a>
                </div>
            </div>

            <?php if (isset($thongBao) && ($thongBao !== "")) {
                echo $thongBao;
            }
            ?>
        </form>
    </div>
</div>
</div>
</div>