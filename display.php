<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за обращение</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                BB <br>
                <img src="img/logo.png" width="50" height="50" alt="bb paradise">Paradise
            </div>
            <nav>
                <ul>
                    <li><a href="#" title='Меню' onclick="slowScroll=('#banner')">Меню</a></li>
                    <li><a href="#" title='Преимущества' onclick="slowScroll=('#avantage')">Преимущества</a></li>
                    <li><a href="#" title='Отзывы' onclick="slowScroll=('#tovar')">Отзывы</a></li>
                    <li><a href="#" title='Контакты' onclick="slowScroll=('#main')">Контакты</a></li>
                </ul>
            </nav>
            <div class="header_contacts">
                <a href="#">+7 (999) 255-30-60</a>
                <p>Ежедневно 10:00-22:00</p>
            </div>
        </div>
    </header>
    <section class="content">
        <div class="container">
            <h1>Спасибо за ваше обращение!</h1>
            <p>Имя: <?php echo htmlspecialchars($_GET['sirname']); ?></p>
            <p>Email: <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p>Сообщение: <?php echo nl2br(htmlspecialchars($_GET['message'])); ?></p>
        </div>
    </section>
    <footer>
        <div class="container">
            <div id="contnav" class="contact">
                <h5>Контакты</h5>
                <a href="#">+7 (999) 255-30-60</a>
            </div>
            <div class="adress_foot">
                <h5>Адрес</h5>
                <p>Москва, ул. 3-я Пушкинская д. 7</p>
            </div>
        </div>
    </footer>
</body>
</html>
