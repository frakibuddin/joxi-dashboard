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
                            <h3>Invoice</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Pages</li>
                            <li>Invoice</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Invoice Area -->
        <div class="invoice-area">
            <div class="container-fluid">
                <div class="card-box-style rounded">
                    <div class="invoice-header mb-24 d-flex justify-content-between">
                        <div class="invoice-left-text">
                            <h3 class="mb-0">Joxi Invoice #0011</h3>
                            <p class="mt-2 mb-0">S/2856, <br>Quadra Street, <br>Victoria, <br>USA.</p>
                        </div>

                        <div class="invoice-right-text">
                            <h3 class="mb-0 text-uppercase">#Invoice</h3>
                        </div>
                    </div>

                    <div class="invoice-middle mb-24">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="text">
                                    <h4 class="mb-2">Bill To</h4>
                                    <span class="d-block mb-1">California S Home</span>
                                    <span class="d-block mb-1">2022 Redbud Drive</span>
                                    <span class="d-block">New York, NY 99999</span>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="text">
                                    <h4 class="mb-2">Ship To</h4>
                                    <span class="d-block mb-1">California S Home</span>
                                    <span class="d-block mb-1">2022 Redbud Drive</span>
                                    <span class="d-block">New York, NY 99999</span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text text-end">
                                    <h5>Invoice # <sub>Int-003</sub></h5>
                                    <h5>Invoice Date # <sub>29/09/2022</sub></h5>
                                    <h5>P.O # <sub>4525/2022</sub></h5>
                                    <h5 class="mb-0">Due Date # <sub>06/10/2022</sub></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="invoice-table table-responsive mb-24">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>M1 chip MacBook Air</td>
                                    <td class="text-end">$999.00</td>
                                    <td class="text-end">$999.00</td>
                                </tr>

                                <tr>
                                    <td>01</td>
                                    <td>M2 chip MacBook Air</td>
                                    <td class="text-end">$1199.00</td>
                                    <td class="text-end">$1100.00</td>
                                </tr>

                                <tr>
                                    <td>01</td>
                                    <td>iPhone 13 Pro</td>
                                    <td class="text-end">$900.99</td>
                                    <td class="text-end">$900.99</td>
                                </tr>

                                <tr>
                                    <td>01</td>
                                    <td>iPhone 14 Pro Max</td>
                                    <td class="text-end">$1100.99</td>
                                    <td class="text-end">$1100.99</td>
                                </tr>

                                <tr>
                                    <td class="text-end" colspan="3"><strong>Subtotal</strong></td>
                                    <td class="text-end">$4099.99</td>
                                </tr>

                                <tr>
                                    <td class="text-end" colspan="3"><strong>Sales Tax 4.0%</strong></td>
                                    <td class="text-end">$200.99</td>
                                </tr>

                                <tr>
                                    <td class="text-end total" colspan="3"><strong>Total</strong></td>
                                    <td class="text-end total-price"><strong>$3899</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="invoice-btn text-end">
                        <a href="#" class="default-btn">Print</a>
                        <a href="#" class="default-btn">Send Invoice</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoice Area -->

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