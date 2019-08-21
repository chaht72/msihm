<?php 
include("../header/header.php");

if (isset($_GET['submit'])) {
	$service_id = $_GET['service_id'];
	  
}else{
	echo "Pleace select an item";
}

 $query = "SELECT * FROM `registration` WHERE `service_id`='$service_id'";
 $read = $db->select($query);

 if ($read == null) {
 	echo "No Data found";
 }else{

?>

<!DOCTYPE html>
<html>
<head>

	<?php  ?>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Handyman</title>
    <script src="../vendor/jquery/jquery-3.4.0.min.js"></script>
	<title></title>
</head>
<body>

	<?php while ($total = $read->fetch_assoc()) { ?>
		<br>
		<div class="container">
			<div class="row">
				<div class="card" style="width: 500px">
					<div class="card-body row">
						<div class="col-sm-4">
							<img src="<?php echo $total['provider_pic'] ?>" alt="profile pic" onerror=this.src="../defult_image/profile.jpg" class="img-fluid bg-danger p-1" style="width: 200px;">
						</div>
						<div class="col-sm-8 mt-3">
							<h5 class="text-uppercase"><?php echo $total['provider_name']; ?></h5>
							<ul class="list-unstyled">
								<li><strong>Address:</strong> <?php echo $total['provider_address']; ?></li>
								<li><strong>Email:</strong> <?php echo $total['provider_email']; ?></li>
								<li><strong>Phone:</strong> <?php echo $total['provider_phone']; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 
}?>

</body>
</html>