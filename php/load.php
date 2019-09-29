<?php
 require_once 'php/connection.php';
$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));
    $query = "Select _event.name, _event.description, _event.logo, _single.start_date, _event.adress from _event, _single where event_id=single_id and event_id=8";
    $result = mysqli_query($link,$query);
while ($row = $result->fetch_assoc()) {

                  
                  $name = $row['name'];
                  $desc = $row['description']; 
                $logo = $row['logo'];
    $logo = base64_encode( $logo );
        $mimetype = 'image/png';
                  $date = $row['start_date']; 
    $adress=$row['adress'];
    echo"<div class='info'>
        <div class='container'>
            <div class='info__inner'>
                <div class='info__img'>
                    <img src='https://via.placeholder.com/520x420' alt=''>
                </div>

                <div class='info__add'>
                    <h2 class='title-event'>$name</h2>
                    <img src='img/icons/title-icon.svg' alt='' class='icon-event'>
                    <p class='text-event'>
                           $desc
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class='contact'>
        <div class='container'>
            <div class='contact__inner'>
                <div class='contact__item'>
                    <img src='img/icons/timetable-icon.svg' alt='' class='icon-event'>
                    <p class='text-event'>
                            $date
                    </p>
                </div>

                <div class='contact__item'>
                    <img src='img/icons/address-icon.svg' alt='' class='icon-event'>
                    <p class='text-event'>
                          $adress
                    </p>
                </div>
            </div>
        </div>
    </div>";
   
                          
    }   mysqli_close($link);
?>