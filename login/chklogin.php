<?php

$default_user='fan';
$default_pw="1234";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc==$default_user && $pw==$default_pw){
    echo "帳號密碼正確，歡迎光臨";
}else{
    echo "帳號密碼錯誤，請回登入頁面重新輸入";
    echo "<a href='login.php'>回登入頁面</a>";
}

?>