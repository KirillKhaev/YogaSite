  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">  
        <div class="content_container">
            <header>
                <div class="menu_first_block">
                     <div class="navbar">
                        <a href="/lessons">Уроки</a>
                        <a href="#">Программы</a>
                        <a href="#">Инструкторы</a>
                        <a href="#">Тарифы</a>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img src="/images/logo.png" class="logo">
                        </a>
                    </div>     
                </div>
                <div class="menu_second_block">
                    <a href="#">
                        <img src="/images/search.png" >
                    </a>
                    <a href="#">
                        <img src="/images/like.png" >
                    </a>
                    <a href="#" class="Login_link" onclick="OpenLoginPopup()">Личный кабинет</a>
                </div>
            </header>
        </div>
    </div>
    @yield('content')
    <div class="container">
            <div class="content_container">
                <span class="border"></span>
                <footer>
                    <div class="footer_first_block">
                        <div class="footer_links">
                            <a href="#">Обратная связь</a>
                            <a href="#">Условия пользования</a>
                        </div>
                        <p class="footer_text">© 2020 aiogi. Все права защищены</p>
                        <div class="soc_net">
                            <a href="">
                                <img src="/images/vk.png">
                            </a>
                            <a href="">
                                <img src="/images/insta.png">
                            </a>
                            <a href="">
                                <img src="/images/facebook.png">
                            </a>
                        </div>
                    </div>
                    <div class="footer_second_block">
                        <h4 class="footer_title">Подписаться на рассылку</h4>
                        <p class="footer_subtitle">Будь в курсе самых последний обновлений</p>
                        <div class="footer_form">
                            <input type="text" name="email" placeholder="Email" class="footer_input">
                            <button class="footer_btn">Подписаться</button>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    @include('partial.LoginPopup')
    @include('partial.RegisterPopup')
</body>
<script src="/js/script.js"></script>
</html>