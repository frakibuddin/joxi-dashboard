<?php include('inc/header.php') ?>



<!-- Start All Section Area -->
<div class="all-section-area">
    <!-- Start Header Area -->
    <?php include('inc/header-menu.php') ?>
    <!-- End Header Area -->

    <!-- Start Sidebar Area -->
    <?php include('inc/sidebar.php') ?>

    <!-- End Sidebar Area -->

    <!-- Start Main Content Area -->
    <main class="main-content-wrap style-two">

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Edit Services</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Pages</li>
                            <li>Edit Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="card-box-style rounded">
                    <div class="others-title">
                        <p class="fw-bold">Input the Services info to Edit a Current Services</p>
                    </div>

                    <form>
                        <div class="row mb-3">
                            <label for="inputEmail2" class="col-sm-2 col-form-label">Services Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Services Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select name="" id="" class="form-control">
                                    <option value="">Choose</option>
                                    <option value="">Option One</option>
                                    <option value="">Option Two</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Services Desc</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <div id="txtEditor"></div>
                                </div>
                            </div>


                        </div>


                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

        <!-- Start Footer Area -->
        <?php include('inc/footer-text.php') ?>
        <!-- End Footer Area -->

    </main>
    <!-- End Main Content Area -->
</div>
<!-- End All Section Area -->

<?php include('inc/footer.php') ?>