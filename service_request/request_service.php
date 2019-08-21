<?php
include("../header/header.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<!-- Start banner section -->
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="text">
						<div class="inner-text">
							<label class="mt-5 margin-left">FIND THE HANDYMAN NEAR YOU</label>
							<div class="" style="width: 400px;">
								<form action="show_service.php" method="get">
									<select name="division" id="division" required class="form-control" style="margin-left: 320px;">
									<option value="">select your Division</option>
									</select>

									<select name="district" required id="district" class="form-control" style="margin-left: 320px;">
									<option value="">select your District</option>
									</select>

									<select name="thana" required id="thana" class="form-control" style="margin-left: 320px;">
									<option value="">select your Thana</option>
									</select>

									<select name="service" required class="form-control" id="service" style="margin-left: 320px;">
					                    <option value="">Select your service</option>
					                    <!-- get data from services table -->
					                    <?php
					                     $sql = "SELECT * FROM  `services`";
					                     $total = $db->select($sql);
					                     while ($row=$total->fetch_assoc()) { ?>
					                      <option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?></option>
					                   <?php } ?>
				                  </select>

									<input type="submit" name="submit" value="Show Service" class="btn btn-danger" style="margin-left: 450px; margin-top: 5px;">
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- End banner section -->
  
  <!-- add own jquery -->
  <script src="../js/main.js"></script>
</body>
</html>