<?php 
class Dbh {
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbname = 'demo_sadra';

    protected function connect(){
        $con = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
        if ($con -> connect_errno) {
            echo "Failed to connect to MySQL: " . $con -> connect_error;
            exit();
        }
        return $con;
        }
}
?>