<?php
// including the database connection file
include("../session/check_session.php");
include_once("../database/database.php");
 
$db = new Database();
 
//getting id from url
$id = $_GET['id'];
 
$query = "SELECT * FROM `registration`,`services` where `registration`.`service_id` = `services`.`service_id` and `registration`.`id` = $id";
$read = $db->select($query);
$row = $read->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="customer-profile">
                    <h2><button class="btn btn-dark"><a href="show_provider.php" style="color: #fff; text-decoration: none">All Provider</a></button></h2>
                    <img src="<?php echo $row['provider_pic'] ?>" alt="customer photo">
                    <h3>Name: <?php echo $row['provider_name']; ?></h3>
                    <h4 style="text-align: center;">Service: <?php echo $row['service_name']; ?></h4>
                    <p>Division: <?php echo $row['provider_division']; ?></p>
                    <p>Zilla: <?php echo $row['provider_zilla']; ?></p>
                    <p>Upazila: <?php echo $row['provider_upazila']; ?></p>
                    <p>Address: <?php echo $row['provider_address']; ?></p>
                    <p>Latitude: <?php echo $row['provider_lat']; ?></p>
                    <p>Longitude: <?php echo $row['provider_lang']; ?></p>
                    <p>Number: <?php echo $row['provider_phone']; ?></p>
                    <p>Email: <?php echo $row['provider_email']; ?></p>
                    <p>About: <?php echo $row['about_provider']; ?></p>
                    <p>Status: <?php echo $row['provider_status']; ?></p>
                       
                </div>
            </div>
        </div>
    </div>


</body>
</html>