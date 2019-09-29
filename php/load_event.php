<?php
 require_once 'php/connection.php';
$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));
    $query = "Select _event.name, _event.description, _event.logo, _single.start_date from _event, _single where event_id=single_id";
    $result = mysqli_query($link,$query);
while ($row = $result->fetch_assoc()) {

                  
                  $name = $row['name'];
                  $desc = $row['description']; 
                $logo = $row['logo'];
    $logo = base64_encode( $logo );
        $mimetype = 'image/png';
                  $date = $row['start_date']; 
    echo "<div class='main__item'>";
                  echo " <div class='item-img'>
                  <img src='https://via.placeholder.com/260'>
                   </div>";
                    echo "<div class='item-info'>
                    <h2 class='item-title'><a href='event.php'>$name</a></h2>";
                        echo"<p class='item-desc'>$desc</p> </div> <div class='item-timetable'>Дата:<br>$date</div> </div> ";
                          
    }   mysqli_close($link);
?>