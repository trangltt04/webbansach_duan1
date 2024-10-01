<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">Cập nhật tài khoản</div>

            <?php if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }

            ?>
            <div class="boxContent row ">
                <form action="index.php?act=edit_taikhoan" method="post" class="formLogin">
                    <input type="text" name="id" hidden value="<?php echo $id ?>">
                    user
                    <input type="text" name="user" value="<?php echo $user ?>">
                    email
                    <input type="email" name="email" value="<?php echo $email ?>"><br>
                    password
                    <input type="password" name="pass" value="<?php echo $pass ?>"> <br>
                    adress
                    <input type="text" name="adress" value="<?php echo $adress ?>"> <br>
                    tel
                    <input type="text" name="tel" value="<?php echo $tel ?>">
                    <input type="submit" name="update" value="Cập nhật">
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