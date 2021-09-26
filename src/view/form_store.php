<?php

 if(isset($_POST['id'])){
    $id =  $_POST['id'];
 }
 if(isset($_POST['name'])){
    $name =  $_POST['name'];
 }
 if(isset($_POST['phone'])){
    $phone =  $_POST['phone'];
 }
 if(isset($_POST['bezat'])){
    $bezat =  $_POST['bezat'];
 }
 else{
    $id =  null;
    $name =  null;
    $phone =  null;
    $bezat = null;
 }

if(is_null($_POST['id'])){
    header('Location:home.php');
}else{
    header('Location:forms.php');

}

?>
