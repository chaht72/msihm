<?php 
include("header_footer/header.php");
?>

<body>      
  <!-- Start banner section -->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="text">
            <div class="inner-text">
              <h1>WHAT CAN OUR <br>HOME IMPROVEMENT <br> PROFESSIONALS DO <br> FOR YOU?</h1>
              <button class="btn btn-danger py-3 px-5 font-weight-bold"><a href="our_services/service_list.php" style="color: white; text-decoration: none;">OUR SERVICES</a></button><br>
              <label class="mt-5">FIND THE MR. HANDYMAN NEAR YOU</label>
              <div class="input-group input-group-lg" style="width: 400px;">
               <form action="service_request/show_service.php" method="GET">
                  <select name="division" id="division" required class="form-control" style="width: 350px;">
                    <option value="">Select your division</option>
                  </select>
                  <select name="district" required class="form-control" id="district" style="width: 350px;">
                    <option value="">Select your district</option>
                  </select>
                  <select name="thana" required class="form-control" id="thana" style="width: 350px;">
                    <option value="">Select your thana</option>
                  </select>
                  <select name="service" required class="form-control" id="service" style="width: 350px;">
                    <option value="">Select your service</option>

                    <!-- get data from services table -->
                    <?php
                     $sql = "SELECT * FROM  `services`";
                     $total = $db->select($sql);
                     while ($row=$total->fetch_assoc()) { ?>
                      <option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?></option>
                   <?php } ?>
                  </select>
                  <input type="submit" name="submit" value="Show Service" class="btn btn-danger" style="margin-left: 100px; margin-top: 5px;">
               </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner section -->

<!-- Start home service -->
<section class="home-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Meet Your Home Service Experts</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p class="lead mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem fuga quibusdam quia vel molestias deserunt ex elit. Ut tenetur eveniet earum odio rem fuga quibusdam quia vel molestias deserunt explicabo, ratione harum deleniti, possimus cumque! Blanditiis, distinctio numquam aliquid.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem fuga quibusdam quia vel molestias deserunt explicabo, ratione harum deleniti, possimus cumque! Blanditiis, distinctio numquam aliquid.</p>
      </div>
      <div class="col-md-6">
        <ul id="nav" class="mt-5 ml-5">
          <li class="shadow"><a href="#"><i class="text-danger mr-2 fas fa-map-marker-alt"></i> Find a location</a></li>
          <li class="shadow"><a href="#"><i class="text-danger mr-2 fab fa-servicestack"></i> request service</a></li>
          <li class="shadow"><a href="#"><i class="text-danger mr-2 fab fa-blogger-b"></i> visit our blog</a></li>
          <li class="shadow"><a href="#"><i class="text-danger mr-2 fa fa-home"></i> apply locality</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End home service -->


<!-- Start why choose area -->
<section class="why-choose-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Why Choose Mr. Handyman for Your Home Repair Needs?</h2>
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 col-md-6 col-sm-12 why-choose">
          <div class="item1">
            <img class="img-fluid shadow" src="resources/img/single.jpg" alt="">
            <div class="single-item">
              <h5 class="text-center mt-3"><i class="far fa-check-square text-danger"></i> TRUSTWORTHY</h5>
              <P class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumendait. Enim, assumenda, cupiditat.</P>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 why-choose">
          <div class="item1">
            <img class="img-fluid shadow" src="resources/img/single.jpg" alt="">
            <div class="single-item">
              <h5 class="text-center mt-3"><i class="far fa-check-square text-danger"></i> TRUSTWORTHY</h5>
              <P class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumendait. Enim, assumenda, cupiditat.</P>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 why-choose">
          <div class="item1">
            <img class="img-fluid shadow" src="resources/img/single.jpg" alt="">
            <div class="single-item">
              <h5 class="text-center mt-3"><i class="far fa-check-square text-danger"></i> TRUSTWORTHY</h5>
              <P class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumendait. Enim, assumenda, cupiditat.</P>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 why-choose">
          <div class="item1">
            <img class="img-fluid shadow" src="resources/img/single.jpg" alt="">
            <div class="single-item">
              <h5 class="text-center mt-3"><i class="far fa-check-square text-danger"></i> TRUSTWORTHY</h5>
              <P class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, assumendait. Enim, assumenda, cupiditat.</P>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center">
        <button type="button" class="btn btn-danger btn-lg">LEARN MORE ABOUT US</button>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-12 text-center">
        <button type="button" class="btn btn-danger btn-lg">LEARN MORE ABOUT US</button>
      </div> -->
    </div>
  </div>
</section>
<!-- End why choose area -->

  <!-- Optional JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
