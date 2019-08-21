<?php
include("../header/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_GET['submit'])) {
		$division = $_GET['division'];
		$district = $_GET['district'];
		$thana    = $_GET['thana'];
		$service  = $_GET['service'];

		 $sql = "SELECT * FROM  `services`,`registration` WHERE `services`.`service_id` = `registration`.`service_id` AND `registration`.`provider_division` = '$division' && `registration`.`provider_zilla` = '$district' && `registration`.`provider_upazila` = '$thana' && `registration`.`service_id` = '$service' ";

		 $data = $db->select($sql);
		 if ($data !== null) {
		 	 while ($total = $data->fetch_assoc()) { ?>
		 	 	<br>
		 	 	<!-- profile banner -->
				<div class="container">
			      <div class="row">
			        <div class="card">
			          <div class="card-body row">
			            <div class="col-sm-4">
			              <img src="<?php echo $total['provider_pic'] ?>" alt="profile pic" onerror=this.src="../defult_image/profile.jpg" class="img-fluid bg-danger p-1" style="width: 200px;">
			            </div>
			            <div class="col-sm-8 mt-3">
			              <h5 class="text-uppercase"><?php echo $total['provider_name']; ?></h5>
			              <ul class="list-unstyled">
			                <li><strong>Service Name:</strong> <?php echo $total['service_name']; ?></li>
			                <li><strong>Address:</strong> <?php echo $total['provider_address']; ?></li>
			                <li><strong>Email:</strong> <?php echo $total['provider_email']; ?></li>
			                <li><strong>Phone:</strong> <?php echo $total['provider_phone']; ?></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
				<?php echo "</br>"; ?>
			<?php }
		 }else{
				echo "No Data found";

			}
		
		}
	?>


</body>
</html>