<div class="row">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">Quên mật khẩu</div>

            <div class="boxContent row ">
                <form action="index.php?act=quenmk" method="post" class="formLogin">
                    email
                    <input type="email" name="email"><br>
                    
                    <input type="submit" name="guiEmail" value="Gửi">
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