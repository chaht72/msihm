<?php
// including the database connection file
include("../session/check_session.php");
include("../database/database.php");
 
$db = new Database();
 
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = $db->select("SELECT * FROM `registration`,`services` where  `registration`.`service_id` = `services`.`service_id` and `registration`.`id` = '$id'");
 
foreach ($result as $res) {
    $name       = $res['provider_name'];
    $service_name = $res['service_name'];
    $service_id = $res['service_id'];
    $id         = $res['provider_id'];
    $division   = $res['provider_division'];
    $zilla      = $res['provider_zilla'];
    $upazila    = $res['provider_upazila'];
    $address    = $res['provider_address'];
    $photo      = $res['provider_pic'];
    $phone      = $res['provider_phone'];
    $email      = $res['provider_email'];
    $nid_number = $res['provider_nid_number'];
    $about      = $res['about_provider'];
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
</head>
<body>

    <div id="main-content">
        <div class="container">
            <div class="row">
                 <h2 class="sendtoCustom">Update Provider <button class="btn btn-primary"><a href="show_provider.php" style="color: #fff; text-decoration: none">All Provider</a></button></h2>
            	<form class="form-area" action="provider_updating.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Provider Name</label>
                        <input class="form-control" type="text" value="<?php echo $name ?>" name="name">
                    </div>



                    <div class="form-group">
                        <label for="">Service Name</label>
                        <select name="service_id" class="browser-default custom-select">
                            <?php
                            $total = $db->select("SELECT * FROM `services`");
                            while ($row = $total->fetch_assoc()) { 
                            ?> 
                            <option value="<?php echo $row['service_id']; ?>" <?php echo ($service_id == $row['service_id']) ? 'selected': ''; ?>>
                                <?php echo $row['service_name']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

            		<div class="form-group">
            			<label>Provider ID</label>
                        <input class="form-control" type="text" value="<?php echo $id ?>" name="id">
            		</div>

                    <div class="form-group">
                        <label>Provider Division</label>
                        <input class="form-control" type="text" value="<?php echo $division ?>" name="division">
                    </div>

                    <div class="form-group">
                        <label>Provider Zilla</label>
                        <input class="form-control" type="text" value="<?php echo $zilla ?>" name="zilla">
                    </div>

                    <div class="form-group">
                        <label>Provider Upazila</label>
                        <input class="form-control" type="text" value="<?php echo $upazila ?>" name="upazila">
                    </div>

                    <div class="form-group">
                        <label>Provider Address</label>
                        <textarea name="address" id="" value="<?php echo $address ?>" cols="30" rows="3"  class="form-control" placeholder="enter address"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Provider Latitude</label>
                        <input class="form-control" type="text" name="latitude" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Provider Longitude</label>
                        <input class="form-control" type="text" name="longitude" value="">
                    </div>

                    <div>
                        <img width="100px" height="100px" src="<?php echo $photo; ?>" alt="<?php echo $name;?>">
                    </div>

                    <div class="form-group">
                        <label>Provider Photo</label>
                        <input class="form-control" type="file" value="<?php echo $photo ?>" name="uploadfile">
                    </div>

                    <div class="form-group">
                        <label>Provider Phone</label>
                        <input class="form-control" type="text" value="<?php echo $phone ?>" name="phone">
                    </div>

                    <div class="form-group">
                        <label>Provider Email</label>
                        <input class="form-control" type="email" value="<?php echo $email ?>" name="email">
                    </div>

                    <div class="form-group">
                        <label>Provider NID Number</label>
                        <input class="form-control" type="text" value="<?php echo $nid_number ?>" name="nid_number">
                    </div>

                    <div class="form-group">
                        <label>Provider About</label>
                        <textarea name="about" id="" value="<?php echo $about ?>" cols="30" rows="3"  class="form-control"></textarea>
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