<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Rajvishu Infra Constech Pvt.Ltd</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
    

    @keyframes fade{
  from{
    opacity:0.4;
  }
  to{
    opacity:1;
  }
}

body{
  background:#eeeee;
}

#slider{
  margin:0 auto;
  width:100%;
  overflow:hidden;
  height:100%;
}

.slides{
  overflow:hidden;
  animation-name:fade;
  animation-duration:1s;
  display:none;
}

.slides img{
    width:100%;
    height:100%
    background-position:center;
    background-size:cover;
}
/* img{
  width:100%;
} */

#dot{
  margin:0 auto;
  text-align:center;
}
.dot{
  display:inline-block;
  border-radius:50%;
  background:#d3d3d3;
  padding:8px;
  margin:10px 5px;
}

.active{
  background:black;
}

@media (max-width:567px){
  #slider{
    width:100%;
    height:100%;

  }
  .slides img{
    width:100%;
    height:1050px;
    overflow:hidden;
    background-position:center;
    background-size:cover;
}
}




/* ?????????????????????? */
/* === True Code === */

.slider {
	height: 27rem;
	margin: 0 auto;
	position: relative;
	overflow: hidden;
	.slide {
		position: absolute;
		top: 0;
		height: 27rem;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: transform 0.5s;
    @media (min-width: 600px) and (max-width: 767px) {
      width: 300px;
    }
    @media (min-width: 768px) {
      width: 370px;
    }
		& > img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.testimonial {
			width: 90%;
			min-height: 300px;
			padding: 30px 40px;
			position: relative;
			background-color: #F8F8F8;
			border-radius: 6px;
			display: flex;
      flex-direction: column;
			justify-content: center;
      gap: 15px;
      &:hover img{
        filter: none;
        transition: filter ease 0.3s
      }
			&::before {
				content: '';
				position: absolute;
				background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='30' viewBox='0 0 40 30'%3E%3Cpath id='Caminho_1' data-name='Caminho 1' d='M9.091,11.964a8.878,8.878,0,0,0-1.3.13A7.2,7.2,0,0,1,8.3,10.731,8.453,8.453,0,0,1,9.237,9.04a9.974,9.974,0,0,1,1.2-1.477,13.579,13.579,0,0,1,1.38-1.21,8.469,8.469,0,0,1,1.424-.928,7.557,7.557,0,0,1,1.3-.7l1.075-.445.945-.395L15.588,0,14.4.289c-.381.1-.845.208-1.374.343a10.78,10.78,0,0,0-1.759.625,12.351,12.351,0,0,0-2.05.934A18.711,18.711,0,0,0,7.04,3.577,15.531,15.531,0,0,0,4.946,5.471,14.039,14.039,0,0,0,3.133,7.8a16.3,16.3,0,0,0-1.4,2.6A22.276,22.276,0,0,0,.8,13.08a24.3,24.3,0,0,0-.766,4.884,25.087,25.087,0,0,0,.056,3.5c.03.409.086.806.126,1.08l.05.337.052-.012a9,9,0,0,0,6.689,6.883,8.948,8.948,0,0,0,9.063-3.1,9.041,9.041,0,0,0-2.191-13.3A8.94,8.94,0,0,0,9.091,11.964Zm21.935,0a8.878,8.878,0,0,0-1.3.13,7.2,7.2,0,0,1,.507-1.363,8.453,8.453,0,0,1,.935-1.691,9.974,9.974,0,0,1,1.2-1.477,13.579,13.579,0,0,1,1.38-1.21,8.469,8.469,0,0,1,1.424-.928,7.557,7.557,0,0,1,1.3-.7l1.075-.445.945-.395L37.523,0l-1.19.289c-.381.1-.845.208-1.374.343a10.781,10.781,0,0,0-1.759.625,12.445,12.445,0,0,0-2.05.936,18.711,18.711,0,0,0-2.176,1.387A15.647,15.647,0,0,0,26.88,5.471,14.034,14.034,0,0,0,25.068,7.8a16.306,16.306,0,0,0-1.4,2.6,22.286,22.286,0,0,0-.933,2.677,24.3,24.3,0,0,0-.766,4.884,25.092,25.092,0,0,0,.056,3.5c.03.409.086.806.126,1.08l.05.337.052-.012a9,9,0,0,0,6.689,6.883A8.948,8.948,0,0,0,38,26.652a9.041,9.041,0,0,0-2.191-13.3A8.94,8.94,0,0,0,31.026,11.964Z' transform='translate(0)' fill='%2305bcb4'/%3E%3C/svg%3E%0A");
        background-repeat: no-repeat;
				/* width: 40px; */
				height: 30px;
				top: -15px;
				left: 12px;
				line-height: 1;
				font-size: 10rem;
				font-family: inherit;
				color: var(--color-primary);
				z-index: 1;
			}
      img {
        width: 14rem;
        margin: 0 auto;
        filter: grayscale(1);
        transition: filter ease 0.3s;
      }
			.testimonial__text {
				font-size: 1.4rem;
				margin-bottom: 2.5rem;
				color: #666;
			}
		}
	}
}
svg{
    vertical-align:top;
    margin-top:6px;
}
.btns {
	width: 100%;
	display: flex;
	justify-content: center;
	gap: 25px;
	position: absolute;
	bottom: 0;
	.slider__btn {
		z-index: 10;
		border: 2px solid #05BCB4;
		background: #fff;
		font-family: inherit;
		color: #05BCB4;
		border-radius: 50%;
		height: 50px;
		width: 50px;
		font-size: 3rem;
		cursor: pointer;
	}
}
</style>
<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <?php include "header.php"; ?>
        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-3) -->
        <!-- <div class="ltn__slider-area ltn__slider-3  section-bg-2">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/banner/11.jpg">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Dreams where come true</h6>
                                            <h1 class="slide-title animated ">WE BUILD NOT JUST HOME WE BUILD YOUR DREAM’S</h1>
                                            <div class="slide-brief animated">
                                                <p>We deliver high-quality, cost-effective projects on schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/banner/22.jpg">
                    <div class="ltn__slide-item-inner text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-left">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Dreams where come true</h6>
                                            <h1 class="slide-title animated ">THE MOST COST EFFECTIVE BUILDER IN INDIA</h1>
                                            <div class="slide-brief animated">
                                                <p>We deliver high-quality, cost-effective projects on schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/slider.jpg">
                    <div class="ltn__slide-item-inner text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-left">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Dreams where come true</h6>
                                            <h1 class="slide-title animated ">THE MOST COST EFFECTIVE BUILDER IN INDIA</h1>
                                            <div class="slide-brief animated">
                                                <p>We deliver high-quality, cost-effective projects on schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/w1.jpg">
                    <div class="ltn__slide-item-inner text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-left">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Dreams where come true</h6>
                                            <h1 class="slide-title animated ">THE MOST COST EFFECTIVE BUILDER IN INDIA</h1>
                                            <div class="slide-brief animated">
                                                <p>We deliver high-quality, cost-effective projects on schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/w2.jpg">
                    <div class="ltn__slide-item-inner text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-left">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Dreams where come true</h6>
                                            <h1 class="slide-title animated ">THE MOST COST EFFECTIVE BUILDER IN INDIA</h1>
                                            <div class="slide-brief animated">
                                                <p>We deliver high-quality, cost-effective projects on schedule</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        

<div id="slider">  
<div class="slides">  
  <img src="img/banner/11.jpg"  />
 </div>
  
  <div class="slides">  
  <img src="img/banner/22.jpg"  />
</div>
  
  <div class="slides">  
  <img src="img/slider/slider.jpg"  />
</div> 
  
   <div class="slides">  
  <img src="img/banner/highway.jpg" width="100%" />
</div> 
  
<div class="slides">  
  <img src="img/banner/flyover.png" width="100%" />
</div>  
  
  <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
 </div>

        <!-- SLIDER AREA END -->
        <div class="ltn__feature-area ">
            <div class="container">
            
                <div class="row ltn__custom-gutter">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6" style="">
                            <div class="ltn__feature-icon"style="color:#5633cf">
                                <span><i class="fa fa-trophy"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <!-- <h4><a href="service-details.php" style="color:#5633cf">Smart living</a></h4> -->
                                <p style="color:#5633cf;text-align:center">WE'VE REPUTATION FOR EXCELLENCE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 active"style="">
                            <div class="ltn__feature-icon"style="color:#5633cf">
                                <span><i class="fa fa-sliders"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <!-- <h4><a href="service-details.php" style="color:#5633cf">ECO Construction</a></h4> -->
                                <p style="color:#5633cf;text-align:center">WE BUILD PARTNERSHIP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6" style="">
                            <div class="ltn__feature-icon"style="color:#5633cf">
                                <span><i class="fa fa-thumbs-up"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <!-- <h4><a href="service-details.php" style="color:#5633cf">Atractive Location</a></h4> -->
                                <p style="color:#5633cf;text-align:center">GUIDED BY COMMITMENT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6" style="">
                            <div class="ltn__feature-icon"style="color:#5633cf">
                                <span><i class="fa fa-users"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <!-- <h4><a href="service-details.php" style="color:#5633cf">Modern Technology</a></h4> -->
                                <p style="color:#5633cf;text-align:center">A TEAM OF PROFESSIONALS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-120 pb-90 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="img/others/7.png" alt="About Us Image">
                            <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                                <h1 class="section-title">Welcome To Rajvishu Infra Constech Private Limited (RICPL)<span>.</span></h1>
                                <p class="text-justify">Rajvishu Infra Constech Pvt Ltd is a leading construction company based in India.
Established in 2022. we have built a strong reputation for delivering high-quality projects on time and within budget.
Our expertise spans a wide range of construction services, from residential and commercial buildings to infrastructure development.
                                </p>
                            </div>
                            <ul class="ltn__list-item-half clearfix">
                                <li>
                                    <i class="flaticon-home-2"></i>
                                    Smart Home Design
                                </li>
                                <li>
                                    <i class="flaticon-mountain"></i>
                                    Beautiful Scene Around
                                </li>
                            </ul>
                            <div class="btn-wrapper animated">
                                <a href="about.php" class="theme-btn-1 btn btn-effect-1 fw-bold">Read more..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area section-bg-1 pt-70 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <img src="img/icons/rupee.png" class="img-fluid" width="100">
                            <h3>Budget Friendly </h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <img src="img/icons/transparency.png" class="img-fluid" width="100">
                            <h3>Complete Transparency </h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <img src="img/icons/team.png" class="img-fluid" width="100">
                            <h3>Experienced Team </h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <img src="img/icons/design.png" class="img-fluid" width="100">
                            <h3>Complimentary Design </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->

        <!-- PRODUCT SLIDER AREA START -->
        <div class="ltn__product-slider-area ltn__product-gutter pt-70 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h1 class="section-title">OUR SERVICES</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__product-slider-item-three-active--- slick-arrow-1">
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/1.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Construction</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/2.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Engineering & Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/3.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Renovation</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/4.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Interior Work</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/5.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Real Estate Development</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/6.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Construction Material</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/7.png" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Govt. Civil Contract</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/8.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Project Management </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/fabri.jfif" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Fabrication </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/labour.jfif" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Labour Supply </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                            <div class="product-img">
                                <a href="contact.php"><img src="img/service/manpo.jpg" alt="#"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="contact.php">Manpower Supply </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT SLIDER AREA END -->
        <div class="ltn__about-us-area  ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="img/whtwedo.jpg" alt="About Us Image">
                            <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                              
                                <h1 class="section-title">What We Do<span>.</span></h1>
                                <ul>
                                    <li style="margin:0px">Specializing in residential and commercial construction projects.</li>
                                    <li style="margin:0px">Offering a wide range of infrastructure development services.</li>
                                    <li style="margin:0px">Delivering high-quality projects on time and within budget.</li>
                                </ul>
                         
                            </div>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area section-bg-1 pt-70 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <div class="counter-icon">
                                <i class="flaticon-office"></i>
                            </div>
                            <h1><span class="counter">400</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Area Built</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <div class="counter-icon">
                                <i class="flaticon-excavator"></i>
                            </div>
                            <h1><span class="counter">80</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Under Constructions(sq)</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-color-white---">
                            <div class="counter-icon">
                                <i class="flaticon-user"></i>
                            </div>
                            <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Registered Customer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->


        <!-- BRAND LOGO AREA START -->
        <!-- <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pb-50 plr--9 d-none---">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-left">
                           
                            <h1 class="section-title">Our Clients</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__brand-logo-active">
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/bihar_police.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/bsrdc.png" alt="Brand Logo">
                        </div>
                    </div>
              
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/ahluwalia.jfif" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/edu.jfif" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/hg.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/nagarnigam.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/bmsicl.jpg" alt="Brand Logo">
                        </div>
                    </div>
                  
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/makeinindia.jpg" alt="Brand Logo">
                        </div>
                    </div>
                  
                </div>
            </div>
        </div> -->
        <!-- BRAND LOGO AREA END -->
        <section class="testimonials">
  <div class="slider">
    <div class="slide">
      <div class="testimonial">
        <img loading="lazy" src="img/brand-logo/bihar_police.png" />
    
      </div>
    </div>

    <div class="slide">
      <div class="testimonial">
        <img loading="lazy" src="img/brand-logo/bsrdc.png" />
   
      </div>
    </div>

    <div class="slide">
      <div class="testimonial">
        <img loading="lazy" src="img/brand-logo/ahluwalia.jfif" />
  
      </div>
    </div>

    <div class="slide">
      <div class="testimonial">
        <img loading="lazy" src="img/brand-logo/edu.jfif" />
     
      </div>
    </div>

    <div class="slide">
      <div class="testimonial">
      <img src="img/brand-logo/hg.png" alt="Brand Logo">
      </div>
    </div>

    <div class="slide">
      <div class="testimonial">
      <img src="img/brand-logo/nagarnigam.png" alt="Brand Logo">
      </div>
    </div>
    <div class="slide">
      <div class="testimonial">
      <img src="img/brand-logo/bmsicl.jpg" alt="Brand Logo">
      
      </div>
    </div>
    <div class="slide">
      <div class="testimonial">
    
      <img src="img/brand-logo/makeinindia.jpg" alt="Brand Logo">
      </div>
    </div>

  <div class="btns">
    <button class="slider__btn slider__btn--left">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill='#05BCB4'><path d="M16.4 18.2c0-.4-.1-.7-.4-.9L11.4 13c-.5-.5-.5-1.4 0-1.9L16 6.8c.3-.2.4-.6.4-.9 0-1.1-1.3-1.7-2.1-.9l-6.8 6.2c-.6.5-.6 1.4 0 1.9l6.8 6.2c.8.5 2.1-.1 2.1-1.1z"></path></g></svg>

</button>
    <button class="slider__btn slider__btn--right">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill='#05BCB4'><path d="M7.6 5.8c0 .4.1.7.4.9l4.6 4.3c.5.5.5 1.4 0 1.9L8 17.2c-.3.2-.4.6-.4.9 0 1.1 1.3 1.7 2.1.9l6.8-6.2c.6-.5.6-1.4 0-1.9l-6.8-6c-.8-.7-2.1-.1-2.1.9z"></path></g></svg>
</button>
  </div>
    
  </div>
</section>

        <!-- FEATURE AREA START ( Feature - 6) -->
        <div class="ltn__feature-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">features</h6>
                            <h1 class="section-title">Core Features</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__custom-gutter">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-apartment"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.php">Smart living</a></h4>
                                <p>Smart Living is a solution that makes the most of the city's infrastructure and in effect, improves people's quality of life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 active">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-park"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.php">ECO Construction</a></h4>
                                <p>ECO construction is building a structure that is beneficial or non-harmful to the environment, and resource efficient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-maps-and-location"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.php">Atractive Location</a></h4>
                                <p>We are selling an apartment under construction situated on a beautiful peaceful location.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-excavator"></i></span>
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.php">Modern Technology</a></h4>
                                <p>The impact of modern construction technology on the workforce in the construction industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

        <!-- CALL TO ACTION START (call-to-action-4) -->
        <div class="ltn__call-to-action-area ltn__call-to-action-4 section-bg-1 bg-image pt-115 pb-50 " data-bs-bg="img/bg/6.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-inner call-to-action-inner-4 text-center">
                            <!-- <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color" style="text-align:justify">To promote a work culture that fosters individual <br>growth, team spirit and creativity to overcome challenges and attain goals,<br> encourage ideas, talent and value systems.”</h6>
                               
                            </div> -->
                            <div class="btn-wrapper">
                                <a href="tel:+918541904444" class="btn-success btn btn-effect-1 fw-bold">Make a Call</a>
                                <a href="contact.php" class="btn  theme-btn-1 btn-effect-4 white-color fw-bold">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__call-to-4-img-1">
                <img src="img/slider/21.png" alt="#">
            </div>
            <div class="ltn__call-to-4-img-2">
                <img src="img/bg/12.png" alt="#">
            </div>
        </div>
        <!-- CALL TO ACTION END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="car-dealer-form-inner">
                            <form action="enquiry_mail.php" method="POST" class="ltn__car-dealer-form-box row">
                                <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-2 col-md-6">
                                    <input type="text" placeholder="Mobile No" name="contact">
                                </div>
                                <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                    <input type="text" placeholder="Email" name="plot">
                                </div>
                                <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-2 col-md-6">
                                    <input type="text" placeholder="Message" name="area">
                                </div>
                              
                                <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-2 ">
                                    <div class="btn-wrapper text-center mt-0">
                                        <input type="submit" name="submit" class="btn btn-success fw-bold"> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER AREA START -->
        <?php include "footer.php"; ?>
        <!-- FOOTER AREA END -->

    </div>

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<script>
    // Slider
const slider = function () {
  const slides = document.querySelectorAll('.slide');
  const btnLeft = document.querySelector('.slider__btn--left');
  const btnRight = document.querySelector('.slider__btn--right');

  let curSlide = 0;
  const maxSlide = slides.length;

  const goToSlide = function (slide) {
    slides.forEach(
      (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
    );
  };

  // Next slide
  const nextSlide = function () {
    if (curSlide === maxSlide - 1) {
      curSlide = 0;
    } else {
      curSlide++;
    }

    goToSlide(curSlide);
  };

  const prevSlide = function () {
    if (curSlide === 0) {
      curSlide = maxSlide - 1;
    } else {
      curSlide--;
    }
    goToSlide(curSlide);
  };

  const init = function () {
    goToSlide(0);
  };
  init();

  // Event handlers
  btnRight.addEventListener('click', nextSlide);
  btnLeft.addEventListener('click', prevSlide);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft') prevSlide();
    e.key === 'ArrowRight' && nextSlide();
  });
};
slider();

var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}

changeSlide();
</script>