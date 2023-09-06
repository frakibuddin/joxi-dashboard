<?php include('inc/header.php') ?>


    <!-- Start Account Area -->
    <div class="account-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="account-content">
                        <div class="account-header">
                            <a href="index.html">
                                <img src="assets/images/main-logo.svg" alt="main-logo">
                            </a>
                            <h3>Login</h3>
                        </div>

                        <form class="account-wrap">
                            <div class="form-group mb-24 icon">
                                <input type="email" class="form-control" placeholder="Email">
                                <img src="assets/images/icon/sms.svg" alt="sms">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="password" class="form-control" placeholder="Password">
                                <img src="assets/images/icon/key.svg" alt="key">
                            </div>
                            <div class="form-group mb-24">
                                <a href="forget-password.html" class="forgot">Forgot Password?</a>
                            </div>
                            <div class="form-group mb-24">
                                <button type="submit" class="default-btn">Log In</button>
                            </div>
                            <div class="form-group mb-24 text-center">
                                <p class="account">Not A Member? <a href="register.php">Create An Account</a></p>
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



    <?php include('inc/footer.php') ?>