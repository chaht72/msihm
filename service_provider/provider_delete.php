<?php
//including the database connection file
// include("../session/check_session.php");
include("../database/database.php");
 
$db = new database();
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = $db->delete("DELETE FROM `registration` WHERE `id` = '$id'");
 
if ($result) {
    //redirecting to the display page 
    header("Location:show_provider.php");
}
?> 