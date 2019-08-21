<?php
// include("../session/check_session.php");
include("../database/database.php");
$db = new Database();

$query = "SELECT * FROM `services`";
$read = $db->select($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../vendor/jquery/jquery-3.4.0.min.js"></script>

</head>
<body>
	<div id="main-content">
	    <div class="container">
	        <div class="row">
	            <h2 class="sendtoCustom">New Provider <button class="btn btn-primary"><a href="show_provider.php" style="color: #fff; text-decoration: none">All Provider</a></button></h2>
	            <!-- Message -->
	            <form class="form-area" action="provider_insert.php" method="post" enctype="multipart/form-data">

	                <div class="form-group">
	                    <label for="">Provider Name</label>
	                    <input type="text" value="" name="name"  class="form-control" placeholder="">
	                </div>

	                <div class="form-group">
	                    <label for="">Service Name</label>
	                    <select name="service_id" required class="browser-default custom-select">
	                    	<option value="" selected disabled>Please select a service</option>

	                    	<?php while ($row = $read->fetch_assoc()) { ?>
	                    		<option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?></option>
	                    	<?php } ?>
	                    </select>
	                </div>

	                <div class="form-group">
	                    <label for="">Provider ID</label>
	                    <input type="text" name="id" value="" class="form-control" placeholder="">
	                </div>

	                <div class="form-group">
	                	<label for="">Select Division</label>
	                    <select name="division" id="division" class="form-control">
	                    	<option value=""></option>
	                    </select>
	                </div>

	                <div class="form-group">
	                	<label for="">Select District</label>
	                    <select name="district" id="district" class="form-control">
	                    	<option value=""></option>
	                    </select>
	                </div>

	                <div class="form-group">
	                	<label for="">Select Thana</label>
	                    <select name="thana" id="thana" class="form-control">
	                    	<option value=""></option>
	                    </select>
	                </div>

	                <div class="form-group">
	                    <label for="">Provider Address/Home</label>
	                     <textarea name="address" id="" value="" cols="30" rows="3"  class="form-control" placeholder="enter address"></textarea>
	                </div>

	                <div class="form-group">
	                    <label for="">Provider Latitude</label>
	                    <input class="form-control" type="text" name="latitude" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">Provider Longitude</label>
	                    <input class="form-control" type="text" name="longitude" value="">
	                </div>

	                 <div class="form-group">
	                    <label for="">Provider Photo</label>
	                    <input class="form-control" type="file" name="uploadfile" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">Provider Email</label>
	                    <input class="form-control" type="email" name="email" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">Provider Phone</label>
	                    <input class="form-control" type="text" name="phone" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">Provider NID Number</label>
	                    <input class="form-control" type="text" name="nid_number" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">About</label>
	                    <textarea name="about" id="" value="" cols="30" rows="3"  class="form-control" ></textarea>
	                </div>

	                <div class="form-group">
	                    <label for="">User Name</label>
	                    <input class="form-control" type="text" name="username" value="">
	                </div>

	                <div class="form-group">
	                    <label for="">Password</label>
	                    <input class="form-control" type="password" name="password" value="">
	                </div>


	                <input type="submit" name="submit" value="Submit" class="btn btn-primary btnsave">
	            </form>
	        </div>
	    </div>
	</div>


	<script src="../js/main.js"></script>
</body>
</html> 