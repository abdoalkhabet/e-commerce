<?php
    include("connect.php");
    ob_start();
?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive login Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Login Form</div>
        <div class="content">
            <form method="post">
                <?php
                if(isset($_POST['submit'])){
                  $username = htmlspecialchars($_POST['username']);
                  $pass = htmlspecialchars($_POST['pass']);
                  $quree ="SELECT * FROM `users` where `username` ='$username'" ;
                  $result= mysqli_query($mysqlconn,$quree) ;
                  // print_r($count);
                  $usererr ='';
                  if(mysqli_num_rows($result)==1){
                    $data=mysqli_fetch_assoc($result);
                    // print_r($data);
                    if($pass==$data['password']){
                      session_start();
                      $_SESSION['user'] = $data['id'];
                      $_SESSION['username'] = $data['username'];
                      header('location: index.php');
                  }else{
                      $usererr = 'Wrong Password';
                  }
                    // echo "login success";
                    // header("Location: index.php");
                }else if(mysqli_num_rows($result)== 0){
                      $usererr = 'User Not Found';
                  }
                    
                  else{
                    echo "login not successful";
                  }
                }

                
            ?>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">User Name</span>
                        <input type="text" name="username" placeholder="Enter your user Name"
                            value="<?php if(!empty($username)){echo $username;}?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="pass" placeholder="Enter your password">
                        <?php
                if(!empty($usererr)){
                  echo $usererr;
                }
            ?>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="submit" value="login">
                </div>
            </form>


        </div>
    </div>

</body>

</html>