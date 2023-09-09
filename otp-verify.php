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
                        <h3>Please enter the one time password
                            to verify your account</h3>
                        <span>A code has been sent to *******8470</span>
                    </div>

                    <form class="account-wrap">

                        <div class="form-group mb-24">
                            <div id="otp" class="otp-inputs d-flex flex-row justify-content-center my-5">
                                <input class="m-2 text-center form-control " type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control" type="text" id="sixth" maxlength="1" />
                            </div>
                        </div>
                        <div class="form-group mb-24">
                            <button type="submit" class="default-btn">Verify OTP</button>
                        </div>
                        <div class="form-group mb-24 text-center">
                            <p class="account">Didn't get the code? <a href="register.php"> resend</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Account Area -->
<?php include('inc/footer.php') ?>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function(event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }
        OTPInput();
    });
</script>