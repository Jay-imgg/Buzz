<?php
include 'header.php';

$products = [
    1 => ["name" => "T-Shirt", "price" => 15, "category" => "tops"],
    2 => ["name" => "Jeans", "price" => 40, "category" => "bottoms"],
    3 => ["name" => "Jacket", "price" => 60, "category" => "outerwear"],
];
?>

<div class="container">
    <div class="left">
        <h2>Fashion Tips</h2>
        <p>Discover how to style your outfits with confidence. Pair jeans with a crisp shirt for a casual look, or layer jackets for a trendy vibe.</p>
        <p>We also share seasonal guides to help you choose the right fabrics and colors throughout the year.</p>
    </div>

    <div class="content">
        <h2>Products</h2>
        <p>Welcome to our clothing store! We offer stylish and affordable fashion for everyone.</p>
        <p>Browse through our collection and find the perfect outfit for any occasion.</p>

        <ul>
            <?php foreach ($products as $id => $product): ?>
                <li>
                    <?= $product["name"] ?> - $<?= $product["price"] ?>
                    <?php if ($product["price"] > 30): ?>
                        <strong>(Premium Item)</strong>
                    <?php else: ?>
                        <em>(Budget Friendly)</em>
                    <?php endif; ?>

                    <?php
                    switch ($product["category"]) {
                        case "tops":
                            echo " - Great for layering!";
                            break;
                        case "bottoms":
                            echo " - Perfect fit guaranteed!";
                            break;
                        case "outerwear":
                            echo " - Stay warm in style!";
                            break;
                        default:
                            echo " - Explore more!";
                    }
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Top Picks</h2>
        <ul>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <li>Featured Product #<?= $i ?></li>
            <?php endfor; ?>
        </ul>

        <h2>About Us</h2>
        <p>We are passionate about fashion and committed to providing our customers with high-quality clothing at affordable prices.</p>
        <p>Founded in 2025, our store has quickly grown into a trusted destination for fashion lovers. Thank you for being part of our journey!</p>
        <p>Our mission is to make fashion accessible to everyone, blending comfort with style. We believe clothing is more than fabric — it’s self-expression.</p>
    </div>

    <div class="right">
        <h2>Customer Stories</h2>
        <p>“I love the quality of the T-Shirts, they’re soft and last long!” – Maria</p>
        <p>“The jeans fit perfectly and are so comfortable. Highly recommended!” – John</p>
        <p>We value feedback and continuously improve our collections based on what our customers love most.</p>
    </div>
</div>

<?php include 'footer.php'; ?>