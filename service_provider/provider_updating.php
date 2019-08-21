<?php
// including the database connection file
include("../session/check_session.php");
include("../database/database.php");
 
$db = new Database();
 
if(isset($_POST['update']))
{    
    $id    = $_POST['id'];
    
    $name  = $_POST['name'];
    $service  = $_POST['service_id'];
    $provider_id = $_POST['id'];
    $division = $_POST['division'];
    $zilla = $_POST['zilla'];
    $upazila = $_POST['upazila'];
    $address = $_POST['address'];
    $lat = $_POST['latitude'];
    $lang = $_POST['longitude'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nid_number = $_POST['nid_number'];
    $about = $_POST['about'];

    if (isset($_FILES['uploadfile'])) {

		$query = "SELECT provider_pic FROM `registration` WHERE `id` = '$id'";
		$result = $db->select($query);
		$old_image = $result->fetch_assoc()['provider_pic'];
		$image_full_path = $old_image;

		if ($_FILES['uploadfile']['error'] == 0) {
			
			if (file_exists($old_image)) {
				unlink($old_image);
			}

			$temp_filename = $_FILES['uploadfile']['name'];
			$temp_file = $_FILES['uploadfile']['tmp_name'];
			$extension = strtolower(end(explode('.', $temp_filename)));
			$filename = strtolower(str_replace(' ', '-', $name)).'_'.time().'.'.$extension;
			$directory = '../images/';
			$image_full_path = $directory.$filename;
			move_uploaded_file($temp_file, $image_full_path);
		}
    
    //updating the table
    $result = $db->execute("UPDATE `registration` SET `provider_name` = '$name', `service_id` = '$service', `provider_id` = '$provider_id', `provider_division` = '$division', `provider_zilla` = '$zilla', `provider_upazila` = '$upazila', `provider_address` = '$address', `provider_lat` = '$lat', `provider_lang` = '$lang', `provider_pic` = '$image_full_path', `provider_phone` = '$phone', `provider_email` = '$email', `provider_nid_number` = '$nid_number', `about_provider` = '$about' WHERE `id` = $id");
    
    //redirectig to the display page.
    header("Location: show_provider.php");
    }
}

?> 