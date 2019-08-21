<?php
include("../session/check_session.php");
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
	include("../database/database.php");
	$db = new Database();
	$query = "SELECT * FROM `services`";
	$read = $db->select($query);
	?>

	<!-- <button><a href="services_insert.php">Add New Services</a></button> -->

	<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="content-all">
                	<h2>All Service List <button class="btn btn-primary"><a href="services_insert.php" style="color: #fff; text-decoration: none">Add New Service</a></button><button class="btn btn-primary" style="margin-right: 3px;"><a href="../service_provider/show_provider.php" style="color: #fff; text-decoration: none">Provider</a></button></h2>
					<table class="table table-bordered mt-3 table-hover text-center">
						<!-- <thead>
							<tr>
								<th colspan="5">Services List</th>
							</tr>
						</thead> -->
						<thead>
			                <tr>
			                    <th>Service Name</th>
			                    <th>Service ID</th>
			                    <th>Service Description</th>
			                    <th>Status</th>
			                    <th colspan="2">Action</th>
			                   
			                </tr>
			            </thead>
			            <tbody style="text-align: center;">
							<?php if ($read){
							 while ($row = $read->fetch_assoc()) { ?>
							
							
							<tr>
								<td><?php echo $row['service_name']; ?></td>
								<td><?php echo $row['service_id']; ?></td>
								<td><?php echo $row['service_description']; ?></td>
								<td><?php echo $row['service_status']; ?></td>
								<td>
									<a href="service_update.php?id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a>
									 <a href="service_delete.php?id=<?php echo $row['id']?>" onclick = "return confirm('Are u sure to delete')" class="btn btn-danger">Delete</a>
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