<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body class="for--contact-us">

    <main class="contact-us">
        <!-- section 1 -->
        <section class="enquiry-form-sec" id="enquiry-now">
            <div class="row m-0">
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-12 p-0 column-1" id="enquiry">
                    <div class="myenquire-form">
                        <h1>Contact Us</h1>
                        <form action="<?= base_url('pages/enquiry_validation') ?>" method="post" id="enquiryForm">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control rounded-0 shadow-none" name="name" id="" placeholder="Full Name *" autocomplete="off" value="<?= set_value('name') ?>" required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <input type="email" class="form-control rounded-0 shadow-none" name="email" id="" placeholder="Email Address *" value="<?= set_value('email') ?>" oninput="this.value = this.value.replace(/[^\w@.-]/g, '');" required autocomplete="off">

                                </div>

                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control rounded-0 shadow-none" name="mobile" id="number" placeholder="Contact No *" required autocomplete="off" maxlength="10" minlength="10" min="0" oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control rounded-0 shadow-none" name="designation" id="" placeholder="Designation *" autocomplete="off" value="<?= set_value('designation') ?>" required>

                                </div>
                            </div>

                            <div class="row mb-2 d-flex justify-content-between">
                                <div class="col-md-6 mb-4">
                                    <select class="form-control rounded-0 shadow-none" required autocomplete="off" name="state" id="stateSelect">
                                        <option selected="true" value="">Select State *</option>
                                    </select>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <select class="form-control rounded-0 shadow-none" required autocomplete="off" name="city" id="citySelect">
                                        <option selected="true">Select City *</option>
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-sm-3 mb-md-4">
                                <div class="col-md-12 mb-4 d-flex flex-column align-items-start">
                                    <label for="" class="form-label mb-4 fw-light poppins--ff poppins-font investment-capicity">Investment
                                        Capacity</label>
                                    <div class="range-slider d-flex align-items-center justify-content-center">
                                        <!-- <span>5 LPA</span> -->
                                        <div class="slider-container d-flex align-items-center justify-content-center">
                                            <input class="rounded-0" type="range" id="rangeSlider" name="investment" min="5" max="30" value="10">
                                            <!-- <span id="sliderValue" style=" font-size: 1.125rem;">25 - Cr</span> -->
                                        </div>
                                        <!-- <span>30
                                            LPA</span> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-sm-3 mb-md-4">
                                <div class="col-md-12 mb-3 d-flex flex-column justify-content-center align-items-center">
                                    <textarea class="form-control rounded-0 shadow-none" name="message" type="text" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-check form-check-custom d-flex align-items-center justify-content-start mb-5">
                                    <input type="checkbox" class="form-check-input rounded-0 mt-0 shadow-none" value="" name="terms_and_condition" id="flexCheckChecked" required>
                                    <label class="form-check-label text-white ms-4 poppins-font fw-light shadow-none" for="flexCheckChecked" style="color: #6c757d !important; font-weight:500">
                                        <span>I accept the</span> Terms and Condition
                                    </label>
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-center mb-5" id="recaptcha-container"></div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="submit" value="Submit" class="btn btn-submit enquiry_submit" id="submitButton" name="enquiry_submit">
                                    Submit
                                </button>
                                <!-- <button type="submit" value="Submit" class="btn btn-submit enquiry_submit" id="submitButton" name="enquiry_submit">
                                    GET OTP
                                </button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- OTP modal  Start Here -->
    <div class="modal fade main-ppp" id="verificationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered subscribing-modal modal-lg">
            <div class="modal-content py-2 px-2 py-md-3 px-md-3">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal();"></button>
                <div class="modal-header" style="border-bottom: 0 !important;">
                    <h5 class="modal-title text-center hvc-reg--ff sub-heading w-100" id="staticBackdropLabel">OTP Verification</h5>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center gap-5">
                    <div class="wrapper d-flex align-items-center justify-content-center gap-3">
                        <input type="text" class="field text-center" maxlength="1">
                        <input type="text" class="field text-center" maxlength="1">
                        <input type="text" class="field text-center" maxlength="1">
                        <input type="text" class="field text-center" maxlength="1">
                        <input type="text" class="field text-center" maxlength="1">
                        <input type="text" class="field text-center" maxlength="1">
                    </div>
                    <button type="button" id="verifyButton" onclick="codeverify();">OTP Verify</button>
                </div>
            </div>
        </div>
    </div>

    <!-- custom script -->
    <script>
        var rangeSlider = document.getElementById("rangeSlider");
        var sliderValue = document.getElementById("sliderValue");

        rangeSlider.addEventListener("input", function() {
            sliderValue.innerText = rangeSlider.value + ' LPA';
            updateSliderValuePosition();
        });

        function updateSliderValuePosition() {
            var thumbWidth = 15;
            var sliderWidth = rangeSlider.offsetWidth - thumbWidth;
            var thumbPosition = (rangeSlider.value / rangeSlider.max) * sliderWidth;
            var valuePosition = thumbPosition + (thumbWidth / 2);
            sliderValue.style.up = valuePosition + "px";
        }

        const inputFields = document.querySelectorAll("input.field");

        inputFields.forEach((field) => {
            field.addEventListener("input", handleInput);
        });

        function handleInput(e) {
            let inputField = e.target;
            if (inputField.value.length >= 1) {
                let nextField = inputField.nextElementSibling;
                return nextField && nextField.focus();
            }
        }
        const inputNumber = document.getElementById("number");
        const submitButton = document.getElementById("otpbutton");


        inputNumber.addEventListener("input", checkInputLength);

        function checkInputLength() {
            if (inputNumber.value.length >= 10) {
                submitButton.removeAttribute("disabled");
            } else {
                submitButton.setAttribute("disabled", "true");
            }
        }
    </script>