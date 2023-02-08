<?php
    define('DB_Host','localhost');
    define('DB_User','root');
    define('DB_Password','');
    define('DB_name','bookstore');

    $conn=new mysqli(DB_Host,DB_User,DB_Password,DB_name);
    if($conn->connect_error){
        die("Failed to connect".$conn->connect_error); 
    }
    echo'connected'

?>