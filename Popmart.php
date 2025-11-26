<?php
    $title = "POPCART";
    $items = 10;
    $cost = 550;
    $subtotal = $cost * $items;
    $tax = ($subtotal/100)*12;
    $total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style>


        body {
        background-image: url("popcart2.jpg");
        font-family: Poppins, sans-serif;
        padding: 20px;
        }
        h1 {
        font-family: "Poppins", serif;
        padding: 10px 20px 12px 20px;
        margin: 0px;
        color:rgb(255, 0, 0);
        }

        h2 {
        font-weight: 700;
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 20px;
        margin: 0px;
        }

        p {
        padding: 6px 20px 6px 20px;
        margin: 0px;
        }

        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color:rgb(255, 255, 255);
        display: flex;
        float: none;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        ul li a {
        display: block;
        color: black;
        padding: 14px 16px;
        text-decoration: none;
        }

        ul li a:hover {
        background-color:rgb(255, 0, 0);
        color: white;
        }

        .button {
        background-color: red;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 50px;
        float: none;
        position: absolute;
        left: 50%;
        }

        .button:hover {
            box-shadow:0 8px 16px 0 rgba(63, 63, 63, 0.6);
        }

        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
        }

    </style>
</head>
    <body>
            <ul>
            <li><a href="#home">New Arivals</a></li>
            <li><a href="#news">Characters</a></li>
            <li><a href="#contact">Category</a></li>
            <li><a href="#about">About Us</a></li>
            </ul>


            <div class = "Bag">

            <h1>POPCART STORE</h1>
            <h2>Shopping Bag</h2>
            <h4>My Bag</h4>
            <p>Total Items: <?= $items ?></p>

            <p>
            <?php
            $members = array("Hinono: Shelter Series"=>"2", "Hinono: Little Mischief Series"=>"2", "Kudo: Select Your Character Series"=>"3",
                            "Kudo: 24/7 YOU Series" => "2", "Nyoka: Fluffy Life Series" => "1");

            foreach ($members as $x => $y) {
            echo "$x : $y <br>";
            }
            ?>
            </p>

                <p>Cost per pack: <?= $cost ?></p>
                <p>Subtotal: P<?= $subtotal ?></p>
                <p>Tax: P<?= $tax ?></p>
                <p>Total: P<?= $total ?></p>
                </div>

            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p>
            <?php 

                $favfig = "hinono";
                switch ($favfig) {
                    case "hinono":
                        echo "Favorite Purchase: Your favorite figure is hinono!";
                        break;
                    case "kudo":
                        echo "Favorite Purchase: Your favorite figure is kudo!";
                        break;
                    case "nyoka":
                        echo "Favorite Purchase: Your favorite figure is nyoka!";
                        break;
                    default:
                        echo "Favorite Purchase: You love all of our collection!";
                    }
            ?>
            </p>

            <p>
            <?php
                $t = 15;

                if ($t < "12") {
                echo "Have a good morning!";
                } elseif ($t < "18") {
                echo "Have a good day!";
                } else {
                echo "Have a good night!";
                }

            ?>
            </p>

            <div class="button">Check Out</div>
        </body>

        <div class="footer">
        <p><?php include ('footer.php');?></p>

</html>
