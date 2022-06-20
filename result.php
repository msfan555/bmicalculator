<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>

<body>

    <h1 style="font-size:3rem;text-align:center">
        BMI為 <?= $_GET['bmi']; ?>
    </h1>
    <h2 style="font-size:3rem;text-align:center">
        <?= $_GET['result']; ?>
    </h2>
    <div style="font-size:3rem;text-align:center">
        <a href="bmi.html"><button>回到BMI計算機</button></a>
    </div>

</body>

</html>