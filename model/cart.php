<?php
function viewCard()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $item => $value) {
        $tong = $tong + $value[5];

        echo '
    <tr>
        <td>' . $value[3] . '</td>
        <td>' . $value[1] . '</td>
        <td>' . $value[2] . '</td>
        <td>' . $value[4] . '</td>
        <td>' . $value[5] . '</td>
        <td><a href="index.php?act=deleteCard&idCard=' . $item . '"> <button>Xóa</button></a></td>
    </tr>';
    }
    echo '<tr>
            <td colspan = "4">Ton hang</td>
            <td >' . $tong . '</td>
        </tr>';

}
function list_BillCT($billCT)
{
    $tong = 0;

    echo '<tr>
                <th>Hinh</th>
                <th>sp</th>
                <th>price</th>
                <th>soluong</th>
                <th>Thanh tien</th>
        </tr>';

    foreach ($billCT as $value) {
        $tong = $tong + $value['thanhTien'];

        echo '
             <tr>
                 <td><img style="width: 110px; height:70px" alt="loading..." src="./uploads/' . $value['img'] . '"
                 alt=""></td>
                 <td>' . $value['name'] . '</td>
                 <td>' . $value['price'] . '</td>
                 <td>' . $value['soLuong'] . '</td>
                 <td>' . $value['thanhTien'] . '</td>
             </tr>';
    }
    echo '<tr>
            <td colspan = "4">Ton hang</td>
            <td >' . $tong . '</td>
        </tr>';
}
function tongDH()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $value) {
        $tong = $tong + $value[5];
        return $tong;
    }

}
function insert_bill($id_User, $user, $adress, $email, $tel, $ngayDatHang, $tongDH, $phuongThucTT)
{
    $sql = "INSERT INTO bill
    (id_User, bill_adress, bill_email, bill_tel, bill_user, bill_ngayDatHang, bill_phuongThucTT, tongDH) 
    VALUES 
    ('$id_User','$adress','$email','$tel','$user','$ngayDatHang','$phuongThucTT','$tongDH')";
    return pdo_execute_return_lastInsertId($sql);

    // trả về id oder
}
function insert_cart($idUser, $idSp, $name, $price, $img, $soLuong, $thanhTien, $idBill)
{
    $sql = "INSERT INTO cart(idUser, idSp, name, price, img, soLuong, thanhTien, idBill) 
    VALUES 
    ('$idUser','$idSp','$name','$price','$img','$soLuong','$thanhTien','$idBill')";

    return pdo_execute($sql);
}
function loadOne_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idBill)
{
    $sql = "SELECT * FROM cart WHERE idBill = $idBill";
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idBill)
{
    $sql = "SELECT * FROM cart WHERE idBill = $idBill";
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($searchDH = "", $idUser)
{
    $sql = "SELECT * FROM bill WHERE 1";
    // nếu có id_User thì lọc theo id_User
    //  còn không thì select * form
    if ($idUser > 0)
        $sql .= " AND id_User = $idUser";
    if ($searchDH != "")
        $sql .= " AND id like '%$searchDH%'";

    $sql .= " order by id desc";
    $bill_list = pdo_query($sql);
    return $bill_list;
}
function get_tranhThaiDH($status)
{
    switch ($status) {
        case 0:
            $trangThai = "Đơn hàng mới";
            break;
        case 1:
            $trangThai = "Đang xử lý";
            break;
        case 2:
            $trangThai = "Đang giao hàng";
            break;
        case 3:
            $trangThai = "Đã Giao Hàng";
            break;
        default:
            $trangThai = "Đang cập nhật";
            break;
    }
    return $trangThai;
}
function list_thongKe()
{
    $sql = "SELECT danhmuc.tenDanhMuc, COUNT(sanpham.id) AS countSP,
    MIN(sanpham.price) AS minSP, MAX(sanpham.price) AS maxSP, AVG(sanpham.price)
FROM sanpham
LEFT JOIN danhmuc ON danhmuc.id = sanpham.id_danhMuc
GROUP BY danhmuc.id
ORDER BY danhmuc.id DESC;";
    $bill = pdo_query($sql);
    return $bill;
}
?>