<?php
    include('connect.php')
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
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <?php
          $error="";
          if(isset($_POST['submit'])){
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['pass']);
            $cpass = htmlspecialchars($_POST['cpass']);
            $address = htmlspecialchars($_POST['address']);
            $age = htmlspecialchars($_POST['age']);
            $gender = htmlspecialchars($_POST['gender']);
            $select = "SELECT * FROM USERS where username='$username' or email ='$email'";
            $doubl =mysqli_query($mysqlconn,$select);
            if (mysqli_num_rows($doubl)>0) {
              echo "username or email already exist" ;
              # code...
            }else{
              if ($pass ==$cpass) {
                
                $hashpass = password_hash($pass,PASSWORD_BCRYPT) ;
                $sqll= "INSERT INTO `users`(`fullname`, `username`,`password`, `email`, `phone`,`address`, `age`, `gender`) 
            values('$name','$username','$hashpass','$email','$phone','$address','$age','$gender')";
                $donee = mysqli_query($mysqlconn,$sqll);

                $error ='wrong pass';;
                header("location:index.php");
                # code...
              }else{
                echo "password not match" ;
              }
            }
            
            

          }
      ?>
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name"  value="<?php if(!empty($name)){echo $name;}?>">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name ="username" placeholder="Enter your username" value="<?php if(!empty($username)){echo $username;}?>" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" value="<?php if(!empty($email)){echo $email;}?>" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" value="<?php if(!empty( $phone)){echo  $phone;}?>">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter your password" value="<?php if(!empty($pass)){echo$pass;}?>">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpass" placeholder="Confirm your password" value="<?php if(!empty($username)){echo $username;}?>">
            <?php if(!empty($error)){echo $error;}?>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Confirm your password"value="<?php if(!empty($address)){echo $address;}?>" >
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" name="age" placeholder="Age" value="<?php if(!empty($age)){echo $age ;}?>" >
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <input type="text"name="gender" placeholder="Gender" value="<?php if(!empty($gender)){echo $gender;}?>" >
          </div>
        
        </div>
       
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
