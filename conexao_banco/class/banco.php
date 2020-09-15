<?php 
 
class DB_CONNECT
{
    private $con;
    private $user = "root"; 
	private $password = ""; 
	private $database = "rv"; 
	private $hostname = "localhost"; 

    function __construct() {
        $this->connect();
    }

    function __destruct() {
        $this->close();
    }

    function connect()
    {
        if ($this->con) {
            return NULL;
        }

        //require_once __DIR__ . '/db_config.php';
        $this->con = mysqli_connect($this->hostname, $this->user, $this->password, $this->database) or die(mysqli_error());
    }

    function getConnection()
    {
        return $this->con;
    }

    function close()
    {
        mysqli_close($this->con);
    }
}


?>