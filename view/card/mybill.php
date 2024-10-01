<div class="boxleft mr">
    <div class="row">
        <h1>Don hang cua toi</h1>
    </div>
    <div class="row boxContent card">
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt mua</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
            <?php
            if (is_array($list_bill)) {
                foreach ($list_bill as $value) {
                    $trangThai = get_tranhThaiDH($value['status']);
                    $count_SP = loadall_cart_count($value['id']);
                    echo '
                        <tr>
                            <td>DAM_' . $value['id'] . '</td>
                            <td>' . $value['bill_ngayDatHang'] . '</td>
                            <td>' . $count_SP . '</td>
                            <td>' . $value['tongDH'] . '</td>
                            <td>' . $trangThai . '</td>
                        </tr>';

                }
            }
            ?>

        </table>
    </div>
</div>