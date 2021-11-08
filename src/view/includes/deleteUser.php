<?php 
 include_once 'dbh.inc.php';
 include_once 'user.inc.php';
 include_once 'viewUser.inc.php';
 include_once 'dbas.inc.php';

 
$delPerson = new User;

$id = $_POST['id'] ;
if(!(is_null($id))){
    $delPerson->deleteUser($id);
}


header("Location: ../home.php?insert=Done");

?>