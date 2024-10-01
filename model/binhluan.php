<?php
function insert_binhluan($idSp, $idUser, $noiDung, $ngayBinhLuan)
{

    $sql = "INSERT INTO binhluan(idSp, idUser, noiDung, ngayBinhLuan) VALUES ('$idSp', '$idUser', '$noiDung', '$ngayBinhLuan')";
    pdo_execute($sql);
}
function selectAll_binhluan($idSp)
{
    $sql = "SELECT * FROM binhluan where idSp = $idSp";
    // var_dump($sql);
    // die();
    $listBl = pdo_query($sql);
    return $listBl;
}
function select_binhluan()
{
    $sql = "SELECT binhluan.id, binhluan.noiDung, taikhoan.user, binhluan.ngayBinhLuan, sanpham.tenSanPham
    FROM binhluan 
    JOIN taikhoan 
    ON taikhoan.id = binhluan.idUser 
    JOIN sanpham 
    ON sanpham.id = binhluan.idSp
    ORDER BY id desc";
    $dsBl = pdo_query($sql);
    return $dsBl;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id = $id";
    pdo_query($sql);
}
?>