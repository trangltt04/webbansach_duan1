<div class="row my-5">
    <h3 class="fs-4 mb-3">Danh sách sản phẩm</h3>

    <div class="row mb10 formDanhsach_loai">

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <form action="index.php?act=listSp" method="post" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="searchName" class="form-control"
                                placeholder="Tìm kiếm sản phẩm...">
                            <select name="id_danhMuc" class="form-select" aria-label="Default select example">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($listDm as $key => $value) {
                                    echo '<option value="' . $value["id"] . '">' . $value["tenDanhMuc"] . '</option>';
                                }
                                ?>
                            </select>
                            <button type="submit" name="submit" class="btn btn-primary">Tìm</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="d-flex justify-content-md-end">
                        <a href="index.php?act=addSp" class="btn btn-primary">Nhập thêm</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col my-3">
            <table id="example" class="table table-striped" style="width:100%">
                <thead class="table bg-white rounded shadow-sm table-hover">
                    <tr>
                        <th scope="col" width="50" class="bg-white">#</th>
                        <th scope="col">Mã Sản Phẩm</th>
                        <th scope="col">Tên Sản phẩm</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($listSp)) {
                        foreach ($listSp as $value) {
                            echo '
                                 <tr>
                                     <td class="bg-white">#</td>
                                     <th scope="row" class="bg-white">' . $value['id'] . '</th>
                                     <td class="bg-white">' . $value['tenSanPham'] . '</td>
                                     <td class="bg-white"><img src="../uploads/' . $value["image"] . '" style="width: 110px; height:70px" alt="loading..."></td>
                                     <td class="bg-white">' . $value['price'] . '</td>
                                     <td class="bg-white">' . $value['luotXem'] . '</td>
                                     <td class="bg-white">' . $value['id_danhMuc'] . '</td>
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