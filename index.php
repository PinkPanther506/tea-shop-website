<?php

require_once 'db.php';

?>

<!Doctype HTML>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>tea_shop55</title>

</head>

<body>

    <header align = "center">
        <ul>
            <li><a href = "index.php" class="header_item">Главная</a></li>
            &nbsp;
            <li><a href = "../registration_verification.php" class="header_item">Регистрация и авторизация</a></li>
            &nbsp;
            <li><a href = "../contacts.php" class="header_item">Контакты</a></li>
            &nbsp;
            <li><a href = "../about_us.html" class="header_item">О нас</a></li>
        </ul>
    </header>

    &nbsp;

    <?php

    $products = mysqli_query($mysqli, "SELECT * FROM products");
    while ($product = mysqli_fetch_assoc($products)){

    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-iner">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <img src="img/<?php echo $product['image']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="iner-product_name">
                                    <h3 align = "center"><?php echo $product['product_name']; ?></h3>
                                </div>
                                <div class="iner-description">
                                    <p><?php echo $product['description']; ?></P>
                                </div>
                                <div class="iner-price"> 
                                    <h6 align = "center"><?php echo $product['price']; 
                                    if($product['id_category'] == 1){
                                        echo " руб за 10 грамм   "; 
                                    }
                                    
                                    if($product['id_category'] > 1){
                                        echo " руб   "; 
                                    }
                                    ?> <a class="btn btn-primary" href="#">купить</a> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                    $product = mysqli_fetch_assoc($products);

                ?>

                <div class="col-md-6">
                    <div class="main-iner">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <img src="img/<?php echo $product['image']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="iner-product_name">
                                    <h3 align = "center"><?php echo $product['product_name']; ?></h3>
                                </div>
                                <div class="iner-description">
                                    <p><?php echo $product['description']; ?></P>
                                </div>
                                <div class="iner-price"> 
                                    <h6 align = "center"><?php echo $product['price'];
                                    if($product['id_category'] == 1){
                                        echo " руб за 10 грамм   "; 
                                    }
                                    
                                    if($product['id_category'] > 1){
                                        echo " руб   "; 
                                    }
                                    ?> <a class="btn btn-primary" href="#">купить</a> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>    
    
    &nbsp;

    <?php
    }
    ?>

    &nbsp;
    </br>
    </br>
    </br>
    

</body>

</html>