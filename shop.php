<?php include './reusable/header.php'; ?>
    <body>
        <?php include './reusable/navbar.php'; ?>
        <h1>Products list</h1>
        <?php
            include './config/config.php';

            echo '<div class="row">';
            include './reusable/shop_sidenav.php';
            echo '<div class="col-md-10 col-sm-12">';

                $query = "SELECT * FROM products";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
                    echo "<div class=\"row\">"; 
                    foreach ($result as $product) {
                        include './reusable/product_card.php';
                    }
                    echo "</div>";
                } 
                else {
                    // echo "0 results";
                }

            echo "</div>";
            echo "</div>";
        ?>

        <?php include './reusable/footer.php'; ?>
    </body>
</html>