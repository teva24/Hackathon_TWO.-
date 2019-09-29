<?php
if ( isset( $_COOKIE['eve'] ) ) {
   $id = $_COOKIE['eve'];
     require_once 'php/connection.php';
$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));
    
        $query = "Select * from _user where user_id=$id";
    $result = mysqli_query($link,$query);
while ($row = $result->fetch_assoc()) {

                  unset($first_name, $last_name);
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name']; 
                echo"<span class='username'>$first_name  $last_name</span>";
    }
} 
else {
    
    header("Location: login.php");
}
mysqli_close($link);


?>