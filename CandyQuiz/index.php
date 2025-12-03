<?php
    $username = 'Shim Jaehyun';
    $greeting = 'Hello';
    $offer = array("Chocolate Bar", "12", "150", "135");
    $product = 'Chocwate Candy';
    $usual_price = ($offer[1] * $offer[2]);
    $offer_price = ($offer[1] * $offer[3]);
    $saving = $usual_price - $offer_price; 

?>
<!DOCTYPE html>
<?= require ("header.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "styles.css">   
</head>
<body>
    <h1>달콤한 사탕 가게 (Sweet Can-Dee Store)</h1>
    <p><?= $greeting?>, <?= $username?></p>
    <p class =circle>Savings: <?= $saving ?></p>
    <p> Annyeong <?= $username?>! Another Sweet day for a Sweet piece of Candy.<br> 
    Dalkeoman Satang Gage offers a 10% discount.<br>  If the purchase of "<?= $product?>" <?=$offer[0]?> 
    reached <?=$offer[1]?> pieces on a single purchase.<br>  
    Try our limited promo for a limited time only.<br> 
    즐기다!</p>

    <p>Discounted Price : <?= $offer_price?></p>
    <p>Casual Price : <?= $usual_price?></p>
</body>
<?= require ("footer.php")?>
</html>