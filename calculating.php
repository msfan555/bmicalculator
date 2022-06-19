<?php

$height=$_POST['height'];
$weight=$_POST['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);

$result="";

if ($bmi < 18.5) {
    $result="體重過輕，要多攝取一些營養的食物喔！";
} else if ($bmi >= 18.5 && $bmi < 24) {
    $result="標準體重，請繼續保持健康喔！";
} else if ($bmi >= 24 && $bmi < 27) {
    $result="體重過重，要健康飲食和運動喔！";
} else if ($bmi >= 27 && $bmi < 30){
    $result="輕度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
}else if($bmi >= 30 && $bmi < 35){
    $result="中度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
}else{
    $result="重度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
}

header("location:result.php?bmi=$bmi&result=$result");

?>