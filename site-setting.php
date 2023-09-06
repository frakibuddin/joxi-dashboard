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

                <div class="card-box-style rounded">
                    <div class="others-title">
                        <h3>Site Title Form</h3>
                    </div>

                    <form>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Site Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>

                    </form>
                </div>

                <div class="card-box-style rounded rounded-30">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="others-title">
                                <h3>Site Logo</h3>
                            </div>
                            <div class="profile-info d-flex gap-4 align-items-center">

                                <img class="w-25 rounded-4" src="assets/images/profile-img.jpg" alt="profile-img">
                                <a href="edit-profile.php" class="btn btn-primary">
                                    Choese Logo
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="others-title">
                                <h3>Site Favicon</h3>
                            </div>
                            <div class="profile-info d-flex gap-4 align-items-center">

                                <img class="w-25 rounded-4" src="assets/images/profile-img.jpg" alt="profile-img">
                                <a href="edit-profile.php" class="btn btn-primary">
                                    Choese Icon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-box-style rounded rounded-30">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="others-title">
                                <h3>Banner Image</h3>
                            </div>
                            <div class="profile-info d-flex gap-4 align-items-center">

                                <img class="w-25 rounded-4" src="assets/images/profile-img.jpg" alt="profile-img">
                                <a href="edit-profile.php" class="btn btn-primary">
                                    Choese Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Profile Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="container-fluid">
                <div class="footer-content">
                    <p>© Joxi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->
    </main>
    <!-- End Main Content Area -->
</div>
<!-- End All Section Area -->

<?php include('inc/footer.php') ?>