<?php
//Đừng có đụng dô đụng dô không cần thay đổi gì hết
class DB{
    //đừng thay đổi gì hết
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "domdom";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}

?>