<h1>cart</h1>
<?php
setcookie('產品',serialize(["貓跳台"=>1,"貓碗"=>2,"牛奶"=>3,"逗貓棒"=>4]),time()+3600);

$cart=unserialize($_COOKIE['產品']);
foreach($cart as $product => $quantity){
    echo $product."->".$quantity."<br>";
}



?>