<?php
$con_db = mysqli_connect("localhost", "root", "", "marco_restaurant");

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$object = isset($_POST['object']) ? $_POST['object'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';

$ok = true;

if(empty($name) || empty($email) || empty($comment)){
    $ok=false;
}

if ($ok == true){
    $query = "INSERT INTO `comment` (`id`, `name`, `email`, `object`, `comment`)
    VALUES (NULL, '$name', '$email', '$object', '$comment');";
    $data = mysqli_query($con_db,$query);
    if($data){
        $ok = true;
    }else{
        $ok = false;
    }
}
echo $ok;
?>
