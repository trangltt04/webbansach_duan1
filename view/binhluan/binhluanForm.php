<?php
session_start();
// var_dump($_SESSION['user']);

include("../../model/connect.php");
include("../../model/binhluan.php");

$idUser = !empty($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;

$idSp = $_REQUEST["idSp"];
$dsbl = selectAll_binhluan($idSp);
?>

<div class="row mb ">
    <div class="boxTitle">Bình luận</div>
    <div class="boxContent2">
        <table>
            <?php
            if (!empty($dsbl)) {
                foreach ($dsbl as $key => $value) {
                    echo '<tr>
                              <td>' . $value['noiDung'] . '</td>
                              <td>' . $value['idUser'] . '</td>
                              <td>' . $value['ngayBinhLuan'] . '</td>
                          </tr>';
                }
            }
            ?>
        </table>
    </div>

    <?php
    if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) { ?>
        <div class="boxFooter searchBox">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idSp" value="<?= $idSp ?>">
                <input type="text" name="noidung" placeholder="Bình luận">
                <input type="submit" name="submit" value="gửi">
            </form>
        </div>
    </div>
<?php } ?>

<?php
if (isset($_POST['submit'])) {


    $idSp = $_POST['idSp'];
    $noiDung = $_POST['noidung'];
    $ngayBinhLuan = date("h:i:sa d/m/y");
    insert_binhluan($idSp, $idUser, $noiDung, $ngayBinhLuan);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>