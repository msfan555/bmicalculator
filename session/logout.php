<?php

if(isset($_COOKIE['user'])){
    setcookie("user","",time()-1);
}else{
    header("location:index.php");
}

?>