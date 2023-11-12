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
    <div class="title">ADMIN CONTROL</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Add product</span>
           <a href="addproductform.php"> <input type="button" value="ADD PRODUCT" ></a>
          </div>
          <div class="input-box">
            <span class="details">MASSAGES</span>
            <a href="view.msg.php"> <input type="button" value="VIEW MASSAGES" ></a>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <a href="viewusers.php"> <input type="button" value="VIEW USERS" ></a>
          </div>
          <div class="input-box">
            <span class="details">VIEW PRODUCT</span>
            <a href="viewpro.php"> <input type="button" value="VIEW PRODUCT" ></a>
          </div>    
        </div>
       
        <div class="button">
          <input type="submit" value="LOG OUT">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
