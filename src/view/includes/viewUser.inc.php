<?php

class ViewUser extends User {
    
    public function showAllUsers(){
    $datas = $this->getAllUsers();
    foreach($datas as $data){
        echo $data['id'] ;
        echo $data['name'] ;
        echo $data['phone'];
        echo $data['aynet'];
    }
}
}
?>