<?php
include("../session/check_session.php");
// including the database connection file
include("../database/database.php");
 
$db = new Database();
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name        = $_POST['name'];
    $description = $_POST['description'];
    
    //updating the table
    $result = $db->execute("UPDATE `services` SET `service_name` = '$name', `service_description` = '$description' WHERE `id` = '$id'");
    
    //redirectig to the display page
    header("Location: services.php");
    }

?> 