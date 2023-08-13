<?php require_once('../inc/opener.php') ?>
<!-- Page -->
<link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css">
<div class="authentication-wrapper authentication-basic px-4">
    <div class="authentication-inner">
        <div class="card">
            <div class="card-body">
                <div class="app-brand justify-content-center">
                    <a href="index.php" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="../assets/svg/logo.svg" alt="Demo">
                        </span>
                        <span class="app-brand-text demo text-body fw-bolder">Demo</span>
                    </a>
                </div>
                <h4 class="mb-2">Two Step Verification 💬</h4>
                <p class="text-start mb-4">
                    We sent a verification code to your mobile. Enter the code from the mobile in the field below.
                    <span class="fw-bold d-block mt-2">******1234</span>
                </p>
                <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
                <form id="twoStepsForm" action="index.php" method="POST">
                    <div class="mb-3">
                        <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus>
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                            <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                        </div>
                        <input type="hidden" name="otp" />
                    </div>
                    <button class="btn btn-primary d-grid w-100 mb-3">
                        Verify my account
                    </button>
                    <div class="text-center">Didn't get the code?
                        <a href="javascript:void(0);">
                            Resend
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('../inc/closer.php') ?>
<!-- Page JS -->
<script src="../assets/js/pages-auth.js"></script>