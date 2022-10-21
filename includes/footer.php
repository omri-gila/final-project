 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
 <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">TRIT</h2>
              <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <p><?php  echo substr($row['PageDescription'],0,200);?> <a href="about.php">More...</a></p><?php } ?>
            
            </div>
          </div>
         
          <div class="col-md" style="padding-left: 150px">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="services.php" class="py-2 d-block">Services</a></li>
               
                <li><a href="admin/index.php" class="py-2 d-block">Admin</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	              <ul>
	                <li><a href="https://www.google.com/maps/place/%D7%A9%D7%93%D7%A8%D7%95%D7%AA+%D7%90%D7%91%D7%90+%D7%90%D7%91%D7%9F+50,+%D7%94%D7%A8%D7%A6%D7%9C%D7%99%D7%94%E2%80%AD/@32.1638749,34.8054279,17z/data=!3m1!4b1!4m5!3m4!1s0x151d48932cc80fbf:0xb4a9c71c118e7f48!8m2!3d32.1638749!4d34.8032392?hl=iw"><span class="icon icon-map-marker"></span><span class="text"><?php  echo $row['PageDescription'];?></span></a></li>
	                <li><a href="contact.php"><span class="icon icon-phone"></span><span class="text">+<?php  echo $row['MobileNumber'];?></span></a></li>
	                <li><a href="https://mail.google.com/"><span class="icon icon-envelope"></span><span class="text"><?php  echo $row['Email'];?></span></a></li>
                  <li><a href="<?php echo $row['Instegram'] ?>"><span class="bi bi-instagram"></span>
                                                                <span class="text">&nbsp&nbsp&nbsp&nbsp Follow Us On Instegram</span></a></li>
	              </ul>
	            </div>
               <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  2022 &copy; Gabriel && Omri || datatrit@gmail.com  </p>
          </div>
        </div>
      </div>
    </footer>