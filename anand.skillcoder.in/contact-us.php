<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact US | Anand Spine Clinic  </title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="assets/animate/animate.css" rel="stylesheet">
  <link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
  <link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
</head>

<body>
  <!-- Pre Loader -->
  <div id="dvLoading"></div>
  <!-- Header Start -->
  <?php include "header.php"; ?>
  <!-- Header End -->
  <div class="inner-banner">
    <div class="container">
      <div class="col-sm-12">
        <h2>Contact Us</h2>
      </div>
      <div class="col-sm-12 inner-breadcrumb">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Banner Wrapper End -->
  <section class="inner-wrapper contact-wrapper">
    <div class="container">
      <div class="row">
        <div class="inner-wrapper-main">
          <div class="contact-address">
            <div class="col-sm-12 col-md-6 no-space-right">
              <div class="col-sm-12 contact"> <i class="fa fa-map-marker"></i>
                <b><span>Address</span><br>
                Danapur Khagaul Road Opp.- Radiant School Patna-801105 </b>
              </div>
           
              <div class="col-sm-6 contact white"> <i class="fa fa-phone"></i>
                <b><span>Phone Number</span><br>
                  <a href="tel:+91 8318876486">+918318876486</a> </br> <a href="tel:+918827771623">+918827771623</a> </b>
              </div>
              <div class="col-sm-6 contact white"> <i class="fa fa-envelope"></i>
                <b><span>Email</span><br>
                  <a href="mailto:endospinemiss@gmail.com">endospinemiss@gmail.com</a></b>
               
              </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-5 no-space-left">
              <div class="form">
                <form action="send_mail.php" method="post">
                  <label>First Name</label>
                  <input type="text" required placeholder="First Name" value="" name="name" class="txt form-control">
                  <label>Treatment</label>
                  <select class="txt form-control" name="department">
                <option value="academic courses">Select Treatment</option>
                <option value="Scoliosis Surgery">Scoliosis Surgery</option>
                <option value="MINIMALLY INVASIVE SPINE SURGERY">MINIMALLY INVASIVE SPINE SURGERY</option>
                <option value="ENDOSCOPIC SPINE SURGERY">ENDOSCOPIC SPINE SURGERY</option>
                <option value="SPINAL FUSION SURGERY">SPINAL FUSION SURGERY</option>
                <option value="SPONDYLOLISTHESIS">SPONDYLOLISTHESIS</option>
                <option value="CERVICAL SPINE SURGERY & DISC REPLACEMENT">CERVICAL SPINE SURGERY & DISC REPLACEMENT</option>
                <option value="Spinal Tuberculosis Surgery">Spinal Tuberculosis Surgery</option>
            </select>
                  <label>Mobile No</label>
                  <input type="text" required placeholder="Mobile No" value="" name="phone" class="txt form-control">
                  <label>Email Address</label>
                  <input type="text" required placeholder="Email" value="" name="email" class="txt form-control">
                  <label>Message</label>
                  <textarea placeholder="Message" name="message" type="text" class="txt_3 form-control"></textarea>
                  <input type="submit" value="Submit" name="submit" type="button" class=" btn btn-warning form-control">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6239526206286!2d85.04914297609169!3d25.617409214551127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed565b26f01f2b%3A0xf31598589370b781!2sRanjan%20Yadav%20Path%2C%20Shri%20Krishna%20Puram%2C%20Patna%2C%20Danapur%2C%20Bihar%20801503!5e0!3m2!1sen!2sin!4v1712140336602!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <!-- Call to Action start -->
  <div class="call-to-action">
    <div class="container">
      <h3>Looking for ORTHOPAEDIC CENTER</h3>
      <a href="contact-us.php">Contact </a>
    </div>
  </div>
  <!-- Call to Action End -->
  <!-- Footer Links Start-->
  <?php include "footer.php"; ?>
  <!-- Footer Links End -->
  <script src="assets/jquery/jquery-3.1.1.min.js"></script>
  <script src="assets/jquery/jquery.animateNumber.min.js"></script>
  <script src="assets/easing/jquery.easing.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/wow/wow.min.js"></script>
  <script src="assets/owl-carousel/js/owl.carousel.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>