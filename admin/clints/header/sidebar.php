<?php
include "conn.php";
?>
<style>
    .file {
        margin-right: 10px;
    }
</style>
<div id="layoutSidenav_nav" style="background-color: #e7db9c!important;">
    <nav class="sb-sidenav accordion " id="sidenavAccordion" >
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"><Strong>Menu</Strong></div>
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="add_teacher.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                    Add Teacher
                </a>
                <a class="nav-link" href="all_teacher.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-layer-group"></i></div>
                    All Teacher 
                </a>
                <a class="nav-link" href="add_student.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                    Add Student
                </a>
                <a class="nav-link" href="all_student.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-layer-group"></i></div>
                    All Student 
                </a>
                <a class="nav-link" href="fee_collect.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-rupee-sign"></i></div>
                    Fee Colletion
                </a>
                <a class="nav-link" href="fee_collection_list.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-rupee-sign"></i></div>
                    Fee Colletion List
                </a>
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLayoutss1" aria-expanded="true" aria-controls="collapseLayoutss">
                    <div class="sb-nav-link-icon"><i class="fa fa-globe"></i></div>
                   Master
                    <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="false" focusable="false" data-prefix="fas" data-icon="angle-down">
                        </svg>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseLayoutss1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add_class.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                             Class
                        </a> 
                        <a class="nav-link" href="add_section.php">
                           <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                          Section
                        </a>
                        <a class="nav-link" href="add_fee_type.php">
                        <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                          Fee Type
                        </a>           
                    </nav>
                </div>
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLayoutss2" aria-expanded="true" aria-controls="collapseLayoutss">
                    <div class="sb-nav-link-icon"><i class="fa fa-globe"></i></div>
                   Upload
                    <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="false" focusable="false" data-prefix="fas" data-icon="angle-down">
                        </svg>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <a class="nav-link" href="my-profile.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                    My Profile
                </a>              
            </div>
        </div>
    </nav>
</div>