<h1>cart</h1>
<?php
// cookie
// setcookie('產品',serialize(["貓跳台"=>1,"貓碗"=>2,"牛奶"=>3,"逗貓棒"=>4]),time()+3600);

// $cart=unserialize($_COOKIE['產品']);
// foreach($cart as $product => $quantity){
//     echo $product."->".$quantity."<br>";
// }


// session
session_start();
$_SESSION['cart']["貓跳台"]=1;
$_SESSION['cart']["貓碗"]=2;
$_SESSION['cart']["牛奶"]=3;
$_SESSION['cart']["逗貓棒"]=4;
$_SESSION['cart']["小魚乾"]=5;

foreach($_SESSION['cart'] as $product => $quantity){
    echo $product."->".$quantity."<br>";
}

?>