<?php
include("../session/check_session.php");
// including the database connection file
include("../database/database.php");
 
$db = new Database();
 
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = $db->select("SELECT * FROM `services` WHERE `id` = '$id'");
 
foreach ($result as $res) {
    $name        = $res['service_name'];
    $description = $res['service_description'];
}
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

<body>

    <div id="main-content">
        <div class="container">
            <div class="row">
                <h2 class="sendtoCustom">Update Service <button class="btn btn-primary"><a href="services.php" style="color: #fff; text-decoration: none">All Service</a></button></h2>

            	<form class="form-area" action="service_updating.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Service Name</label>
                        <input class="form-control" type="text" value="<?php echo $name ?>" name="name">
                    </div>

            		<div class="form-group">
            			<label>Service Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10" value="<?php echo $description ?>"></textarea>
            		</div>


            		<div>
                		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <input class="btn btn-primary btnsave" type="submit" name="update" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>