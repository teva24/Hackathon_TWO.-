<?php 
                        require_once 'php/connection.php';
$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));
    $query = "Select * from _category";
    $result = mysqli_query($link,$query);
while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['category_id'];
                  $name = $row['name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
    }   
mysqli_close($link);
?>