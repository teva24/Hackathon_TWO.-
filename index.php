
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="style/style.css" type="text/css">
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

    <title>EVE</title>
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
                   
                    <a id="link" href="login.php"><img class="icon-avatar" id="image" src="img/icons/login.svg" style="
    min-width: 53px; min-height: 60px;
"></a>
                   


                   

                </div>
                
            </div>
        </div>
    </header>

    <div class="slider">
        <div class="container">
            <div class="slider__inner">

                <div class="slider__item">
                    <div class="slider__img">
                        <img src="img/icons/slider-1.svg" alt="">
                      
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slider__img">
                        <img src="img/icons/slider-2.svg" alt="">
                       
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slider__img">
                        <img src="img/icons/slider-3.svg" alt="">
                    </div>
                </div>

                <div class="slider__item">
                    <div class="slider__img">
                        <img src="img/icons/slider-4.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <div class="main">
        <div class="container">
            <div class="main__inner">
                <form action="search.php" method="POST" class="main__input">
                    <select name="category" id="category" placeholder="Выберите категорию" class="select"  onclick="Click(category)">
                           <?php require 'php/category.php'; ?>
                           
                            </select>
    
                    <input type="search" placeholder="Search" class="search">
                </form>
                
              
    
                   <?php require 'php/load_event.php'; ?>
                    
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





    <footer>
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © 2019. All right reserved. </p>
            </div></div>
    </footer>
                           <script>
                    $(function() {
                    var $flag = true;
                    if ($.cookie('eve') == null ) {
                    $flag = false;
                    }
                          console.log($flag);
                    if ($flag) {
                   
                    $("#link").attr("href","account.php");
                    $("#image").attr("src","img/icons/avatar.svg");
                    }
                    else {
                    $("#image").attr("src","img/icons/login.svg");
                    $("#link").attr("href","login.php");
                    }
                       
                    });
                    
                    </script>
    <script src="js/category.js"></script>
</body>
</html>
