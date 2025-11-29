<?php
// No sessions or cart needed anymore
$products = [
    1 => ["name" => "T-Shirt", "price" => 15],
    2 => ["name" => "Jeans", "price" => 40],
    3 => ["name" => "Jacket", "price" => 60],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clothing Store</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            /* Background image for the whole page */
            background: url('background1.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 150px;
            color: white; /* title blue */
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin: 0 auto;
            width: 60%;
        }
        nav a {
            margin: 0 20px;
            text-decoration: none;
            font-weight: 600;
            color: dodgerblue;
            padding: 8px 12px;
            border-radius: 4px;
        }
        nav a:hover {
            background-color: dodgerblue;
            color: white;
        }
        .container {
            display: flex;
            width: 100%;
            margin-top: 30px; /* ensures body starts below nav */
        }
        .left {
            width: 20%;
            padding: 20px;
            background-color: darkblue; /* left section */
            color: white; /* text white */
        }
        .content {
            width: 60%;
            padding: 20px;
            background-color: dodgerblue; /* middle section */
            color: white; /* text white */
        }
        .right {
            width: 20%;
            padding: 20px;
            background-color: skyblue; /* right section */
            color: darkblue; /* text dark blue */
        }
        p, li, h2 {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <h1>• DBKT •</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Categories</a>
        <a href="#">About Us</a>
        <a href="#">Cart</a>
    </nav>
    <hr>

    <div class="container">
        <!-- Left section -->
        <div class="left">
            <h2>Fashion Tips</h2>
            <p>Discover how to style your outfits with confidence. Pair jeans with a crisp shirt for a casual look, or layer jackets for a trendy vibe.</p>
            <p>We also share seasonal guides to help you choose the right fabrics and colors throughout the year.</p>
        </div>

        <!-- Main content -->
        <div class="content">
            <h2>Products</h2>
            <p>Welcome to our clothing store! We offer stylish and affordable fashion for everyone.</p>
            <p>Browse through our collection and find the perfect outfit for any occasion.</p>

            <ul>
                <?php foreach ($products as $id => $product): ?>
                    <li>
                        <?= $product["name"] ?> - $<?= $product["price"] ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h2>About Us</h2>
            <p>We are passionate about fashion and committed to providing our customers with high-quality clothing at affordable prices.</p>
            <p>Founded in 2025, our store has quickly grown into a trusted destination for fashion lovers. Thank you for being part of our journey!</p>
            <p>Our mission is to make fashion accessible to everyone, blending comfort with style. We believe clothing is more than fabric — it’s self-expression.</p>
        </div>

        <!-- Right section -->
        <div class="right">
            <h2>Customer Stories</h2>
            <p>“I love the quality of the T-Shirts, they’re soft and last long!” – Maria</p>
            <p>“The jeans fit perfectly and are so comfortable. Highly recommended!” – John</p>
            <p>We value feedback and continuously improve our collections based on what our customers love most.</p>
        </div>
    </div>
</body>
</html>