<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork6</title>
</head>
<body>
<?php
    if (isset($_GET['x']))
        $x = htmlspecialchars($_GET['x']);
    else $x = 10;
    if (isset($_GET['y']))
    $x = htmlspecialchars($_GET['y']);
    else $y = 10;
    if (isset($_GET['sign']))
    $sign = htmlspecialchars($_GET['sign']);
    else $sign = 'plus';
    if (isset($_GET['z']))
    $z = htmlspecialchars($_GET['z']);
    if (isset($x) && isset($y))
        switch ($sign) {
            case 'plus':
                $z=$x+$y;
                break;
            case 'minus':
                $z=$x-$y;
                break;
            case 'pow':
                $z=$x*$y;
                break;
            case 'dev':
                if ($y!=0) $z=$x/$y;
                else $z='infinitu';
        }
?>
<form method="get">
    <input name="x" type="number" style="width: 50px" value="<?=$x?>">
    <select name="sign" style="width: 40px;">
        <option <?php if ($sign=='plus') echo "selected"?> value="plus">+</option>
        <option <?php if ($sign=='minus') echo "selected"?> value="minus">-</option>
        <option <?php if ($sign=='pow') echo "selected"?> value="pow">*</option>
        <option <?php if ($sign=='dev') echo "selected"?> value="dev">?</option>
    </select>
    <input name="y" type="number" style="width: 50px" value="<?=$y?>">
    <input type="submit" value="=" style="width: 30px">
    <b><?php if (isset($z)) echo "$z"?></b>

</form>

</body>
</html>
