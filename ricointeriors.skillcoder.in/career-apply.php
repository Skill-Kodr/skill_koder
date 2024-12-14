<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Career Apply</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="plugins/normalize.css" rel="stylesheet" type="text/css">
    <link href="plugins/uikit/css/uikit.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!-- BEGIN HEADER -->
    <?php include "header.php"; ?>
    <!--END BEGIN HEADER -->
    
    <section class="inner-banner sec-padding">
        <div class="uk-container uk-container-center">
            <div class="box uk-clearfix">
                <h2>Apply Career</h2>
                <!-- <ul class="uk-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Apply Now</span></li>
                </ul> -->
            </div>
        </div>
    </section> 
    <section class="book-design sec-padding">
        <div class="uk-container uk-container-center">
            <div class="kc-box">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                        <div class="box-title">
                            <h3>Personal Details</h3> 
                        </div>
                        <div class="box-content">
                            <form id="biliing_form" class="uk-form kc-form-detail" action="#" method="post">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                                        <input class="input-text" type="text" placeholder="First Name">
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                                        <input class="input-text" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="uk-width-medium-1-1 uk-width-small-1-1 uk-width-1-1">
                                        <input class="input-text" type="email" placeholder="Email">
                                    </div>

                                    <div class="uk-width-medium-1-1 uk-width-small-1-1 uk-width-1-1">
                                        <label>
                                            <select class="input-text" name="education">
                                                <option selected="selected" >Higher Qualification</option>
                                                <option value="10th Pass">10th Pass</option>
                                                <option value="12th Pass">12th Pass</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Graduation">Graduation</option>
                                            </select>
                                        </label>
                                    </div> 
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                                        <input class="input-text" type="text" placeholder="Phone">
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                                        <input class="input-file" type="file" type="text" placeholder="Zip">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2 uk-width-small-1-1 uk-width-1-1">
                        <div class="box-title">
                            <h3>Short Introduction</h3> 
                        </div>
                        <div class="box-content">
                            <form id="message_form" class="uk-form kc-form-detail" action="#" method="post">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 uk-width-small-1-1 uk-width-1-1">
                                        <textarea class="input-text" rows="5" placeholder="Your message"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="text-code uk-text-right">
                            <button class="kc-button kc-button-primary">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- BEGIN FOOTER -->
    <?php include "footer.php"; ?>
    <div id="kc_backtop" class="kc-bt-show" data-uk-smooth-scroll=""><i class="uk-icon-arrow-up"></i></div>

    <script src="plugins/jquery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="plugins/uikit/js/uikit.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>