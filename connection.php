<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$data_base_name ="responsiveform";


$connect = mysqli_connect($servername,$username,$password,$data_base_name);

if ($connect) {
    // echo "connection pass";
}

else{
    echo "connection failed";
}

?>