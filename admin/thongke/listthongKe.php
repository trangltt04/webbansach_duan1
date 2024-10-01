<div class="row my-5">


    <div class=" d-flex justify-content-between">
        <div>
            <h3 class="fs-4 mb-3">Thống kê Sản Phẩm theo loại</h3>
        </div>

        <div>
            <a href="index.php?act=bieudo"><button type="submit" class="btn btn-primary">Xem Biểu đồ</button></a>
        </div>
    </div>
    <div class="row mb10 formDanhsach_loai">

        <div class="col my-3">
            <table id="example" class="table table-striped" style="width:100%">
                <thead class="table bg-white rounded shadow-sm table-hover">
                    <tr>
                        <th scope="col" width="50" class="bg-white">#</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá Cao Nhất</th>
                        <th scope="col">Giá Thấp Nhất</th>
                        <th scope="col">Giá Trung Bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($listthongKe)) {
                        foreach ($listthongKe as $value) {
                            echo '
                                 <tr>
                                     <td class="bg-white">#</td>
                                     <th scope="row" class="bg-white">' . $value['tenDanhMuc'] . '</th>
                                     <td class="bg-white">' . $value['countSP'] . '</td>
                                     <td class="bg-white">' . $value['maxSP'] . ' VND</td>
                                     <td class="bg-white">' . $value['minSP'] . ' VND</td>
                                     <td class="bg-white">' . $value['AVG(sanpham.price)'] . ' VND</td>
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