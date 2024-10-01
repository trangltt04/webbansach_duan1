<?php
function select_CountSanpham()
{
    $sql = "SELECT COUNT(id)
  FROM sanpham";
    $sp = pdo_query_value($sql);
    return $sp;
}
function select_Countdanhmuc()
{
    $sql = "SELECT COUNT(id)
  FROM danhmuc";
    $sp = pdo_query_value($sql);
    return $sp;
}
function select_CountTaikhoan()
{
    $sql = "SELECT COUNT(id)
  FROM taikhoan";
    $sp = pdo_query_value($sql);
    return $sp;
}
function select_CountBinhluan()
{
    $sql = "SELECT COUNT(id)
  FROM binhluan";
    $sp = pdo_query_value($sql);
    return $sp;
}
?>