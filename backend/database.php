<?php 
    // making as minimum as possible
    require_once('config.php');

    class MySQLDatabase{

        private $connection;

    function __construct(){
        $this->connection();

    }
    public function connection(){
        // this is part of the constructor
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    }

    public function close_connection(){
        if(isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function confirm_query($result){
        if(!$result){
            return 0;
        }else{
            return 1;
        }
    }

    public function query($sql){
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $result = mysqli_query($this->connection,$sql);
        $confirm = $this->confirm_query($result);
        if($confirm){
            return $result;
        }else{
            echo "problem";
        }

    }

    public function fetch_array($result){
        return mysqli_fetch_array($result);
    }

    //testing function

    public function get_all_info($data){

        $data = mysqli_fetch_all($data);
        foreach($data as $value){
            var_dump($value);
        }

    }

    

    }

    $connection = new MySQLDatabase;
    //$result = $connection->query("SELECT * FROM user");
    //$connection->get_all_info($result);

?>