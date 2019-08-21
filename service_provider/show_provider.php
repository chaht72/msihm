<?php
include("../session/check_session.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Handyman</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php
	error_reporting(0);
	include("../database/database.php");
	$db = new Database();
	$query = "SELECT * FROM `services`,`registration` where `services`.`service_id` = `registration`.`service_id`";
	$read = $db->select($query);
	?>

	

	<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="content-all">
                	<h2>All Provider List <a class="btn btn-danger" href="../admin/logout.php">Logout</a><button class="btn btn-primary"><a href="provider_registration.php" style="color: #fff; text-decoration: none">Add New Provider</a></button><button class="btn btn-primary" style="margin-right: 3px;"><a href="../services/services.php" style="color: #fff; text-decoration: none">Services</a></button></h2>
					<table class="table table-bordered mt-3 table-hover text-center">
						<!-- <thead>
							<tr>
								<th colspan="5">Services List</th>
							</tr>
						</thead> -->
						<thead>
			                <tr>
			                    <th>Provider Name</th>
			                    <th>Services Name</th>
			                    <th>Provider Address</th>
			                    <th>Provider Phone</th>
			                    <th>Provider Status</th>
			                    <th colspan="3">Action</th>
			                   
			                </tr>
			            </thead>
			            <tbody style="text-align: center;">
							<?php if ($read){
							 while ($row = $read->fetch_assoc()) { ?>
							
							
							<tr>
								<td><?php echo $row['provider_name']; ?></td>
								<td><?php echo $row['service_name']; ?></td>
								<td><?php echo $row['provider_address']; ?></td>
								<td><?php echo $row['provider_phone']; ?></td>
								<td><?php echo $row['provider_status']; ?></td>
								<td>
								
								<?php
								// $sql = "SELECT * FROM `registration`";
								// $result = $db->select($sql);
        //                         $total = $result->fetch_assoc() ?>
									 <a href="provider_view.php?id=<?php echo $row['id']?>" class="btn btn-info">View</a>

									<a href="provider_update.php?id=<?php echo $row['id']?> " class="btn btn-primary">Edit</a>
									
									 <a href="provider_delete.php?id=<?php echo $row['id']?>" onclick = "return confirm('Are u sure to delete')" class="btn btn-danger">Delete
									 </a>
								</td>
								
							</tr>
							<?php }
								}else { ?>
							<p>Data is not avaiable</p>
						<?php } ?>
			                
			            </tbody>
					</table>
				</div>
            </div>
        </div>
    </div>

    <!-- optional javascript -->
    <script src="vendor/jquery/jquery-3.4.0.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	

</body>
</html> 