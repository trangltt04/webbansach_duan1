<div class="row">

    <h3 class="fs-4 ">Thêm mới danh muc</h3>

    <div class="formContent">
        <form action="index.php?act=addDm" method="post">


            <div class="row mb-3">
                <label for="maLoai" class="form-label">Mã loại </label><br>
                <input type="text" class="form-control" hidden id="maLoai" name="maLoai" disabled
                    placeholder="Mã loại tự động tăng"> <br>
            </div>
            <div class="row mb-3">
                <label for="maLoai" class="form-label">Tên loại </label><br>
                <input type="text" class="form-control" id="tenLoai" name="tenLoai" placeholder="Tên danh mục"> <br>
            </div>



            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="themMoi" value="Thêm mới">
                <input type="reset" class="btn btn-secondary" value="Reset">
                <a href="index.php?act=listDm" class="btn btn-outline-primary">Danh Sách</a>
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