<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>

<body>
    <h1>會員登入</h1>
    <form action="chklogin.php" method="post">
        <table>
            <tr>
                <td>帳號
                <input type="text" name="acc">
                </td>
            </tr>
            <tr>
                <td>密碼
                <input type="password" name="pw" id="">
                </td>
            </tr>
        </table>
        <div>
        <input type="submit" value="登入">
        <input type="reset" value="重置">
        </div>
    </form>

</body>

</html>