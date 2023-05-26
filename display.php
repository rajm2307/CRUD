<html>
    <head>
        <title>Display Records</title>
        <style>

            body {
                background:grey;
            }

            body h2 {
                display:flex;
                justify-content:center;
                align-items:center;
            }


            
            div{
                margin:20 auto;
                background: yellow;
                
            }


            table{
                border: 5px solid black;
                margin:0 auto;
                background:white;
                border-collapse:separate;
                border-spacing:5px 5px;
            }
            
            th{
                border: 1px solid black;
            }

            td{
                border: 1px solid black;
                
            }

            .update-btn,.delete-btn{
                background-color: green;
                color: white;
                cursor: pointer;
                outline-style: none;
                border-radius:5px;
            }
            
            .delete-btn{
                background-color: red;
               
            }
        </style>
    </head>
</html>

<?php
error_reporting(0);
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($connect,$query);

$total = mysqli_num_rows($data);
// echo $total;

$result = mysqli_fetch_assoc($data);

// echo $result;


// if ($total != 0) 
// {

    ?>


    <div>
    <h2> Displaying ALL Records</h2>
    </div>
    <table >
        <thead>
            
            <tr >
                <th style="width:2%">ID</th>
                <th style="width:8%">First Name </th>
                <th style="width:8%">Last Name </th>
                <th style="width:8%">Password </th>
                <th style="width:8%">Confirm Password </th>
                <th style="width:6%">Gender </th>
                <th style="width:20%">Email Address </th>
                <th style="width:8%">Phone Number </th>
                <th style="width:18%">Address </th>
                <th style="width:11%">Operations </th>
            </tr>
            
        </thead>
        

        <?php

while ($result = mysqli_fetch_assoc($data)) {

    echo "<tr>
    <td>".$result['id']."</td>
    <td>".$result['fname']."</td>
    <td>".$result['lname']."</td>
    <td>".$result['password']."</td>
    <td>".$result['conpassword']."</td>
    <td>".$result['gender']."</td> 
    <td>".$result['eaddress']."</td>
    <td>".$result['pnumber']."</td>
    <td>".$result['address']."</td>
    <td> 
    <a href='Update_form.php?id=$result[id]fn=$result[fname]&ln=$result[lname]&pwd=$result[password]&cfmpwd=$result[conpassword]&gen=$result[gender]&eadrs=$result[eaddress]&pnum=$result[pnumber]&adrs=$result[address]'><input class='update-btn' type='submit' value='Update' ></a> 
    <a href='Delete.php?id=$result[id]fn=$result[fname]&ln=$result[lname]&pwd=$result[password]&cfmpwd=$result[conpassword]&gen=$result[gender]&eadrs=$result[eaddress]&pnum=$result[pnumber]&adrs=$result[address]'><input class='delete-btn' type='submit' value='Delete' 
    onclick = 'return cdelete()'></a>
    </td>
    </tr>";


    
    // echo $result['fname']." ".$result['lname']." ".$result['password']." "
    // .$result['gender']." ".$result['eaddress']." ".$result['pnumber']." ".$result['address']."<br>";
    
// }   
}





?>
</table>
<script>

function cdelete() {
    return confirm("Are you sure you want to delete that record");
}

</script>








