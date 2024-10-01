<div class="row">

    <div class="d-flex justify-content-between m-3">

        <h3 class="fs-4 ">Danh sách danh mục</h3>

        <div class="d-flex justify-content-md-end">
            <a href="index.php?act=addDm" class="btn btn-primary">Nhập thêm</a>
        </div>
    </div>


    <div class="row mb10 formDanhsach_loai">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th>#</th>
            </tr>
            <?php
            if (!empty($listDm)) {
                foreach ($listDm as $value) {
                    echo '
                             <tr>
                                 <td scope="row">#</td>
                                 <td>' . $value['id'] . '</td>
                                 <td>' . $value['tenDanhMuc'] . '</td>
                                 <td><a href="index.php?act=editDm&id=' . $value['id'] . '"><input type="button" value="Sửa"></a> 
                                  <a href="index.php?act=deleteDm&id=' . $value['id'] . '" onclick="return confirm(\'Bạn muốn xóa ?\')"><input type="button" value="Xóa"></a></td>
                             </tr>
                                    ';
                }
            } else {
                echo '<tr><td colspan="4" style="text-align: center">No data available</td></tr>';
            }


            ?>

        </table>
    </div>

    <!-- <div class="row mb10">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addDm"><input type="button" value="Nhập thêm"></a>
    </div> -->
</div>