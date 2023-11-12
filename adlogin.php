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
            $eror = "" ;
            $erorpass="" ;
              if(isset($_POST['submit'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['pass']);
    
                if ($username != 'abdoshow'){
                    $eror ='wrong username';
                } else {
                    if ($username=='abdoshow'&&$password=='abdoo123'){
                        header('Location: adminpage.php');
                    } else{
                        $erorpass ='wrong password';
                    }
                }
              }  
            ?>
  <div class="container">
    <div class="title">Login Form</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" name="username" placeholder="Enter your user Name" value="<?php if(!empty($username)){echo $username;}?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter your password" required>
            <?php
                if(!empty($erorpass)){
                  echo $erorpass;
                }
            ?>
          </div>
        </div>
       
        <div class="button">
          <input type="submit" name ="submit" value="Register">
        </div>
      </form>


    </div>
  </div>

</body>
</html>
