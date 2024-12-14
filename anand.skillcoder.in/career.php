<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome To Anand Spine Clinic </title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="assets/animate/animate.css" rel="stylesheet">
  <link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
  <link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png"> 
  <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
  <script>
$(function() {  $("#popModal").modal('show'); });
</script>
</head>
<style>

.apply_box{
    max-width: 600px;
    padding: 20px;
    background-color: white;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 2px 3px 15px 1px black;
}
 .small{
    font-size: 17px;
}
.form_container{
    margin-top: 35px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
    gap: 15px;
}
.form_control{
    display: flex;
    flex-direction: column;

}
label{
    font-size: 18px;
    margin-bottom: 5px;
}
input,select,textarea{
    padding: 8px 10px;
    border: 1px solid grey;
    border-radius: 5px;
    font-size: 13px;
    width: 100%;
}
input:focus{
    outline-color: rgb(210, 21, 147);
}
.button_container{
    display: flex;
    justify-content: end;
    margin-top: 20px;
    padding: 5px;
}
button{
        background-color:rgb(211, 33, 33) ;
        border-radius: 7px;
        border: transparent solid 2px;
        padding: 5px 10px;
        color: whitesmoke;
        padding: 10px;
}
button:hover{
    background-color: rgb(15, 117, 225);
    color: rgb(15, 14, 14);
    cursor: pointer;
}
.textarea_control {
    grid-column: 1 / span 2 ;
    
}
.textarea_control textarea{
    width: 100%;
}
</style>
<body>

  <!-- Pre Loader -->
  <div id="dvLoading"></div>
  <!-- Header Start -->
  <?php include "header.php"; ?>
  <!-- Header End --> 
  <!-- Popup Modal -->

  <!-- Banner Wrapper Start -->
 
  <!-- Banner Wrapper End -->

  <!-- About Us -->
  <div class="about-us">
  
  <div class="about-us">
  <div class="container">
        <div class="apply_box">
            <h1>Career application<span class="small">
          
                </span>
            </h1>
            <form>
                <div class="form_container">
                    <div class="form_control">
                        <label for="first name">First name</label>
                        <input id="first name" placeholder="Enter  name">
                    </div>
                    <div class="form_control">
                        <label for="Last name">Last name</label>
                        <input id="Last name" placeholder="Last name">
                    </div>
                    <div class="form_control">
                        <label for="email  ">Email</label>
                        <input type="email
                        " id="email" placeholder="Enter email">
                    </div>
                    <div class="form_control">
                        <label for="job">Job Role</label>
                        <select id="job">
                            <option value="">Spine specialist</option>
                            <option value="">surgeon</option>
                      
                        </select>
                    </div>
                    <div class="textarea_control">
                        <label for="address  ">Address</label>
                        <textarea id="address" name="address" row="4" cols="50" placeholder="Enter address"></textarea>
                    </div>
                    <div class="form_control">
                        <label for="city">City</label>
                        <input name="city" " id=" city" placeholder="Enter city name">
                    </div>
                    <div class="form_control">
                        <label for="pincode">pincode</label>
                        <input type="number" id=" pincode" placeholder="Enter Pincode Number">
                    </div>
                    <div class="form_control">
                        <label for="date">Date</label>
                        <input value="2023-02-15" type="date" id=" date" placeholder="Enter city name">
                    </div>
                    <div class="form_control">
                        <label for="Upload">Upload Your CV</label>
                        <input type="file" id="upload" name="upload">
                    </div>
                </div>
                <div class="button_container">
                    <button type="submit">Apply now</button>
                </div>
            </form>
        </div>
    </div>
      </div>
 

  <!-- Testimonials Wrapper End -->
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