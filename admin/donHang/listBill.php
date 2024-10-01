<div class="row my-5">
    <h3 class="fs-4 mb-3">Danh sách Đơn hàng</h3>

    <div class="row mb10 formDanhsach_loai">

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <form action="index.php?act=listBill" method="post" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="searchDH" class="form-control"
                                placeholder="Nhập mã đơn hàng">
                            
                            <button type="submit" name="submit" class="btn btn-primary">Tìm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col my-3">
            <table id="example" class="table table-striped" style="width:100%">
                <thead class="table bg-white rounded shadow-sm table-hover">
                    <tr>
                        <th scope="col" width="50" class="bg-white">#</th>
                        <th scope="col">Mã Đơn Hàng</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá Trị Đơn Hàng</th>
                        <th scope="col">Ngày Đặt Hàng</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($listBill)) {
                        foreach ($listBill as $value) {
                            $trangThai = get_tranhThaiDH($value['status']);
                            $count_SP = loadall_cart_count($value['id']);

                            $KH = $value['bill_user'] . '
                            <br> ' . $value['bill_email'] . '
                            <br> ' . $value['bill_adress'] . '
                            <br> ' . $value['bill_tel'];

                            echo '
                                 <tr>
                                     <td class="bg-white">#</td>
                                     <th scope="row" class="bg-white">' . $value['id'] . '</th>
                                     <td class="bg-white">' . $KH . '</td>
                                     <td class="bg-white">' . $count_SP . '</td>
                                     <td class="bg-white">' . $value['tongDH'] . ' VND</td>
                                     <td class="bg-white">' . $value['bill_ngayDatHang'] . '</td>
                                     <td class="bg-white">' . $trangThai . '</td>
                                     <td class="bg-white"><a class="btn btn-warning" href="index.php?act=editSp&id=' . $value['id'] . '">Sửa</a>  
                                     <a  class="btn btn-danger" href="index.php?act=deleteSp&id=' . $value['id'] . '" onclick="return confirm(\'Bạn muốn xóa ?\')">Xóa</a></td>
                                 </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="8" style="text-align: center">No data available</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>