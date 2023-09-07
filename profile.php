<?php include('inc/header.php') ?>

<!-- Start All Section Area -->
<div class="all-section-area">
    <!-- Start Header Area -->
    <?php include('inc/header-menu.php') ?>
    <!-- End Header Area -->

    <!-- Start Sidebar Menu Area -->
    <?php include('inc/sidebar.php') ?>
    <!-- End Sidebar Menu Area -->

    <!-- Start Main Content Area -->
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Profile</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Pages</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Profile Area -->
        <div class="profile-area">
            <div class="container-fluid">
                <div class="card-box-style rounded rounded-30">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="profile-info d-flex align-items-center">
                                <img class="w-25 rounded-4" src="assets/images/profile-img.jpg" alt="profile-img">
                                <div class="profile-name ms-4">
                                    <h4>John Smilga</h4>
                                    <span>Member Since: September 2022</span>
                                    <div class="follow-email">
                                        <button class="btn btn-primary">
                                            Follow
                                        </button>
                                        <a href="mailto:johnsmilga@gmail.com" class="btn btn-secondary">
                                            E-mail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="text-end edit-massage">
                                <a href="edit-profile.php" class="btn btn-primary">
                                    Edit Profile
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-details card-box-style rounded rounded-30">
                    <ul class="list-inline profile-menu">
                        <li>
                            <a href="profile.html" class="active">Profile</a>
                        </li>
                        <li>
                            <a href="friends.html">Friends</a>
                        </li>
                        <li>
                            <a href="followers.html">Followers</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Personal Information</h3>
                        </div>

                        <div class="col-lg-6">
                            <div class="personal-info">
                                <ul class="list-inline">
                                    <li>
                                        <span>Full Name :</span>
                                        John Smilga
                                    </li>
                                    <li>
                                        <span>Profession :</span>
                                        Freelancer
                                    </li>
                                    <li>
                                        <span>Location :</span>
                                        6890 Blvd, The Bronx, NY 1058, USA
                                    </li>
                                    <li>
                                        <span>Languages :</span>
                                        English, China
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="personal-info">
                                <ul class="list-inline">
                                    <li>
                                        <span>Website :</span>
                                        <a href="#" target="_blank">envytheme.com</a>
                                    </li>
                                    <li>
                                        <span>Email :</span>
                                        <a href="mailto:johnsmilga@hello.com">johnsmilga@hello.com</a>
                                    </li>
                                    <li>
                                        <span>Phone :</span>
                                        <a href="tel:+44-077-585-00-77">: +44 077 585 00 77</a>
                                    </li>
                                    <li>
                                        <span>Others Link :</span>
                                        <a href="#">Twitter, Facebook, Linkedin Etc</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="biography">
                        <h3>Biography</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, fugiat harum ab recusandae eligendi cumque ipsa, ullam reiciendis natus nemo aspernatur provident officiis repudiandae aliquam quae quos modi eos temporibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vero numquam inventore. Fugit, animi quaerat! Vero cupiditate, libero itaque atque voluptatibus quos magnam, veritatis, suscipit aut obcaecati est quibusdam voluptas!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit impedit a ducimus. Temporibus cumque modi nulla dolor est fugiat sequi exercitationem corrupti deleniti, consectetur saepe? Reiciendis ullam a totam iste!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        <?php include('inc/footer-text.php') ?>
        <!-- End Footer Area -->
    </main>
    <!-- End Main Content Area -->
</div>
<!-- End All Section Area -->

<?php include('inc/footer.php') ?>