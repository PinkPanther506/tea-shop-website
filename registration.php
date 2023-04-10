<?php

require_once 'db.php';

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$birthday = $_POST['birthday'];
$telephone = $_POST['telephone'];
$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

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
            <li><a href = "registration_verification.php" class="header_item">Регистрация и авторизация</a></li>
            &nbsp;
            <li><a href = "../contacts.php" class="header_item">Контакты</a></li>
            &nbsp;
            <li><a href = "../about_us.html" class="header_item">О нас</a></li>
        </ul>
    </header>

    <?php

    if(empty($surname) || empty($name) || empty($telephone) || empty($login) || empty($password) || empty($repeat_password)){
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Заполните все поля!"; ?></h2>
    <?php
    } else {
        if($password != $repeat_password){
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Пароли не совпадают!"; ?></h2>
    <?php
        }
        $customer_datas = mysqli_query($mysqli, "SELECT * FROM customer_data");
        $customer_data = mysqli_fetch_assoc($customer_datas);
        if($customer_data['login'] == $login){
    ?>  <h2 align = "center"><?php echo "</br>"; echo "Такой пользователь уже есть."; ?></h2>
    <?php
        }else{
            if($birthday == NULL && $patronymic != NULL){
                $sql = "INSERT INTO customer_data (surname, name, patronymic, telephone, login, password) VALUES ('$surname', '$name', '$patronymic', '$telephone', '$login', '$password')";
                $mysqli -> query($sql);
    ?>  <h2 align = "center"><?php echo "</br>"; echo "вы успешно зарегистрировались."; ?></h2>
    <?php
            }

            if($patronymic == NULL && $birthday != NULL){
                $sql = "INSERT INTO customer_data (surname, name, birthday, telephone, login, password) VALUES ('$surname', '$name', '$birthday', '$telephone', '$login', '$password')";
                $mysqli -> query($sql);
    ?>  <h2 align = "center"><?php echo "</br>"; echo "вы успешно зарегистрировались."; ?></h2>
    <?php
            }

            if($birthday == NULL && $patronymic == NULL){
                $sql = "INSERT INTO customer_data (surname, name, telephone, login, password) VALUES ('$surname', '$name', '$telephone', '$login', '$password')";
                $mysqli -> query($sql);
    ?>  <h2 align = "center"><?php echo "</br>"; echo "вы успешно зарегистрировались."; ?></h2>
    <?php
            }

            if($birthday != NULL && $patronymic != NULL){
                $sql = "INSERT INTO customer_data (surname, name, patronymic, birthday, telephone, login, password) VALUES ('$surname', '$name', '$patronymic', '$birthday', '$telephone', '$login', '$password')";
                $mysqli -> query($sql);
    ?>  <h2 align = "center"><?php echo "</br>"; echo "вы успешно зарегистрировались."; ?></h2>
    <?php    
            } 
                
        }

    }
            

    ?>

</body>

</html>