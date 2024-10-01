<div class="row mb">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxTitle">CẢM ƠN</div>
            <div class="row boxContent" style="text-align:center">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>

        <?php
        // if(isset($bill) && (is_array($bill))){
        //     extract($bill);
        // }
        
        ?>
        <div class="row mb">
            <div class="boxTitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxContent" style="text-align:center">
                <li>-Mã đơn hàng: DAM-
                    <?= $bill['id']; ?>
                </li>-
                <li>Ngày đặt hàng:
                    <?= $bill['bill_ngayDatHang']; ?>
                </li>
                <li>Tổng đơn hàng:
                    <?= $bill['tongDH']; ?>
                </li>
                <li>Phương thức thanh toán:
                    <?= $bill['bill_phuongThucTT']; ?>
                </li>
            </div>
        </div>

        <div class="row mb">
            <div class="boxTitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxContent billform">
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td>
                            <?= $bill['bill_user']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <?= $bill['bill_adress']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>
                            <?= $bill['bill_email']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Điện thoại</td>
                        <td>
                            <?= $bill['bill_tel']; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb">
            <div class="boxTitle">CHI TIẾT ĐƠN HÀNG</div>
            <div class="row boxContent cart">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    list_BillCT($billCT);
                    ?>
                </table>
            </div>
        </div>
    </div>



</div>