<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
	}


	
if(isset($_POST['submit']))
  {
	
	$fname=$_REQUEST['fname'];
	$fname=$_REQUEST['lname'];
	$location=$_REQUEST['location'];
	$mob=$_REQUEST['mob'];
	$addr=$_REQUEST['addr'];
	$email=$_REQUEST['email'];
	$pw=$_REQUEST['pw'];
	$idedit=$_REQUEST['idedit'];
	
	$sql="UPDATE user SET fname=(:fname), lname=(:lname),location=(:location),mob=(:mob),addr=(:addr),email=(:email), pw=(:pw) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':fname', $fname, PDO::PARAM_STR);
	$query-> bindParam(':lname', $lname, PDO::PARAM_STR);
	$query-> bindParam(':location', $location, PDO::PARAM_STR);
	$query-> bindParam(':mob', $mob, PDO::PARAM_STR);
	$query-> bindParam(':addr', $addr, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':pw', $pw, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>ShakaZulu Foods</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>

<body>
<?php
		$sql = "SELECT * from user where id = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$editid,PDO::PARAM_INT);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h3 class="page-title">Edit Customer Details : <?php echo htmlentities($result->name); ?></h3>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data" name="imgform">
<div class="form-group">
<!----------------------------------------------------------------------------------------------------------->
<label class="col-sm-2 control-label">FirstName<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="TEXT" name="fname" class="form-control" required value="<?php echo htmlentities($result->fname);?>">
</div>
<!-- ----------------------------------------------------------------------------------------------------- -->
<label class="col-sm-2 control-label">LastName<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="TEXT" name="lname" class="form-control" required value="<?php echo htmlentities($result->lname);?>">
</div>
<!-- ------------------------------------------------------------------------------------------------------- -->
<label class="col-sm-2 control-label">Location<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="#" name="location" class="form-control" required value="<?php echo htmlentities($result->location);?>">
</div>
<!-- -------------------------------------------------------------------------------------------------------- -->
<label class="col-sm-2 control-label">PhoneNumber<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="TEXT" name="mob" class="form-control" required value="<?php echo htmlentities($result->mob);?>">
</div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<label class="col-sm-2 control-label">Address<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="TEXT" name="addr" class="form-control" required value="<?php echo htmlentities($result->addr);?>">
</div>
<!------------------------------------------------------------------------------------------------------------->
<label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="TEXT" name="email" class="form-control" required value="<?php echo htmlentities($result->email);?>">
</div>
<!-- ---------------------------------------------------------------------------------------------------------->
<label class="col-sm-2 control-label">Password<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="password" name="pw" class="form-control" required value="<?php echo htmlentities($result->pw);?>">
</div>

<!-- --------------------------------------------------------------------------------------------------------- -->

<!-- <label class="col-sm-2 control-label">idedit<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="idedit" class="form-control" required value="<?php echo htmlentities($result->idedit);?>">
</div> -->
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Gender<span style="color:red">*</span></label>
<div class="col-sm-4">
<select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
</div>
<label class="col-sm-2 control-label">Designation<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="designation" class="form-control" required value="<?php echo htmlentities($result->designation);?>">
</div>
</div> -->


<!-- <div class="form-group">
<label class="col-sm-2 control-label">Image<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="file" name="image" class="form-control">
</div>

<label class="col-sm-2 control-label">Mobile No.<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="mobileno" class="form-control" required value="<?php echo htmlentities($result->mobile);?>">
</div>
</div>
 -->
<!-- <div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<img src="../images/<?php echo htmlentities($result->image);?>" width="150px"/>
		<input type="hidden" name="image" value="<?php echo htmlentities($result->image);?>" >
		<input type="hidden" name="idedit" value="<?php echo htmlentities($result->id);?>" >
</div>
</div> -->


<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>

</body>
</html>
<?php } ?>