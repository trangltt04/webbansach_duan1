<?php
function insert_danhmuc($tenLoai)
{
    $sql = "INSERT INTO danhmuc(tenDanhMuc) VALUES ('$tenLoai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id = $id";
    pdo_query($sql);
}
function list_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id desc"; // sắp xếp 
    $listDm = pdo_query($sql);

    return $listDm;
}
function edit_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenLoai)
{
    $sql = "UPDATE danhmuc
                SET tenDanhMuc='$tenLoai' WHERE id = $id";
    pdo_execute($sql);
}
?>