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
      <th scope="col">Product name</th>
      <th scope="col">Product discrption</th>
      <th scope="col">pro price</th>
      <th scope="col">pro img</th>
      <th scope="col">pro categ</th>
      <th scope="col">pro brand </th>
      <th scope="col"> Action </th>
    </tr>
  </thead>
  <tbody>
    <?php
        $ff= "SELECT * FROM `products`";
        $hat = mysqli_query($mysqlconn,$ff);
        foreach($hat as $rr){?>
    
    <tr>
      <th scope="row"><?php echo($rr['id'])?></th>
      <td><?php echo($rr['pname'])?></td>
      <td><?php echo($rr['pdesc'])?></td>
      <td><?php echo($rr['pprice'])?></td>
      <td><?php echo($rr['pimage'])?></td>
      <td><?php echo($rr['pcateg'])?></td>
      <td><?php echo($rr['pbrand'])?></td>
      <td> 
        <form action="" method="post">
           <a href="deletepro.php?id=<?php echo($rr['id'])?>"> <input href=""" type="button" value="delete"></a>
           <a href="update.php?id=<?php echo($rr['id'])?>"> <input href=""" type="button" value="update"></a>
            
        </form>
      </td>
      
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</body>
</html>