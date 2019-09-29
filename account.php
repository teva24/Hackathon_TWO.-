
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="index.php" class="logo">EVE</a>
                </div>

                <div class="header__account">
                  <?php require 'php/cookie.php'; ?>

                    <img src="img/icons/avatar.svg">


                </div>
                
            </div>
        </div>
    </header>


    <div class="account">
        <div class="container">
            <div class="account__inner">
                <div class="personal">
                    <h2 class="personal__title">Редактирование</h2>

                    <label for="email">
                        Email:
                        <input type="email" id="email">
                    </label>
                       
                    <label for="old_password">
                            Старый пароль:
                        <input type="password" id="old_password">
                    </label>
                    <label for="new_password">
                        Новый пароль:
                        <input type="password" id="new_password">
                    </label>
                    <label for="phone">
                        Телефон:
                        <input type="phone" id="phone" >
                    </label>

                    <a href="#" class="button">Сохранить</a>

                </div>

                <div class="favorites-events">
                    <h2>Избранное</h2>
                    <div class="main__item">
    
                        <div class="item-img">
                            <img src="https://via.placeholder.com/260" alt="">
                        </div>
                            
                        <div class="item-info">
                            <h2 calss="item-title">Название мероприятия</h2>
                            <p class="item-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
    
                    <div class="item-timetable">
                        Дата 
                    </div>

                    </div>

                    <div class="main__item">
    
                            <div class="item-img">
                                <img src="https://via.placeholder.com/260" alt="">
                            </div>
                                
                            <div class="item-info">
                                <h2 calss="item-title">Название мероприятия</h2>
                                <p class="item-desc">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
        
                        <div class="item-timetable">
                            Дата 
                        </div>
    
                        </div>

                        <div class="main__item">
    
                                <div class="item-img">
                                    <img src="https://via.placeholder.com/260" alt="">
                                </div>
                                    
                                <div class="item-info">
                                    <h2 calss="item-title">Название мероприятия</h2>
                                    <p class="item-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
            
                            <div class="item-timetable">
                                Дата 
                            </div>
        
                            </div>

                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © 2019. All right reserved. </p>
            </div></div>
    </footer>
</body>
</html>