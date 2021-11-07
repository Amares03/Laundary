<?php 



class Search extends Dbh{

    public function searchUsers($key){
    $conn = $this->connect();
    $search = mysqli_real_escape_string($conn, $key);
    $sql = "SELECT * FROM user_info WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR phone LIKE '%$search%'";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if($numRows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }else{
        $data = "not found";
    }
    return $data;
}
}



?>