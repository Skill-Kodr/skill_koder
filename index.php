<?php include "header.php";
include "admin/conn.php"; ?>
<!-- Slider 1 Area Start Here -->
<div class="slider1-area overlay-default index1">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="img/slider/1-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="img/slider/1-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="img/slider/1-3.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">No.1 Software (IT) Training Institute</div>
                            <p>We are not just a team of software trainers,we are architect of digital transformation
                                 </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                    <div class="title-container s-tb-c">
                            <div class="title1">Development of Website And Personalized software</div>
                            <p>Fully customizes software & static Or Dynamic Website with responsive
                                 </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Enquiry</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                    <div class="title-container s-tb-c">
                            <div class="title1">Start Learning And define Your Future </div>
                            <p>A New Way of Digital Literacy by Skilled And Experince Coaches & Supportive One To One Coaching 
                                 </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
        <!-- Service 1 Area Start Here -->
        <div class="service1-area">
            <div class="service1-inner-area">
                <div class="container">
                    <div class="row service1-wrapper">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">Flexible Timing</a></h3>
                                <p>we can give the students flexibility timings.</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">AFFORDABLE FEES</a></h3>
                                <p>We are dead cheap in fees. Quality training with less price.</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">INTERVIEW PREPARATION</a></h3>
                                <p>Every course in covered with interview point questions.</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service 1 Area End Here -->
        <!-- About 1 Area Start Here -->
        <div class="about1-area">
            <div class="container">
                <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Skill C<img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo">der</h1>
                <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Being the leader in IT Software Training sector Skill Coder holds the best and inevitable place in short time.</p>
                <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                    <img src="img/about/1.jpg" alt="about" class="img-responsive" />
                </div>
            </div>
        </div>
        <!-- About 1 Area End Here -->
        <!-- Courses 1 Area Start Here -->
        <div class="courses1-area">
            <div class="container">
                <h2 class="title-default-left">Featured Courses</h2>
            </div>
            <div id="shadow-carousel" class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                    data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false"
                    data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <?php
                        $i = '1'; 
                        $coursequery = "SELECT * FROM course ORDER BY id desc";
                        $fetchresult = mysqli_query($connect, $coursequery);
                        while ($row = mysqli_fetch_assoc($fetchresult)) {
                    ?>
                    <div class="courses-box1">
                        <div class="single-item-wrapper">
                            <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="admin/img/course/<?php echo $row['image']?>" alt="courses">
                                <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="courses-content-wrapper">
                                <h3 class="item-title"><a href="#"><?php echo $row['course_name']?></a></h3>
                                <!-- <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p> -->
                                <ul class="courses-info">
                                    <li><?php echo $row['course_duration']?>
                                        <br><span> Course</span></li>
                                    <li><?php echo $row['no_of_day']?>
                                        <br><span> Classes</span></li>
                                    <li><?php $stime="";
                                              $etime="";
                                              $sttime=0;
                                              $entime=0;
                                            if($row['class_start_time']>12){
                                                $sttime= (int)$row['class_start_time']-12;
                                                $stime="PM";
                                            }else{
                                                $sttime= (int)$row['class_start_time'];
                                                $stime= "AM";
                                            }
                                            if($row['class_end_time']>12){
                                                $entime= (int)$row['class_end_time']-12;
                                                $etime="PM";
                                            }else{
                                                $entime= (int)$row['class_end_time'];
                                                $etime="AM"; 
                                            }
                                            echo $sttime.$stime."-" .$entime .$etime; ?>
                                        <br><span> Classes</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>                
                <?php }?>
            </div>
        </div>
    </div>
        <!-- Courses 1 Area End Here -->
        <!-- Video Area Start Here -->
        <div class="video-area overlay-video bg-common-style" style="background-image: url('img/banner/1.jpg');">
            <div class="container">
                <div class="video-content">
                    <h2 class="video-title">Watch online coding video lecture </h2>
                    <p class="video-sub-title">Make A Stopwatch Using HTML CSS & JavaScript
                        <br>For more videos Go to my youtube channel</p>
                    <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="https://www.youtube.com/watch?v=GSAGrhvKxEI"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Video Area End Here -->
      
        <!-- Lecturers Area Start Here -->
       <?php include "trainer.php" ?>
        <!-- Lecturers Area End Here -->
        <!-- News and Event Area Start Here -->
        <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                        <h2 class="title-default-left">Latest News</h2>
                        <ul class="news-wrapper">
                            <?php
                                $i = '1'; 
                                $coursequery = "SELECT * FROM news ORDER BY id desc limit 3";
                                $fetchresult = mysqli_query($connect, $coursequery);
                                while ($row = mysqli_fetch_assoc($fetchresult)) {
                            ?>
                                <li>
                                    <div class="news-img-holder">
                                        <a href="#"><img src="admin/img/news/<?php echo $row['image'];?>" class="img-responsive" alt="news"></a>
                                    </div>
                                    <div class="news-content-holder">
                                        <h3><a href="single-news.html"><?php echo $row['news_head_lines'];?></a></h3>
                                        <div class="post-date"><?php  echo $row['current_date']?></div>
                                        <p><?php echo $row['content'];?></p>
                                    </div>
                                </li>
                                <?php }?>                            
                        </ul>
                        <div class="news-btn-holder">
                            <a href="event.php" class="view-all-accent-btn">View All</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 event-inner-area">
                        <h2 class="title-default-left">Upcoming Events</h2>
                        <ul class="event-wrapper">
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Jan</p>
                                        <span>2017</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Html MeetUp Conference 2017</a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>04:00 PM - 06:00 PM</li>
                                        <li>Australia , Melborn</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Jan</p>
                                        <span>2017</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Workshop On UI Design</a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>03:00 PM - 05:00 PM</li>
                                        <li>Australia , Melborn</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="event-btn-holder">
                            <a href="event.php" class="view-all-primary-btn">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->
        <!-- Counter Area Start Here -->
        <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="10">10</h2>
                        <p>PROFESSIONAL TRAINER</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="05">05</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                        <p>REGISTERED STUDENTS</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Students Say Area Start Here -->
        <?php include "testimonial.php" ?>
        <!-- Students Say Area End Here -->
        <!-- Students Join 1 Area Start Here -->
        <div class="students-join1-area">
            <div class="container">
                <div class="students-join1-wrapper">
                    <div class="students-join1-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img class="img-responsive" style="width:40px" src="img/myimg/skill_logo.png" alt="logo"></a>

                                    <!--<a href="#"><img src="img/students/student8.jpg" alt=""></a>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="students-join1-right">
                        <div>
                            <h2>Join<span> 50</span> Students.</h2>
                            <a href="#" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 1 Area End Here -->
        <!-- Brand Area Start Here -->
        <div class="brand-area">
            <div class="container">
                  <h2 class="title-default-center"> Our Clints</h2>
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
                    data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false"
                    data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                    <div class="brand-area-box">
                        <a href="https://visionplayschoolkalwan.com" target="_blank"><img src="img/our_clints/1.jpg" alt="brand" ></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="https://srivindumanimaabagalarajanguru.in" target="_blank"><img src="img/our_clints/2.png" alt="brand" ></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="https://shreedevmamledareducationhub.com" target="_blank"><img src="img/our_clints/3.jpg" alt="brand" style="border-radius:10%;margin-top:20%"></a>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->
<?php include "footer.php" ?>