<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-dark    ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">user name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $ff= "SELECT * FROM `users`";
        $hat = mysqli_query($mysqlconn,$ff);
        foreach($hat as $rr){?>
    
    <tr>
      <th scope="row"><?php echo($rr['id'])?></th>
      <td><?php echo($rr['fullname'])?></td>
      <td><?php echo($rr['username'])?></td>
      <td><?php echo($rr['email'])?></td>
      <td><?php echo($rr['phone'])?></td>
      <td><?php echo($rr['address'])?></td>
      <td><?php echo($rr['age'])?></td>
      
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</body>
</html>