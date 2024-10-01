<div class="row mb">
    <div class="boxTitle">Tài Khoản</div>
    <div class="boxContent formLogin">
        <?php if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                Xin chào:
                <?php echo $user ?>
            </div>

            <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>

            <?php if ($role == 1) { ?>
                <!-- check nếu là 1 thì hiện admin -->
                <li><a href="admin/index.php">Đăng nhập admin</a></li>
            <?php } ?>

            <li><a href="index.php?act=logout">Đăng xuất</a></li>
        <?php } else { ?>

            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user">
                    <!-- validate -->
                    <span style="color: red">
                        <?= $errDangNhapuser ?>
                    </span> <br>
                </div>
                <div class="row mb10">
                    Mật khẩu <br>
                    <input type="password" name="password"> <br>
                    <!-- validate -->
                    <span style="color: red">
                        <?= $errDangNhappass ?>
                    </span> <br>
                </div>
                <div class="row mb10">
                    <input type="checkbox"> Ghi nhớ tài khoản ? <br>
                </div>
                <div class="row mb10">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
            </form>

            <li><a href="">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        <?php } ?>

    </div>
</div>
<div class="row mb ">
    <div class="boxTitle">Danh mục</div>
    <div class="boxContent2 menuDoc">
        <ul>
            <?php
            foreach ($dsDanhMuc as $key => $value) {
                # code...
                echo '<li><a href="index.php?act=sanpham&iddm=' . $value["id"] . '">' . $value["tenDanhMuc"] . '</a></li>';
            }
            ?>

        </ul>
    </div>
    <div class="boxFooter searchBox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm loại hàng">
            <input type="submit" name="submit" value="Tìm">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxTitle">Top 10</div>
    <div class="boxContent row">
        <?php
        foreach ($dsTop10 as $key => $value) {
            # code... 
            echo '<div class="row mb10 top10">
                            <img src="./uploads/' . $value["image"] . '"
                                alt="">
                            <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '">' . $value["tenSanPham"] . '</a>
                        </div>';
        }
        ?>

    </div>
</div>
</div>