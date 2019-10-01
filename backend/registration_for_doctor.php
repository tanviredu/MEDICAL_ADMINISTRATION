<?php

    // make the registration logic here
    // validation and also the input here
    // this script is not dome 
    // and making more edit

    // class Registration{

    //     //this is for mobile validation
    //     public function validate_mobile($mobile){
    //         return preg_match('/^[0-9]{11}+$/', $mobile);
    //     }
    //     //** this can be used later */
    //     public function filter_email($email){
    //         // sanitaize the email
    //         $email =  filter_var($email,FILTER_SANITIZE_EMAIL);
    //         // now validate
    //         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    //             return false;
    //         }else{
    //             return true;
    //         }

    //     }


    //     // check if the user is already registered
    //     public function get_user_by_mobile_and_pass($mobile){
    //         global $connection;
    //         $res=$connection->query("SELECT name from patient WHERE mobile={$mobile}");
    //         //$connection->get_all_info($res);
    //         return $res;
    //     }

    //     public function make_registration($patient_id,$name,$doctor_name,$mobile,$time,$password){
    //         // make the sql
    //         // of course this has to sanitize with the jquery
    //         global $connection;
    //         $sql = "INSERT INTO patient(patient_id,name,doctor_name,mobile,time,password) values ('$patient_id', '$name', '$doctor_name','$mobile','$time','$password')";
    //         $result = $connection->query($sql);
    //         // confirm it
    //         if($connection->confirm_query($result)){
    //             return true;
    //         }else{
    //             return false;
    //         }


    //     }
    // }
    //$reg = new Registration;


// this is how to covert time to mysql

//$unix_time = strtotime($time);
//$time= date("Y-m-d H:i:s",$unix_time);





?>