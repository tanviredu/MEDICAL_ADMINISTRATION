<?php 
    // user will be the admin himself
    // and the doctor
    //  and the patient
    require_once('config.php');
    require_once('database.php');
    require_once('function.php');

    class User{

    // this will be used in the patient
    public function validate_mobile($mobile){
        return preg_match('/^[0-9]{11}+$/', $mobile);

    }


    /********************************************** */
    public function validate_doctor($name,$password,$department){
        global $connection;
        global $func;
        $result = $connection->query("SELECT * FROM doctor WHERE name='$name' AND password='$password' AND department='$department'");
        $result = mysqli_fetch_array($result);
        if(!$result){
            echo "you are not doctor";
        }else{
            // you need to redirect the page
            echo "you are the doctor";
        }

}
    public function validate_patient($mobile,$password){
        // user will be validate with mobile and password
        global $connection;
        global $func;
        if($this->validate_mobile($mobile)){
            // if mobile validate right
            // search the database
            //echo $mobile;
            //echo $password;
            $result = $connection->query("SELECT name FROM patient WHERE mobile={$mobile} AND password={$password}");
            $result =mysqli_fetch_array($result);
            if(!$result){
                echo "user dont exists";
            }else{
                $func->redirect('index.php');
            }
        }else{
            echo "Enter proper mobile number to login";
        }
    
    }
    public function validate_admin($username,$password){
        global $connection;
        global $func;
        // find the username and the password in the database
        $result = $connection->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $result = mysqli_fetch_array($result);
        if(!$result){
            echo "user dont exists";
        }else{
            $func->redirect('index.php');
        }
        
    }

    }
    /***************************************************/

    $user = new User;
    //$user->validate_patient('01554313265','123456');
    // patient working prefectly
    //$user->validate_admin('pirate','pirate123');
    $user->validate_doctor('Rahman tanvir','1122','Anaesthetics');
?>

