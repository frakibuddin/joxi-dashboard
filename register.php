<?php include('inc/header.php') ?>



<!-- Start Account Area -->
<div class="account-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">

                <div class="account-content account-content-reg">
                    <div class="account-header">
                        <a href="index.php">
                            <img src="assets/images/main-logo.svg" alt="main-logo">
                        </a>
                        <h3>Registration</h3>
                    </div>

                    <form class="account-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-24 icon">
                                    <input type="text" class="form-control" placeholder="First Name">
                                    <img src="assets/images/icon/user-square.svg" alt="user-square">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-24 icon">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                    <img src="assets/images/icon/user-square.svg" alt="user-square">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-24 icon">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <img src="assets/images/icon/user-square.svg" alt="user-square">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-24 icon">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <img src="assets/images/icon/sms.svg" alt="sms">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-24 icon">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <img src="assets/images/icon/key.svg" alt="key">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-24 icon">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <img src="assets/images/icon/key.svg" alt="key">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-24 icon">
                                    <input type="number" class="form-control" placeholder="Whatsapp">
                                    <img src="assets/images/icon/user-square.svg" alt="user-square">
                                </div>
                            </div>

                        </div>

                        <div class="form-group mb-24">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree <a href="terms.html">Terms & Policy</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-24">
                            <button type="submit" class="default-btn">Registration</button>
                        </div>
                        <div class="form-group mb-24">
                            <p class="account">Already Have An Account? <a href="login.php">Log In</a></p>
                        </div>
                    </form>

                    <ul class="account-social-link">
                        <li>
                            <a href="https://www.google.com/" target="_blank">
                                <i class='bx bxl-google'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Account Area -->

<?php include("inc/footer.php") ?>