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
            <li><a href = "../about_US.html" class="header_item">О нас</a></li>
        </ul>
    </header>

    &nbsp;
    </br>
    </br>

    <h2 align = "center">Регистрация</h2>       

    &nbsp;
    </br>
    </br>

    <form align = "center" action="registration.php" method="POST">

        <input type="text" placeholder="Фамилия" name="surname"> 
        &nbsp;
        <input type="text" placeholder="Имя" name="name"> 
        &nbsp;
        <input type="text" placeholder="Отчество" name="patronymic"> 
        &nbsp;
        <input type="date" placeholder="" name="birthday"> 
        </br> 
        </br> 
        <input type="text" placeholder="телефон" name="telephone"> 
        &nbsp;
        <input type="text" placeholder="логин" name="login"> 
        &nbsp;
        <input type="password" placeholder="пароль" name="password">
        &nbsp;
        <input type="password" placeholder="повторный пароль" name="repeat_password">
        &nbsp;
        <button type="submit">Зарегистрироваться</button>

    </form>
    
    &nbsp;
    </br>
    </br>
    </br>

    <h2 align = "center">Авторизация</h2>  

    &nbsp;
    </br>
    </br>

    <form align = "center" action="verification.php" method="POST">

        <input type="text" placeholder="логин" name="login"> 
        &nbsp;
        <input type="password" placeholder="пароль" name="password"> 
        &nbsp;
        <button type="submit">Авторизироваться </button>

    </form>

    &nbsp;
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

</body>

</html>