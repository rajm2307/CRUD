<?php
include("connection.php");

$varid = $_GET['id'];

$del = "DELETE  FROM form WHERE id = $varid";
 
$data = $mysqli_query($connect,$del);

if ($data) {

    echo "<script>alert('Data Deleted')</script>";
    // echo "Data Deleted";
    
    ?>

        
    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud%20operations/display.php" />


    <?php
}

else{
    echo "Data not Deleted";
}

?>