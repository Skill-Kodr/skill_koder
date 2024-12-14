<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kitchen Design - HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="plugins/normalize.css" rel="stylesheet" type="text/css">
    <link href="plugins/uikit/css/uikit.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/uikit/css/components/slideshow.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/uikit/css/components/slider.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/lightGallery/dist/css/lightgallery.min.css">
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
                <h2>gallery masonry</h2>
                <!-- <ul class="uk-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Gallery</span></li>
                </ul> -->
            </div>
        </div>
    </section>
    <section class="designs sec-padding sec-background gallery gallery-masonry">
        <div class="uk-container uk-container-center">
            <div class="sec-title">
                <h3>Our Best Design</h3>
                <div class="border-img"></div>
            </div>
            <div>
                <div class="uk-flex uk-flex-center filter-design-sc">
                    <ul id="filter" class="filter">
                        <li class="check-class" data-uk-filter="garacer"><a href="gallery-kitchen-appliances.php">Kitchen Appliances</a></li>
                        <li class="check-class" data-uk-filter="pool"><a href="#">Godrej Kitchen</a></li>
                        <li class="check-class" data-uk-filter="villa"><a href="#">Mattress</a></li>
                        <li class="check-class" data-uk-filter="garacer"><a href="#">Wallpapers</a></li>
                        <li class="check-class" data-uk-filter="pool"><a href="gallery-fabricks.php">Fabricks</a></li>
                        <li class="check-class" data-uk-filter="villa"><a href="#">Furnishing</a></li>
                        <li class="check-class" data-uk-filter="villa"><a href="#">Steel Style</a></li>
                        <li class="check-class" data-uk-filter="villa"><a href="#">Flooring</a></li>
                        <li class="check-class"><a href="gallery-Interior-Designing.php">Interior Designing</a></li>

                    </ul>
                </div>
                <div class="wrap-gallery">
                    <ul id="gallery_member" class="uk-grid grid">
                        <li data-src="images/gallery/kitchen-appliances/appliance_1.jpeg" class="grid-item uk-width-medium-1-4 uk-width-small-1-2 uk-width-1-1 design-item">
                            <div class="uk-overlay uk-overlay-hover uk-animation-hover">
                                <img src="images/gallery/kitchen-appliances/appliance_1.jpeg" alt="">
                                <div class="uk-overlay-panel uk-overlay-background  uk-flex uk-flex-middle uk-flex-center uk-animation-scale-up">
                                    <div class="box">
                                        <div class="box-icon">
                                            <a href="#"><span class="icon uk-icon-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN FOOTER -->
    <?php include "footer.php"; ?>
    <div id="kc_backtop" class="kc-bt-show" data-uk-smooth-scroll=""><i class="uk-icon-arrow-up"></i></div>
    <!--END BEGIN FOOTER -->

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="plugins/jquery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="plugins/uikit/js/uikit.min.js" type="text/javascript"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/lightGallery/dist/js/jquery.mousewheel.min.js"></script>
    <script src="plugins/uikit/js/components/slider.min.js" type="text/javascript"></script>
    <script src="plugins/uikit/js/components/slideshow.min.js" type="text/javascript"></script>
    <script src="plugins/uikit/js/components/grid.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>