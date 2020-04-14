<?php
    require("./subscribe/bd.php");
?>
<section id="main">
            <div class="main_content">
                <h3>До</h3>
                <h1>-50%</h1>
                <h2>знижки на весняну колекцію</h2>
                <h4>до 1 квітня</h4>
            </div>
        </section>
        <section id="buy">
            <div class="buy_container">
                <div id="man">
                    <div class="content">
                        <a href="./?page=Container">Чоловічий одяг</a>
                    </div>
                </div>
                <div id="woman">
                    <div class="content">
                        <a href="#">Жіночий одяг</a>
                    </div>
                </div>
            </div>
            <div id="children">
                <div class="children_content">
                    <a href="#"><p>Дитячий одяг</p></a>
                </div>
            </div>
        </section>
        <hr>
        <section id="about">
            <div id="about_size">
                <div id="about_content"></div>
                <div class="about_text">
                    <h1>Gutsul Clothes</h1>
                    <p>Gutsul Clothes —  це унікальне місце, в якому можна відслідковувати модні тенденції та розвивати свій стиль. Ми пропонуємо модний жіночий, чоловічий, дитячий одяг на всі випадки життя і будь-яку пору року. Завдяки нам Ви не тільки ознайомитеся з хітами сезону, а й дізнаєтеся, який одяг зараз наймодніший.</p>
                    <div>
                        <a href="#">
                            <img src="./icons/where_icon.svg">
                        </a>
                        <a href="#">
                            Найближчі магазини
                        </a>
                    </div>  
                </div>
            </div>
        </section>
        <section id="mail">
            <div id="mail_size">
            <div class="mail_text">
                <p>Підписуйся та першим взнавай про новинки та акції, а також отримай знижку -20% на першу покупку. Для постійних клієнтів ще більше бонусів та особливих пропозицій.</p>
                <form action="./subscribe/subscribe.php" method="post">
                    <input class="buton" name="mail" type="email" type="submit" name="submit" value="Підписатися" required>
                </form>
            </div>
            <div id="mail_content"></div>
            </div>
        </section>

        