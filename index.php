<?php
session_start();
include("model/connect.php");
include("model/danhmuc.php");
include("model/sanpham.php");
include("model/cart.php");
include("model/taikhoan.php");
include("view/header.php");

$spNew = listAll_sanpham_Home();
$dsDanhMuc = list_danhmuc();
$dsTop10 = listAll_sanpham_Top10();

$errDangNhappass = "";
$errDangNhapuser = "";

$errDangKypass = "";
$errDangKyuser = "";
$errDangKyemail = "";


if (!isset($_SESSION['myCart'])) {
    $_SESSION['myCart'] = [];
}

if ((isset($_GET["act"])) && ($_GET["act"]) != "") {
    $act = $_GET["act"];
    switch ($act) {
        case 'gioithieu':
            include("view/gioithieu.php");
            break;
        case 'lienhe':
            include("view/lienhe.php");
            break;
        case 'sanphamct':
            if ((isset($_GET["idsp"])) && ($_GET["idsp"]) > 0) {
                $id = $_GET["idsp"];
                $sanPhamCt = edit_sanpham($id);
                $Select_sanpham_cungLoai = Select_sanpham_cungLoai($id, $sanPhamCt["id_danhMuc"]);
            } else {
                include("view/home.php");
            }
            include("view/sanphamct.php");
            break;
        case 'sanpham':
            if ((isset($_POST["kyw"])) && ($_POST["kyw"]) != "") {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            if ((isset($_GET["iddm"])) && ($_GET["iddm"]) > 0) {
                $iddm = $_GET["iddm"];
            } else {
                $iddm = 0;
            }
            $listSp = list_sanpham($kyw, $iddm);
            include("view/sanpham.php");
            break;
        case 'dangky':
            // nếu có tồn tại và có nhấp vào nút dangky
            if ((isset($_POST["dangky"])) && ($_POST["dangky"])) {
                $email = $_POST["email"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                $isCheck = true;
                
                if (empty($user)) {
                    $errDangKyuser = "Nhập user";
                    $isCheck = false;
                }
                if (empty($user)) {
                    $errDangKyemail = "Nhập email";
                    $isCheck = false;
                }
                if (empty($email)) {
                    $errDangKypass = "Nhập pass";
                    $isCheck = false;
                }
                if ($isCheck == true) {
                    insert_taiKhoan($user, $pass, $email);
                    $thongBao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện bình luận!";
                }
            }
            include("view/taikhoan/dangky.php");
            break;
        case 'dangnhap':
            if ((isset($_POST["dangnhap"])) && ($_POST["dangnhap"])) {
                $user = $_POST["user"];
                $pass = $_POST["password"];
                $isCheck = true; // Khởi tạo biến $isCheck với giá trị mặc định là true

                if (empty($user)) {
                    $errDangNhapuser = "Nhập user";
                    $isCheck = false;
                }
                if (empty($pass)) {
                    $errDangNhappass = "Nhập pass";
                    $isCheck = false;
                }

                if ($isCheck) {
                    $checkuser = checkUser($user, $pass);
                    if (is_array($checkuser)) {
                        // nếu có 1 mảng thì tức là bạn đã đăng nhập thành công
                        $_SESSION['user'] = $checkuser;
                        header("Location: index.php");
                        exit(); // Thêm câu lệnh exit() để dừng thực hiện mã nguồn tiếp theo
                    } else {
                        $thongBao = "Tài khoản không tồn tại";
                    }
                }
            }
            include("view/taikhoan/dangky.php");
            break;
        case 'edit_taikhoan':
            if ((isset($_POST["update"])) && ($_POST["update"])) {
                $id = $_POST["id"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                $email = $_POST["email"];
                $adress = $_POST["adress"];
                $tel = $_POST["tel"];
                update_taikhoan($id, $user, $pass, $email, $adress, $tel);
                header("Location: index.php?act=edit_taikhoan");
                $_SESSION['user'] = checkUser($user, $pass); // cập nhật lại $_SESSION['user']
            }
            include("view/taikhoan/edit_taikhoan.php");
            break;
        case 'quenmk':
            if ((isset($_POST["guiEmail"])) && ($_POST["guiEmail"])) {
                $email = $_POST["email"];

                $checkEmail = checkEmail($email);
                if (is_array($checkEmail)) {
                    $thongBao = "Mật khẩu của bạn là " . $checkEmail["pass"];
                } else {
                    $thongBao = "Email bạn nhập ko đúng hoặc không tồn tại";
                }
            }
            include("view/taikhoan/quenmk.php");
            break;
        case 'logout':
            session_unset();
            header("Location: index.php");
            break;

        // Khách hàng

        case 'addToCard':
            if ((!empty($_POST["submit"])) && ($_POST["submit"])) {
                $id = $_POST["id"];
                $tenSanPham = $_POST["tenSanPham"];
                $price = $_POST["price"];
                $image = $_POST["image"];
                $soLuong = 1;
                $thanhTien = $soLuong * $price;

                // $thanhTien = 2;
                $ArrCart = [$id, $tenSanPham, $price, $image, $soLuong, $thanhTien];
                // them  $ArrCart vao mang

                array_push($_SESSION['myCart'], $ArrCart);
            }
            include("view/card/viewCard.php");
            break;
        case 'deleteCard':
            if (isset($_GET["idCard"])) {
                $id = $_GET["idCard"];
                array_splice($_SESSION['myCart'], $id, 1);
            } else {
                $_SESSION['myCart'] = [];
            }
            include("view/card/viewCard.php");
            break;

        case 'bill':
            include("view/card/bill.php");
            break;
        case 'billComfirm':
            // tạo bill
            if ((isset($_POST["dongydathang"])) && ($_POST["dongydathang"])) {
                if (isset($_SESSION['user']))
                    $id_User = $_SESSION['user']['id'];
                else
                    $id = 0;
                $user = $_POST["user"];
                $adress = $_POST["adress"];
                $email = $_POST["email"];
                $tel = $_POST["tel"];
                $phuongThucTT = $_POST["phuongThucTT"];
                $ngayDatHang = date("h:i:sa d/m/y");
                $tongDH = tongDH();

                $idBill = insert_bill($id_User, $user, $adress, $email, $tel, $ngayDatHang, $tongDH, $phuongThucTT);

                // insert into bảng cart: $_SESSION['myCart']

                // tạo đơn hàng + tạo giỏ hàng
                foreach ($_SESSION['myCart'] as $ArrCart) {
                    // insert_cart($idUser, $idSp, $name, $price, $img, $soLuong, $thanhTien, $idBill);
                    insert_cart($_SESSION['user']['id'], $ArrCart[0], $ArrCart[1], $ArrCart[2], $ArrCart[3], $ArrCart[4], $ArrCart[5], $idBill);
                }
                $_SESSION['myCart'] = [];
            }
            $bill = loadOne_bill($idBill);
            $billCT = loadall_cart($idBill);
            // echo '<pre>';
            // var_dump([$billCT]);
            // die;
            include("view/card/billComfirm.php");
            break;
        case 'mybill':
            $list_bill = loadall_bill($_SESSION['user']['id']);
            include("view/card/mybill.php");
            break;
        default:
            include("view/home.php");
            break;
    }
} else {
    include("view/home.php");
}
include("view/footer.php");
?>