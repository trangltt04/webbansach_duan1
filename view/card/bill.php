<div class="boxleft mr">
    <div class="row">
        <h1>Thông tin đặt hàng</h1>
    </div>
    <div class="row">
        <form action="index.php?act=billComfirm" method="post">


            <table>
                <?php
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user']['user'];
                    $adress = $_SESSION['user']['adress'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";

                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="user" value="<?= $user ?>"></td>
                </tr>
                <tr>
                    <td>Dịa chỉ</td>
                    <td><input type="text" name="adress" value="<?= $adress ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                </tr>
            </table>

            <div class="row">
                <h1>Thông tin gio hang</h1>
                <table>
                    <tr>
                        <td><input type="radio" value="1" name="phuongThucTT" checked>Thanh toán khi nhận hàng</td>
                        <td><input type="radio" value="2" name="phuongThucTT">Chuyển Khoản</td>
                    </tr>
                </table>
            </div>
            <div>
                <div class="row">
                    <h1>Thông tin gio hang</h1>
                </div>
                <div class="row">
                    <table border="1">
                        <tr>
                            <th>Hinh</th>
                            <th>sp</th>
                            <th>price</th>
                            <th>soluong</th>
                            <th>Thanh tien</th>
                        </tr>
                        <?php $tong = 0;
                        foreach ($_SESSION['myCart'] as $item => $value) {
                            $tong = $tong + $value[5];

                            echo '
                                <tr>
                                    <td>' . $value[3] . '</td>
                                    <td>' . $value[1] . '</td>
                                    <td>' . $value[2] . '</td>
                                    <td>' . $value[4] . '</td>
                                    <td>' . $value[5] . '</td>
                                </tr>';
                        }
                        echo '<tr>
                                <td colspan = "4">Ton hang</td>
                                <td >' . $tong . '</td>
                            </tr>'; ?>
                </div>

                <div>
                    <input type="submit" name="dongydathang" value="Thanh toán">
                    <a href="index.php?act=delCart"><input type="submit" value="Xóa giỏ hàng"></a>

                </div>
        </form>
    </div>
</div>

</div>
<div class="boxright">
</div>