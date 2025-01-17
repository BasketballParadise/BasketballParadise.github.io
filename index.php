<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Баскетбольная Одежда</title>
    <meta name="description" content="Узнай о новинках баскетбольной одежды самым первым!">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php $url = $_SERVER["REQUEST_URI"];?>
        <header>
               <div class="container">
                    <div class="logo">
                          BB <br>
						  <img src="img/logo.png" width="50" height="50" alt ="bb paradise">Paradise
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
					      <a href="#"> +7 (999) 255-30-60 </а>
						  <p>Ежедневно  10:00-22:00</p>
                    </div>
              </div>
        </header>
       <section class="banner">
    <div class="container">
        <h1>Доставка товаров по всей России</h1>
        <div class="h2_li"><h2>Скидка 20% на первый заказ</h2></div>
        <button id="orderButton" class="mainbutton"><span>Заказать</span></button>
    </div>
</section>
       <section class="avantage">
	          <div class="container">
			  <h6>Почему выбирают нас?</h6>
			  <div class="avantage_inner">
			         <div class="avantage_col"></div>
					        <div class="avantage_box standarts">
							      <h3>-Самые лучшие и уникальные новинки </h3>
								  <p>Товары с самых разных уголков мира!</p>
								  <img src=" ">
							</div>
					 <div class="avantage_col">
					        <div class="avantage_box profesionals">
							       <h3>-Проффесионалы баскетбольного мира.</h3>
								   <p>Персонал квалифицирован <br> и опыт работы от 3-х лет.</p>
								   <img src=" ">
							</div>
					 </div>
					 <div class="avantage_col">
					        <div class="avantage_box services">
							<h3>-Подарки нашим покупателям.</h3>
							<p>Аксессуар каждому после покупки <br>
							Также, по субботам в нашем магазине дополнительная скидка в 20%.</p>
							<img src=" ">
					</div>
			     </div>
			 </div>
			 
			 </section>
			 <section class="tovar">
    <div class="container">
        <h4>Товары</h4>
        <div class="tovar_inner">
            <!-- Товар 1 -->
            <div class="tovar_item">
                <h4>Баскетболльный мяч wilson</h4>
                <p>Профессиональный мяч для игры в зале и на улице.</p>
				<p>Ц𝜺𝜼𝜶: 3499 𝝆𝜸𝜹.</p>
                <div class="img_container">
                    <img src="img/wilson.png" alt="Баскетболльный мяч wilson">
                </div>
            </div>
            <!-- Товар 2 -->
            <div class="tovar_item">
                <h4>Джерси Celtics</h4>
                <p>Высококачественная реплика джерси Celtics.</p>
				<p>Ц𝜺𝜼𝜶: 3399 𝝆𝜸𝜹.</p>
                <div class="img_container">
                    <img src="img/celtics.png" alt="Джерси Celtics">
                </div>
            </div>
            <!-- Товар 3 -->
            <div class="tovar_item">
                <h4>Футболка Jordan</h4>
                <p>Удобная и стильная футболка для тренировок и повседневной носки.</p>
				<p>Ц𝜺𝜼𝜶: 2129 𝝆𝜸𝜹.</p>
                <div class="img_container">
                    <img src="img/jordan.png" alt="Футболка Jordan">
                </div>
            </div>
            <!-- Товар 4 -->
            <div class="tovar_item">
                <h4>Кроссовки Nike KD14</h4>
                <p>Максимальная поддержка и комфорт на площадке.</p>
				<p>Ц𝜺𝜼𝜶: 12699 𝝆𝜸𝜹.</p>
                <div class="img_container">
                    <img src="img/kd14.png" alt="Кроссовки Nike KD14">
                </div>
            </div>
            <!-- Товар 5 -->
            <div class="tovar_item">
                <h4>Джерси Bulls</h4>
                <p>Классическая форма команды Chicago Bulls.</p>
				<p>Ц𝜺𝜼𝜶: 5879 𝝆𝜸𝜹.</p>
                <div class="img_container">
                    <img src="img/bulls.png" alt="Джерси Bulls">
                </div>
            </div>
        </div>
    </div>
</section>

            <footer>
                    <div class="container">
                         <div id ="contnav" class="contact">
						 <h5>Контакты</h5>
						 <a href=" ">+7 (999) 255-30-60<br></a>
						 </div>
						 
				<div class="adress_foot">
				       <h5>Адресс</h5>
				       <p>Москва, ул. 3-я Пушкинская д. 7</p>
				</div>
				</div>
			</footer>
			
			<div id="modal" class="modal2">
    <div class="modal2_overlay"></div>
    <div class="modal2_body">
        <form name="form1" method="post" action="z.php">
            <p>Имя: <input type="text" name="sirname"></p>
            <p>Ваш Email: <input type="text" name="email"></p>
            <p>Сообщение <textarea name="text_message"></textarea></p>
            <p><input type="submit" name="send" value="Отправить"></p>
        </form>
		<?php
        /* Подключаемся к базе данных */
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "base");
        
        /* Выбираем данные */
        $sql="SELECT name, email, message FROM first";
        $result=mysqli_query($link, $sql);
        
        while ($line=mysqli_fetch_row($result)) {
        echo "<b>Имя:</b>".$line[0]."<br>";
        echo "<b>Email:</b>".$line[1]."<br>";
        echo "<b>Сообщение:</b>".$line[2]."<br><br>";
        }
        ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // Ваши функция плавного скролла
    function slowScroll(id) {
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 500);
    }

    $(document).on("scroll", function () {
        if ($(window).scrollTop() === 0)
            $("header").removeClass("fixed");
        else
            $("header").attr("class", "fixed");
    });

    $(document).ready(function() {
        var orderButton = document.getElementById('orderButton');
        var modal = document.getElementById('modal');
        var modalOverlay = document.querySelector('.modal2_overlay');

        orderButton.addEventListener('click', function() {
            modal.classList.add('show');
        });

        modalOverlay.addEventListener('click', function() {
            modal.classList.remove('show');
        });
    });
</script>
<script src="js/main.js"></script>
</body>
</html>