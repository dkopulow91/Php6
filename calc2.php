<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork6</title>
</head>
<body>
<form action="" method="post">
    <label for="">Переменная 1:</label>
    <input type="number" name="var1">
    <label for="">Переменная 2:</label>
    <input type="number" name="var2">

    <div style="overflow: hidden">
        <input type="submit" name="operation" value="+" style="clear: both; float: left; padding: 2px; margin: 2px">
        <input type="submit" name="operation" value="-" style="float: left; padding: 2px; margin: 2px">
        <input type="submit" name="operation" value="*" style="clear: both; float: left; padding: 2px; margin: 2px">
        <input type="submit" name="operation" value="/" style="float: left; padding: 2px; margin: 2px">
    </div>
</form>
<?php
$a = $_POST['var1'];
$b = $_POST['var2'];
if (isset($_POST['operation'])) {
    if ($a==="" || $b==="") {
        $result = "Введите корректные переменные";
    } else {
        switch ($_POST['operation']) {
            case '+':
                $result = $a+$b;
                break;
            case '-':
                $result = $a-$b;
                break;
            case '*':
                $result = $a*$b;
                break;
            case '/':
                if ($b==0) {
                    $result="На нольделить нельзя";
            } else {
                    $result=$a/$b;
            }
            break;
            default:
                $result = "Хочу что то поинтереснее";
                break;
        }
    }
}
?>
<div style="clear: both; font-weight: bold; font-size: 16px">Результат: <?=$result ?></div>
</body>
</html>