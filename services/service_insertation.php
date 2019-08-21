<?php
include("../session/check_session.php");
include("../database/database.php");
?>

<?php
$db = new Database();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    $id = 'SER'.$name.date("s");
    $slug = str_replace(' ', '-', $name);
    $description = $_POST['description'];

    $result = $db->insert("INSERT INTO `services` (`service_name`, `service_id`, `service_slug`, `service_description`) VALUES ('$name','$id','$slug','$description')");

    //redirectig to the display page
    header("Location: services.php");
   
}
?> 