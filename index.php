<?php
    $server =   "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to thsii database failed due to" .
        mysqli_connect_error());


    }

    // echo "Success connecting to the db";

    $name = $_POST[]
    $sql = "INSERT INTO 'trip' ('name','age','gender','email','phone','other','dt') VALUES('$Name' ,
    '23' ,'male','this@this.com','99999','This is my first php myadmin message',
     )"

?>