<?php

if (!empty($_GET) || !empty($_POST)) {

    if (empty($_GET)) { //判斷$_GET是否為空，若為空代表是以POST方式傳送
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    } else {
        $height = $_GET['height'];
        $weight = $_GET['weight'];
    }


    $bmi = round($weight / (($height / 100) * ($height / 100)), 1);

    $result = "";

    if ($bmi < 18.5) {
        $result = "體重過輕，要多攝取一些營養的食物喔！";
    } else if ($bmi >= 18.5 && $bmi < 24) {
        $result = "標準體重，請繼續保持健康喔！";
    } else if ($bmi >= 24 && $bmi < 27) {
        $result = "體重過重，要健康飲食和運動喔！";
    } else if ($bmi >= 27 && $bmi < 30) {
        $result = "輕度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
    } else if ($bmi >= 30 && $bmi < 35) {
        $result = "中度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
    } else {
        $result = "重度肥胖，肥胖是很多疾病的根源，要健康飲食和運動喔！";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (empty($_GET) && empty($_POST)) {
    ?>
        <h1>BMI計算機</h1>
        <form action="bmi.php" method="get">
            <div>
                <label for="">身高</label>
                <input type="number" name="height" id=""> cm
            </div>
            <div>
                <label for="">體重</label>
                <input type="number" name="weight" id=""> kg
            </div>
            <div>
                <input type="submit" value="開始計算">
            </div>
        </form>

    <?php
    }else{
    ?>
    <h1 style="font-size:3rem;text-align:center">
        BMI為 <?=$bmi;?>
    </h1>
    <h2 style="font-size:3rem;text-align:center">
        <?=$result;?>
    </h2>
    <div style="font-size:3rem;text-align:center">
        <a href="bmi.php"><button>回到BMI計算機</button></a>
    </div>

    <?php
    }

    ?>

</body>

</html>