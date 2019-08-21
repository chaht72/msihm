<?php
include("../header/header.php");

$id = $_GET['id'];
$query = "SELECT * FROM `registration`,`services` WHERE `registration`.`service_id` = '$id' AND `services`.`service_id` = '$id'";
$data = $db->select($query);
if($data){
 while ($total = $data->fetch_assoc()) { ?>
 	 	<br>
		<div class="container">
	      <div class="row">
	        <div class="card" style="width: 500px;">
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
		<?php echo "</br>"; 
		} 
	}else{
		echo "no data found";
	}
?>