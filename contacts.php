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
            <li><a href = "../index.php" class="header_item">Главная</a></li>
            &nbsp;
            <li><a href = "../registration_verification.php" class="header_item">Регистрация и авторизация</a></li>
            &nbsp;
            <li><a href = "contacts.php" class="header_item">Контакты</a></li>
            &nbsp;
            <li><a href = "../about_US.html" class="header_item">О нас</a></li>
        </ul>
    </header>

    &nbsp;
    </br>
    </br>

   <h2 align = "center">Контакты</h2> 
   
    &nbsp;

    <h3 align = "center">Наши магазины расположены по адресу:</h3>

    &nbsp;
    </br>

    <?php

    $tea_shops = mysqli_query($mysqli, "SELECT * FROM `tea_shop`");
    while ($tea_shop = mysqli_fetch_assoc($tea_shops)){

    ?>

        <h4 align = "center"><?php echo $tea_shop['store_address'] ?></h4>

    <?php

    }

    ?>

</body>

</html>