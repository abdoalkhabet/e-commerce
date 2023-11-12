<?php
    include('connect.php')
?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Add a product Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
    <div class="title">Add a product form</div>
    <div class="content">
      <form method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product name</span>
            <input type="text" name="pname" placeholder="Enter Product name" required>
          </div>
          <div class="input-box">
            <span class="details">Product description</span>
            <input type="text"  name="pdisc" placeholder="Enter Product description" required>
          </div>
          <div class="input-box">
            <span class="details">Product price</span>
            <input type="text" name="pprice" placeholder="Enter Product price" required>
          </div>
          <div class="input-box">
            <span class="details">Product image</span>
            <input type="file" name="sora" placeholder="Enter Product image" required>
          </div>
          <div class="input-box">
            <span class="details">Product categery</span>
            <input type="text" name="pcate" placeholder="Enter Product categery " required>
          </div>
          <div class="input-box">
            <span class="details">Product brand</span>
            <input type="text"  name="pbrand" placeholder="Confirm Product brand" required>
          </div>
       
        
        </div>
       
        <div class="button">
          <input type="submit" name ="submit"value="Add a product">
        </div>
        <?php
            if (isset($_POST['submit'])) {
                $pname=htmlspecialchars($_POST['pname']);
                $pdisc = htmlspecialchars($_POST['pdisc']);
                $pprice = htmlspecialchars($_POST['pprice']);
                $pcate = htmlspecialchars($_POST['pcate']);
                $pbrand = htmlspecialchars($_POST['pbrand']);
                $img = $_FILES['sora']['name'];
                $imgtmp = $_FILES['sora']['tmp_name'];
                $path = 'imgs/' . $img;

                move_uploaded_file($imgtmp,$path);
                $send ="INSERT INTO `products` (`pname`, `pdesc`, `pprice`, `pimage`, `pcateg`, `pbrand`)
                 VALUES('$pname', '$pdisc','$pprice','$path','$pcate','$pbrand')";
                 $do=mysqli_query($mysqlconn,$send);

            }
        ?>
      </form>
    </div>
  </div>

</body>
</html>
