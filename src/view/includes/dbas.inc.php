<?php 

// // include 'dbh.inc.php';

// $keyword = '';
// // $message = "";
// // $connect = new Dbh();
// // $conn = $connect->connect();

// if(isset($_POST['search'])){
//     $keyword = $_POST['keyword'];
//     // $search = mysqli_real_escape_string($conn, $keyword);
//     // $sql = "SELECT * FROM user_info WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR phone LIKE '%$search%'";
//     // $result = mysqli_query($conn,$sql);
//     // $queryResult = mysqli_num_rows($result);

//     // if($queryResult > 0){
//     //     while($row = mysqli_fetch_assoc($result)){
//     //         $data[] = $row;
//     //     }

//     // }else{
//     //     $message = "no search matches!!";
//     // }
    
// }

// // header("Location: ../home.php");

class Search extends Dbh{

    public function searchUsers(string $key){
    $conn = $this->connect();
    $search = mysqli_real_escape_string($conn, $this->key);
    $sql = "SELECT * FROM user_info WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR phone LIKE '%$search%'";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if($numRows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }else{
        $data[]="not found";
    }
}
}



?>