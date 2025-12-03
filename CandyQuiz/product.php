<?php
    $username = 'Shim Jaehyun';
    $greeting = 'Hello!';

    if ($username == true){
        $greeting == $greeting . $username;
    }
    else {
        $greeting = "Guest.";
    }
    $product = "Chocwate Candy";
    $cost = 150;

    for ($i = 1; $i <=10; $i++) {
        $subtotal = $cost * $i;
        $discount = ($cost/100) * ($i * 4);
        $totals = ($i * $cost) - $discount;
    }

?>
<!DOCTYPE html>
<?= require ("header.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel = "stylesheet" href = "styles.css">  

</head>
<body>
    <h1>Chocwate Candy</h1>
    <p><?= $greeting?>, <?= $username?></p>
    <table>
        <tr>
            <td>Box</td>
            <td>Price</td>
        <tr>
        <tr>
            <td></td>
            <td></td>
        <tr>
        <tr>
            <td></td>
            <td></td>
        <tr>
        <tr>
            <td></td>
            <td></td>
        <tr>
    </table>

</body>
<?= require ("footer.php")?>
</html>