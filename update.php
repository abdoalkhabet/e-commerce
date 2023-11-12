<?php
    include('connect.php');
    $id =($_GET['id']);

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
                    <?php
        $ff= "SELECT * FROM `products`";
        $hat = mysqli_query($mysqlconn,$ff);
        foreach($hat as $rr){}?>
                    <div class="input-box">
                        <span class="details">Product name</span>
                        <input type="text" name="pname" placeholder="Enter Product name"
                            value="<?php echo($rr['pname'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Product description</span>
                        <input type="text" name="pdisc" placeholder="Enter Product description"
                            value="<?php echo($rr['pdesc'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Product price</span>
                        <input type="text" name="pprice" placeholder="Enter Product price"
                            value="<?php echo($rr['pprice'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Product image</span>
                        <input type="file" name="sora" placeholder="Enter Product image"
                            value="<?php echo($rr['pimage'])?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Product categery</span>
                        <input type="text" name="pcate" placeholder="Enter Product categery "
                            value="<?php echo($rr['pcateg'])?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Product brand</span>
                        <input type="text" name="pbrand" placeholder="Confirm Product brand"
                            value="<?php echo($rr['pbrand'])?>" required>
                    </div>
                    <!-- -->


                </div>

                <div class="button">
                    <input type="submit" name="submit" value="Update product">
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
                $path = 'updats_img/' . $img;

                move_uploaded_file($imgtmp,$path);
                // $send ="INSERT INTO `products` (`pname`, `pdesc`, `pprice`, `pimage`, `pcateg`, `pbrand`)
                //  VALUES('$pname', '$pdisc','$pprice','$path','$pcate','$pbrand')";
                $updat = " UPDATE `products` SET `pname` = '$pname' , `pdesc`='$pdisc',
                `pprice`='$pprice' ,`pimage` ='$path',`pcateg` ='$pcate', `pbrand`='$pbrand' where `id`='$id' ";
                $doo =mysqli_query($mysqlconn,$updat);
                if ($doo ==1) {
            
                  header("Location: viewpro.php");
                  exit;
              } else {
                 echo "Error updating user data: " ;
              }


            }
            
            ?>
            </form>
        </div>
    </div>

</body>

</html>