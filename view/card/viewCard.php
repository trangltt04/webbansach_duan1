<div class="boxleft mr">
    <div class="row">
        <h1>Gio hang</h1>
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
            <?php
            $tong = 0;
            $i = 0;
            foreach ($_SESSION['myCart'] as $item => $value) {
                $tong = $tong + $value[5];
                // $i++;
                echo '
                    <tr>
                        <td><img style="width: 110px; height:70px" alt="loading..." src="./uploads/' . $value[3] . '"
                        alt=""></td>
                        <td>' . $value[1] . '</td>
                        <td>' . $value[2] . '</td>
                        <td>' . $value[4] . '</td>
                        <td>' . $value[5] . '</td>
                        <td><a href="index.php?act=deleteCard&idCard=' . $i . '"> <button>Xóa</button></a></td>
                    </tr>';
            }
            echo '<tr>
                    <td colspan = "4">Ton hang</td>
                    <td >' . $tong . '</td>
                </tr>'; ?>

        </table>
    </div>
</div>
<div>

    <!-- <a href="index.php?act=bill"><input type="submit" value="Tiếp tuc đạt hàng"></a> -->
    <a href="index.php?act=deleteCard"><input type="submit" value="Xóa giỏ hàng"></a>

</div>
<div class="boxright">
</div>