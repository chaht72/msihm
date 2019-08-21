<?php 
include("database/database.php");
  $db = new Database();
  $query = "SELECT * FROM `services`";
  $read = $db->select($query);
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Handyman</title>
    <script src="vendor/jquery/jquery-3.4.0.min.js"></script>
  </head>
  <body>
    <!-- Start header section  -->
     <header class="bg-dark sticky-top" style="padding: 4px;">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-light d-inline-flex">
              <form class="form-inline" action="search/index.php" method="GET">
                <label class="text-capitalize mr-2">Find handyman</label>
                 <div class="input-group">
                    <select class="form-control" required name="service_id" style="width: 450px; margin-left: 30px;">
                      <option>Select Service</option>
                      <?php while ($row = $read->fetch_assoc()) { ?>
                        <option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?></option>
                      <?php } ?>    
                    </select>
                  
                    <!-- <input type="text" class="form-control" placeholder="" style="width: 400px;"> -->
                    <div class="input-group-append">
                      <input type="submit" class="input-group-text" name="submit" value="Search">
                    </div>
                  </div>
              </form>
            </div>
            <div class="link-item col-md-4 bg-dark text-light float-right pt-2">
                <button class="btn1 btn-danger" style=" margin-left: 120px;"><a href="service_request/request_service.php" style="text-decoration: none;" class="text-light">Request Services </a></button>
            </div>
        </div>
        </div>
    </header>
    <!-- End header section  -->



    <!-- Start Nav Section -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0px;">
      <div class="container">
        <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="handyman logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">RESINDETIAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COMMERCIAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">WHY HIRE US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LOCATIONS</a>
            </li> -->
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </li> -->
          <!-- </ul>
          <div class="form-inline my-2 my-lg-0">
            <div><a class="btn btn-danger" href="service_request/request_service.php">REQUEST SERVICE</a></div>
          </div>
        </div>
      </div>
    </nav> -->
    <!-- End Nav Section -->