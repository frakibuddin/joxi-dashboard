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
        <!-- Start Modal Area -->
        <div class="modal-area">
            <div class="container-fluid">

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">View Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <td scope="col">03</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td scope="col">Angela Carter</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td scope="col">angelacarter@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone</th>
                                            <td scope="col">347983748</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone</th>
                                            <td scope="col">347983748</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area -->
        <!-- end model -->

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Manage Categories</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Pages</li>
                            <li>Manage Category</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3>See All Categories</h3>
                    </div>

                    <table id="example" class="table align-middle mb-0">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">
                                    <h6>Name</h6>
                                </th>
                                <th scope="col">
                                    <h6>Credits</h6>
                                </th>
                                <th scope="col">
                                    <h6>Number</h6>
                                </th>
                                <th scope="col">
                                    <h6>Date</h6>
                                </th>
                                <th scope="col">
                                    <h6>Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">
                                            <img class="rounded-circle me-3 border" src="assets/images/user/user-2.png" alt="user-2">
                                        </label>
                                        <div class="info">
                                            <h4>Ticket One</h4>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="tel:+(124)45678910">984</a>
                                </td>
                                <td>
                                    <span class="location">8740943</span>
                                </td>
                                <td>
                                    <span class="location">5/6/23</span>
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens align-items-center">
                                        <li>
                                            <a href="edit-ticket.php">
                                                <i class="bx bx-edit-alt fs-3"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="view-tickets.php">
                                                <i data-v-3fe659be="" class="ri-eye-fill fs-3"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/icon/trash-2.svg" alt="trash-2">
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>



                        </tbody>
                    </table>
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

<script>
    new DataTable('#example');
</script>