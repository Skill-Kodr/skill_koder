<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Career us | Rajvishu Infra Constech Pvt.Ltd</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-5) -->
        <?php include "header.php"; ?>
        <!-- Utilize Mobile Menu End -->
        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner text-end">
                            <h1 class="page-title">Career </h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                    <li>Career</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Career ADDRESS AREA START -->
        
        <div class="ltn__Career-message-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ltn__form-box Career-form-box box-shadow white-bg">
                            <h4 class="title-2">Apply Here</h4>
                            <form action="send_mail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ">
                                            <input type="file" name="phone" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select" name="services">
                                                <option>Select Service Type</option>
                                                <option value="Order">Order </option>
                                                <option value="Suggestion">Suggestion </option>
                                                <option value="complaint">Complaint</option>
                                                <option value="request">Request</option>
                                                <option value="message">Message</option>
                                          
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="message" placeholder="Enter message"></textarea>
                                </div>
                                <input type="submit" name="submit" value="Send Message" class="btn btn-success text-uppercase">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/Career-readiness-project-findings-blog.png" alt="">
                    </div>
                </div>
            </div>
        </div>
      
        <!-- FOOTER AREA START -->
        <?php include "footer.php"; ?>
        <!-- FOOTER AREA END -->
    </div>

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/Career.js"></script>
    <script src="js/main.js"></script>

</body>

</html>