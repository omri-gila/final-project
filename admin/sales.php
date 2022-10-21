<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['tritsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
  	$tritsaid=$_SESSION['tritsaid'];
    $pagetitle=$_POST['pagetitle'];
		$pagedes=$_POST['pagedes'];
		$mobnumber=$_POST['mobnumber'];

     
    $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',MobileNumber='$mobnumber',PageDescription='$pagedes' where  PageType='sales'");
    if ($query) {
    $msg="sales has been updated.";
    
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
  	  }
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Trit | Sale's</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Update Sale's</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Sale's:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php

$ret=mysqli_query($con,"select * from  tblpage where PageType='sales'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group">
							 <label for="exampleInputEmail1">Sale Title</label>
							 <input type="text" class="form-control" name="pagetitle" id="pagetitle" value="<?php  echo $row['SelaTitle'];?>" required="true">
							 </div>
							 <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea> 
      				</div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						</div>
					</div>
				</div>

<?php } ?>
                <!------- Update Sales 2 -------->
<?php

{
if(isset($_POST['submit1']))
  {
  	$tritsaid=$_SESSION['tritsaid'];
    $pagetitle=$_POST['pagetitle'];
		$pagedes=$_POST['pagedes'];
		$mobnumber=$_POST['mobnumber'];
	

    $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',MobileNumber='$mobnumber',PageDescription='$pagedes' where  PageType='sales2'");
    if ($query) {
    $msg="sales has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
	}
 	 ?>
		<!-- //header-ends -->
		<!-- main content start-->
			<div id="page-wrapper">
				<div class="forms">
					<h3 class="title2">Update Sale's 2</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Sale's 2:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 
$ret=mysqli_query($con,"select * from  tblpage where PageType='sales2'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group"> <label for="exampleInputEmail1">Sale Title</label> <input type="text" class="form-control" name="pagetitle" id="pagetitle" value="<?php  echo $row['SelaTitle'];?>" required="true"> </div>
							  <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea> </div>
							 <?php } ?>
							  <button type="submit1" name="submit1" class="btn btn-default">Update</button> </form> 
							</div>
						</div>
			</div>
		</div>
<?php } ?>

                <!------- Update Sales 3 -------->

<?php

{
if(isset($_POST['submit2']))
  {
  	$tritsaid=$_SESSION['tritsaid'];
    $pagetitle=$_POST['pagetitle'];
		$pagedes=$_POST['pagedes'];
		$mobnumber=$_POST['mobnumber'];
	
     
    $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',MobileNumber='$mobnumber',PageDescription='$pagedes' where  PageType='sales3'");
    if ($query) {
    $msg="sales has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

}
  ?>

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title3">Update Sale's 3</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Sale's 3:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 
$ret=mysqli_query($con,"select * from  tblpage where PageType='sales3'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group"> <label for="exampleInputEmail1">Sale Title</label> <input type="text" class="form-control" name="pagetitle" id="pagetitle" value="<?php  echo $row['SelaTitle'];?>" required="true"> </div>
							  <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea> </div>
							 <?php } ?>
							  <button type="submit2" name="submit2" class="btn btn-default">Update</button> </form> 
						</div>
						
				</div>
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>

