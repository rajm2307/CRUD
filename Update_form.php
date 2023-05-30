

<?php include("connection.php");

error_reporting(0);
$var_id = $_GET['id'];

$fetching = "SELECT * FROM form WHERE id = '$var_id'";
$data = mysqli_query($connect,$fetching); 
$result = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Form</title>
</head>

<body>
    <div class="container">
        
        <form action="#" method="POST">

            <div class="title"> 
                Update Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label for="">First Name</label>
                    <input type="text" value="<?php echo $result['fname']; ?>" class="input"  name="fname" required>
                </div> 

                <div class="input_field">
                    <label for="">Last Name</label>
                    <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label for="">Password</label>
                    <input type="password" value="<?php echo $result['password']; ?>" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label for="">Confirm Password</label>
                    <input type="password" value="<?php echo $result['conpassword']; ?>" class="input" name="conpassword" required>
                </div>

                <div class="input_field">
                    <label for="">Gender</label>
                    <div class="custom_select">
                        <select  id="" name="gender" required>
                            <option value="">Select</option>

                            <option value="male"

                            <?php
                            if ($result['gender']=='male') {
                                echo "selected";
                            }
                            
                            ?>   >Male</option>


                            <option value="female"

                            <?php
                            if ($result['gender']=='female') {
                                echo "selected";
                            }
                            
                            ?>
                            >    Female</option>
                            


                        </select>
                    </div>

                </div>

                <div class="input_field">
                    <label for="">Email Address</label>
                    <input type="text" value="<?php echo $result['eaddress']; ?>" class="input" name="eaddress" required>
                </div>

                <div class="input_field">
                    <label for="">Phone Number </label>
                    <input type="text" value="<?php echo $result['pnumber']; ?>" class="input" name="pnumber" required>
                </div>

                <div class="input_field">
                    <label for="">Address</label>
                    <textarea class="textarea" name="address" id="" cols="30" rows="10" required ><?php echo $result['address']; ?></textarea >       
                </div>

                <div class="input_field terms">
                    <label class="check" for="">
                        <input class="checked" type="checkbox"  required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field register-btn">
                    <input class="btn" type="submit" value="Update Details" name="Update">
                </div>

            </div>
        </form>
    </div>
</body>
</html>


<?php



error_reporting(0);

if ($_POST['Update']) {

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
        
        
    // $query = "INSERT INTO form (fname,lname,password,conpassword,gender,eaddress,pnumber,address) values('$fname','$lname',
    // '$password','$conpassword','$gender','$eaddress','$pnumber','$address')";



    $query = "UPDATE form set fname='$fname',lname='$lname',password='$password',conpassword='$conpassword',gender='$gender',eaddress='$eaddress',pnumber='$pnumber',address='$address' WHERE id='$var_id'";

// mysqli_query($connect,$query);




$data = mysqli_query($connect,$query);

if ($data) {

        echo "<script>alert('Record Updated')</script>";

        ?>

        
        <meta http-equiv = "refresh" content = "0; url = http://localhost/CRUD/display.php" />


        <?php

    }
    
    else{
            echo "data not inserted ";
        }



    }




?>













