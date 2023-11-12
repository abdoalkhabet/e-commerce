<?php
    include('connect.php') ;
    session_start() ;
    
?>


<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>

    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if (!empty($_SESSION['user'])) {
      $tnt = $_SESSION['user'] ;
      $khod = "SELECT * FROM `users` where `id` = '$tnt'" ;
      $done = mysqli_query($mysqlconn,$khod) ;
      $arr =mysqli_fetch_assoc($done);
      // print_r($arr);
      
    }
    ?>
    <div class="container">
        <div class="title">User profile</div>
        <div class="content">

            <form method="post" action="">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Your Name</span>
                        <input type="text" placeholder="Enter your name" name="fullname"
                            value="<?php echo($arr['fullname'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> Your Username</span>
                        <input type="text" placeholder="Enter your username" name="username"
                            value="<?php echo($arr['username'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Your Email</span>
                        <input type="text" placeholder="Enter your email" name="email"
                            value="<?php echo($arr['email'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Your Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="phone"
                            value="<?php echo($arr['phone'])?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Your Address</span>
                        <input type="text" placeholder="Confirm your password" name="address"
                            value="<?php echo($arr['address'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Your Age</span>
                        <input type="number" placeholder="Age" name="age" value="<?php echo($arr['age'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Your Gender</span>
                        <input type="text" placeholder="Gender" name="gender" value="<?php echo($arr['gender'])?>"
                            required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Update">
                </div>
                <?php
                  if (isset($_POST['submit'])) {
                    echo "hi" ;
                  $name=htmlspecialchars($_POST['fullname']);
                  $username = htmlspecialchars($_POST['username']);
                  $email = htmlspecialchars($_POST['email']);
                  $phone = htmlspecialchars($_POST['phone']);
                  $address = htmlspecialchars($_POST['address']);
                  $age = htmlspecialchars($_POST['age']);
                  $gender = htmlspecialchars($_POST['gender']);
                  $update= " UPDATE `users` SET `fullname`='$name' , `username`='$username' , `email`='$email' 
                  , `phone`='$phone' , `address`='$address', `age`='$age' , `gender`='$gender' WHERE `id`='$tnt'";
                  $tmam= mysqli_query($mysqlconn, $update);
                  if ($tmam ==1) {
                    header("Location: userprof.php");
                    echo "Data has been updated ";
                    // exit;
                  } 
                } ;
                
                  
                
                ?>
            </form>

        </div>
    </div>

</body>

</html>