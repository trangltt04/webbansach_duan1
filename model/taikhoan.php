<?php

function list_Alltaikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id desc"; // sắp xếp 
    $listTk = pdo_query($sql);

    return $listTk;
}
function insert_taiKhoan($user, $pass, $email)
{
    $sql = "INSERT INTO taikhoan(user, pass, email) 
    VALUES ('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkUser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user = '$user' and pass = '$pass'";
    $tendm = pdo_query_one($sql);
    return $tendm;
}
function checkEmail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
    $tendm = pdo_query_one($sql);
    return $tendm;
}
function update_taikhoan($id, $user, $pass, $email, $adress, $tel)
{
    $sql = "UPDATE taikhoan 
    SET 
    user='$user',
    pass='$pass',
    email='$email',
    adress='$adress',
    tel='$tel'
    WHERE id='$id'";
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id = $id";
    pdo_query($sql);
}
?>