<?php
include("../session/check_session.php");
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-content">
        <div class="container">
            <div class="row">
            	<h2 class="sendtoCustom">New Service<button class="btn btn-primary"><a href="services.php" style="color: #fff; text-decoration: none">All Service</a></button></h2>
				<form class="form-area" action="service_insertation.php" method="post">
			        <div>
			            <label class="form-group"><b>Service Name</b></label>
			            <input class="form-control" type="text" value="" name="name">
			        </div>

					<div>
						<label class="form-group"><b>Service Description</b></label>
						<textarea class="form-control" name="description" cols="30" rows="10"></textarea>
					</div>

					<div>
			            <input class="btn btn-primary btnsave" style="margin-top: 5px" type="submit" name="submit" value="Add Service">
			        </div>
			    </form>
			</div>
        </div>
    </div>
</body>
</html> 