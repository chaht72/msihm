<?php
error_reporting(0);
include("../session/check_session.php");
include("../database/database.php");
?>

<?php
$db = new Database();

$query = "SELECT * FROM `services`";
$read = $db->select($query);
 

if(isset($_POST['submit']))
{
    $name         = $_POST['name'];
    $service_id   = $_POST['service_id'];
    $id           = $_POST['id'];
    $division     = $_POST['division'];
    $zilla        = $_POST['district'];
    $upazila      = $_POST['thana'];
    $address      = $_POST['address'];
    $lat          = $_POST['latitude'];
    $lang         = $_POST['longitude'];
    $filename     = $_FILES["uploadfile"]["name"];
    $temp_name    = $_FILES["uploadfile"]["tmp_name"];
    $extension    = strtolower(end(explode('.', $filename)));
    $filename     = strtolower(str_replace(' ', '-', $name)).'_'.time().'.'.$extension;
    $folder       = "../images/".$filename;
    move_uploaded_file($temp_name, $folder);
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $nid_number   = $_POST['nid_number'];
    $about        = $_POST['about'];
    $username     = $_POST['username'];
    $password     = md5($_POST['password']);

    $result = $db->insert("INSERT INTO `registration` (`provider_name`, `service_id`, `provider_id`, `provider_division`, `provider_zilla`, `provider_upazila`, `provider_address`, `provider_lat`, `provider_lang`, `provider_pic`, `provider_email`, `provider_phone`, `provider_nid_number`, `about_provider`, `provider_username`, `provider_password`) VALUES ('$name', '$service_id', '$id', '$division', '$zilla', '$upazila', '$address', '$lat', '$lang', '$folder', '$email', '$phone', '$nid_number', '$about', '$username', '$password');");

    if ($result !== null) {
    	echo "<script>alert('Data Added Successfully');</script>";
        echo "<script>window.open('show_provider.php','_self')</script>";
    }
}
?> 