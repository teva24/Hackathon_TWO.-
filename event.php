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


  <?php require 'php/load.php'; ?>
    <div class="actions">
        <a href="#" class="button">Подпись</a>

        <a href="#" class="favorite"><img class="img-fav" src="img/icons/favorite-icon.svg" alt=""> Избранное</a>
    </div>

    <footer>
            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> Copyright © 2019. All right reserved. </p>
                </div></div>
        </footer>
        
</body>
</html>