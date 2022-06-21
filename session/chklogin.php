<?php

$default_user = 'fan';
$default_pw = "1234";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$error = '';

if ($acc != $default_user || $pw != $default_pw) {
    $error = "帳號密碼錯誤，請回登入頁面重新輸入";
    header("location:login.php?error=$error");
} else {
    session_start();
    $_SESSION['user'] = $acc;
    header("location:membercenter.php?user=$acc");
}
