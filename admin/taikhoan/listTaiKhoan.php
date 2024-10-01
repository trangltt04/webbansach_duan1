<div class="row ">
    <div class="d-flex justify-content-between m-3">

        <h3 class="fs-4 mb-2">Danh sách Tài khoản</h3>

    </div>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">

            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Mã Tài khoản</th>
                    <th scope="col">Tên người dùng</th>
                    <!-- <th scope="col">Mật khẩu</th> -->
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số Điện thoại</th>
                    <th scope="col">Vai trò (role)</th>
                    <th>#</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($listTk)) {
                    foreach ($listTk as $item => $value) {
                        if ($value['role'] == 0) {
                            $role = "Người dùng";
                        } else {
                            $role = "Admin";
                        }
                        echo '
                        <tr>
                            <td scope="row">' . $item . '</td>
                            <td>' . $value['id'] . '</td>
                            <td>' . $value['user'] . '</td>
                            <td>' . $value['email'] . '</td>
                            <td>' . $value['adress'] . '</td>
                            <td>' . $value['tel'] . '</td>
                            <td>' . $role . '</td>
                            <td><a href="index.php?act=deleteTk&id=' . $value['id'] . '"><input type="button" value="Xóa" onclick="return confirm(\'Bạn muốn xóa ?\')"></a></td>
                        </tr>
                ';
                    }
                } else {
                    echo '<tr><td colspan="9" style="text-align: center">No data available</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>



</div>