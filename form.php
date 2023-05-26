<?php include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        
        <form action="#" method="POST">

            <div class="title"> 
                Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label for="">First Name</label>
                    <input type="text" class="input"  name="fname" required>
                </div> 

                <div class="input_field">
                    <label for="">Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label for="">Password</label>
                    <input type="password" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label for="">Confirm Password</label>
                    <input type="password" class="input" name="conpassword" required>
                </div>

                <div class="input_field">
                    <label for="">Gender</label>
                    <div class="custom_select">
                        <select  id="" name="gender" required>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                </div>

                <div class="input_field">
                    <label for="">Email Address </label>
                    <input type="text" class="input" name="eaddress" required>
                </div>

                <div class="input_field">
                    <label for="">Phone Number </label>
                    <input type="text" class="input" name="pnumber" required>
                </div>

                <div class="input_field">
                    <label for="">Address</label>
                    <textarea class="textarea" name="address" id="" cols="30" rows="10"></textarea required>       
                </div>

                <div class="input_field terms">
                    <label class="check" for="">
                        <input class="checked" type="checkbox"  required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field register-btn">
                    <input class="btn" type="submit" value="Register" name="register">
                </div>

            </div>
        </form>
    </div>
</body>
</html>


<?php

error_reporting(0);
if ($_POST['register']) {



      //php variables    and  html name attribute taken in _post method
            $fname       = $_POST['fname'];
            $lname       = $_POST['lname'];
            $password    = $_POST['password'];
            $conpassword = $_POST['conpassword'];   
            $gender      = $_POST['gender'];
            $eaddress    = $_POST['eaddress'];
            $pnumber     = $_POST['pnumber'];
            $address     = $_POST['address'];


    // if ($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $gender != "" && $eaddress != "" && $eaddress != "" && 
    // $address != "") {
        
        
        
    $query = "INSERT INTO form (fname,lname,password,conpassword,gender,eaddress,pnumber,address) values('$fname','$lname','$password','$conpassword','$gender','$eaddress','$pnumber','$address')";

// mysqli_query($connect,$query);




$data = mysqli_query($connect,$query);

if ($data) {
        //echo "data inserted ";
    }
    
    else{
            echo "data not inserted ";
        }



}

?>













