<?php 
class Dbh{
    private $username ;  
    private $password ;
    private $servername ;
    private $dbaname ;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "amaressabit";
        $this->dbaname = "laundry";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbaname);
        return $conn;
    }
}

?>