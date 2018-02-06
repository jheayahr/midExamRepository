<?php
    $conn = mysqli_connect("localhost","root","foo.bar143","library");
        if(!$conn){
            die("Connection is failed: ".mysqli_connect_error);
        }else{
            #echo 'Connected Successfully';
        }
?>