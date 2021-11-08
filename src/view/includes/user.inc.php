<?php 
class User extends Dbh {
    
    public function getAllUsers(){
       $sql = "SELECT * FROM user_info";
       $result = $this->connect()->query($sql);
       $numRows = $result->num_rows;
       if($numRows > 0){
           while($row = $result->fetch_assoc()){
               $data[] = $row;
           }
           return $data;
       }
    }
    public function deleteUser($id){
    $sql = "DELETE FROM user_info WHERE user_info.id = '$id'";
    return $this->connect()->query($sql);
    
    }
}

?>