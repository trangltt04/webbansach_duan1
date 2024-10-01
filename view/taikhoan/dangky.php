<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">Đăng ký thành viên</div>

            <div class="boxContent row ">
                <form action="index.php?act=dangky" method="post" class="formLogin">
                    email
                    <input type="email" name="email"><br>
                    <!-- validate -->
                    <span style="color: red">
                        <?= $errDangKyemail  ?>
                    </span> <br>

                    user
                    <input type="text" name="user"><br>
                    <!-- validate -->
                    <span style="color: red">
                        <?= $errDangKyuser  ?>
                    </span> <br>

                    password
                    <input type="password" name="password"> <br>
                    <!-- validate -->
                    <span style="color: red">
                        <?=  $errDangKypass  ?>
                    </span> <br>
                    <input type="submit" name="dangky" value="Đăng ký">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 style="color:red">
                    <?php if (isset($thongBao)) {
                        echo $thongBao;
                    } ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="boxright">
        <?php include("view/boxRight.php"); ?>
    </div>
</div>