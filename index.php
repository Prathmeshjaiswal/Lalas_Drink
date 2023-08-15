<?php 
$insert = false;
if(isset($_POST['Name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection to database failed".mysql_connect_error());
}

   $Name = $_POST['Name'];
   $Age = $_POST['Age'];
   $Gender=$_POST['Gender'];
   $Email_id=$_POST['Email_id'];
   $Phone=$_POST['Phone-no'];
   $Address=$_POST['Address'];

 $sql = "INSERT INTO `lalas_drink`.`orders` (`Name`, `Age`, `Gender`, `Email_id`, `Phone-no`, `Address`) 
 VALUES ('$Name', '$Age', '$Gender', '$Email_id', '$Phone', '$Address');";



              if($con->query($sql)==true){
                $insert = true;
                
              }

              else
              echo "ERROR :$sql <br>$con->error";

              $con->close();
            }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lala's Drinks</title>
</head>
<body>
     <link rel="stylesheet" href="style.css">
     <img class="bgimg" src="bg.jpg">

    <h1>You want drinks ! We are here...</h1>
    <br>
    <h1>"Delivering Cheers to Your Doorstep: One Sip at a Time!"</h1>
    <br>
    <br>
    <?php
    if($insert == true){
    echo "<p class='successmsg'>Thanks for the order..Your order will be delivered soon..</P>";
    }
    ?>
    <form action="index.php" method="post">
    <div class="container">
        <input type="Text" name="Name" id="Name" placeholder="Enter your Full name">
        <input type="Text" name="Age" id="Age" placeholder="Enter your age">
        <input type="Text" name="Gender" id="Gender" placeholder="Enter your gender">
        <input type="email" name="Email_id" id="Email_id" placeholder="Enter your Email id">
        <input type="Phone-no" name="Phone-no" id="Phone-no" placeholder="Enter your phone-no">
        <br>
         <label for="alcohol_brand" class="alcohol_brand" >Choose an alcohol brand:</label>
        <select id="alcohol_brand" name="alcohol_brand">
            <option value="whiskey">Whiskey</option>
            <option value="vodka">Vodka</option>
            <option value="rum">Rum</option>
            <option value="gin">Gin</option>
            <option value="tequila">Tequila</option>
            <option value="beer">Beer</option>
            <option value="wine">Wine</option>
            <option value="other">Other</option>
        </select>
        <br>
        <input type="Text" name="Address" id="Address" placeholder="Enter your Address">
        <br>
    </div>
        <input type="submit" class="submit" value="Submit">
    </form>
</body>
</html>

