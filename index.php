<?php

    require_once('classes/product.php');

    $link = mysqli_connect('localhost', 'root', '', 'catalog');

    mysqli_set_charset($link, 'utf8');

    $sql = "SELECT * FROM products";

    $result = mysqli_query($link, $sql);

    $productMass = array();

    while ( $item = mysqli_fetch_assoc($result) ){

        $productMass[] = new Product( $item['photo'], $item['name'], $item['price'], $item['id'] );

    };

    

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Catalog page</title>
</head>
<body>
    
    <div class="catalog">
        <?php
            foreach ( $productMass as $item ){
                echo $item->renderHTML();
            }
        ?>
    </div>

    <div class="buttons">
        <!-- <div class="sort">
            <button id="button">Показывать по возрастанию</button>
            <button id="button">Показывать по убыванию</button>
        </div> -->
        <a href="#" class="show-more-button"  id="show_more">
            <span class="show-more green">
                <span class="arrows">
                    <span class="arrow"></span>
                    <span class="arrow-hidden"></span>
                </span>
            </span>
            <span class="show-more-text">Show more</span>
        </a>
    </div>

    <script src="script.js"></script>
</body>
</html>