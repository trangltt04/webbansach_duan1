<?php
function insert_sanpham($tenSanPham, $price, $moTa, $id_danhMuc, $filename)
{
    $sql = "INSERT INTO sanpham(tenSanPham, price, image, moTa, id_danhMuc) 
    VALUES ('$tenSanPham','$price','$filename','$moTa','$id_danhMuc')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id = $id";
    pdo_query($sql);
}
function listAll_sanpham_Home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listSp = pdo_query($sql);
    return $listSp;
}
function listAll_sanpham_Top10()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotXem DESC LIMIT 0,10";
    $listSp = pdo_query($sql);
    return $listSp;
}
function list_sanpham($searchName, $id_danhMuc)
{
    // $sql = "SELECT sanpham.id, tenSanPham, price, image, moTa, luotXem, sanpham.id_danhMuc, danhmuc.tenDanhMuc 
    //         FROM sanpham 
    //         JOIN danhmuc ON sanpham.id_danhMuc = danhmuc.id
    //         WHERE 1";

    $sql = "SELECT sanpham.id, tenSanPham, price, image, moTa, luotXem, sanpham.id_danhMuc
    FROM sanpham 
    WHERE 1";

    if ($searchName != "") {
        $sql .= " AND tenSanPham LIKE '%" . $searchName . "%'";
    }

    if ($id_danhMuc > 0) {
        $sql .= " AND sanpham.id_danhMuc = " . $id_danhMuc;
    }

    $sql .= " ORDER BY sanpham.id DESC"; // sắp xếp 
    $listSp = pdo_query($sql);

    return $listSp;
}

function load_ten_dm($iddm)
{
    if ($iddm < 0) {
        return "";
    }
    $sql = "SELECT * FROM danhmuc WHERE id = $iddm";
    $tendm = pdo_query_one($sql);
    return $tendm;
}
function edit_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $SP = pdo_query_one($sql);
    return $SP;
}
function Select_sanpham_cungLoai($id, $id_danhMuc)
{
    $sql = "SELECT * FROM sanpham WHERE id_danhMuc = $id_danhMuc and id != $id";
    $listSp = pdo_query($sql);
    return $listSp;
}
function update_sanpham($id, $tenLoai)
{
    $sql = "UPDATE sanpham
                SET tenSanPham='$tenLoai' WHERE id = $id";
    pdo_execute($sql);
}
function update_sanpham_coHinhAnh($tenSanPham, $price, $filename, $moTa, $id_danhMuc, $id)
{
    $sql = "UPDATE sanpham SET 
    tenSanPham='$tenSanPham',
    price='$price',
    image='$filename',
    moTa='$moTa',
    id_danhMuc='$id_danhMuc'
     WHERE  id='$id'";
    pdo_execute($sql);
}

function update_sanpham_KhongHinhAnh($tenSanPham, $price, $moTa, $id_danhMuc, $id)
{
    $sql = "UPDATE sanpham SET 
    tenSanPham='$tenSanPham',
    price='$price',
    moTa='$moTa',
    id_danhMuc='$id_danhMuc'
     WHERE  id='$id'";
    pdo_execute($sql);

}
?>