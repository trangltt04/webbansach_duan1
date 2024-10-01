<div class="row ">
    <div class="d-flex justify-content-between m-3">

        <h3 class="fs-4 mb-2">Danh sách Bình luận</h3>

    </div>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Người Bình luận</th>
                    <th scope="col">Ngày Bình luận</th>
                    <th>#</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($listBinhluan)) {
                    foreach ($listBinhluan as $value) {
                        echo '
                        <tr>
                            <td scope="row">#</td>
                            <td>' . $value['id'] . '</td>
                            <td>' . $value['noiDung'] . '</td>
                            <td>' . $value['tenSanPham'] . '</td>
                            <td>' . $value['user'] . '</td>
                            <td>' . $value['ngayBinhLuan'] . '</td>
                            <td><a href="index.php?act=deleteBl&id=' . $value['id'] . '" onclick="return confirm(\'Bạn muốn xóa ?\')"><input type="button" value="Xóa"></a></td>
                            </tr>
                            ';
                    }
                } else {
                    echo '<tr><td colspan="7" style="text-align: center">No data available</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>



</div>