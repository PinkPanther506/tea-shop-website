<?php

require_once 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

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
            <li><a href = "registration_verification.php" class="header_item">Регистрация и авторизация</a></li>
            &nbsp;
            <li><a href = "../contacts.php" class="header_item">Контакты</a></li>
            &nbsp;
            <li><a href = "../about_us.html" class="header_item">О нас</a></li>
        </ul>
    </header>

    <?php

    if(empty($login) || empty($password)){
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Заполните все поля!"; ?></h2>
    <?php
    } else {
        $sql = "SELECT * FROM `customer_data` WHERE login = '$login' AND password = '$password'";
        $result = $mysqli -> query($sql);

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Добро пожаловать"; echo "</br>"; ?></h2>
                &nbsp;
                <h2 align = "center"><?php echo $row['name']; ?></h2>
    <?php

            }
        } else {
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Нет такого пользователя!"; ?></h2>
    <?php
        }
    }

    ?>

</body>

</html>