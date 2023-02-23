@extends('front.layouts.app')
@section('content')
    <!-- Include the necessary CSS and JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.12/jquery.validate.unobtrusive.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- Create the HTML structure for the form -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        .md-stepper-horizontal {
            display: table;
            width: 100%;
            margin: 0 auto;
            background-color: #fff !important;
        }

        .md-stepper-horizontal .md-step {
            display: table-cell;
            position: relative;
            padding: 24px;
        }

        .md-stepper-horizontal .md-step .md-step-circle {
            width: 30px;
            height: 30px;
            margin: 0 auto;
            background-color: #999;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
        }

        .md-stepper-horizontal .md-step .md-step-bar-left {
            left: 0;
            right: 50%;
            margin-right: 20px;
        }

        .md-stepper-horizontal .md-step .md-step-bar-left,
        .md-stepper-horizontal .md-step .md-step-bar-right {
            position: absolute;
            top: 36px;
            height: 1px;
            border-top: 1px solid #ddd;
        }


        .md-stepper-horizontal .md-step .md-step-bar-right {
            right: 0;
            left: 50%;
            margin-left: 20px;
        }

        .md-stepper-horizontal .md-step .md-step-bar-left,
        .md-stepper-horizontal .md-step .md-step-bar-right {
            position: absolute;
            top: 36px;
            height: 1px;
            border-top: 1px solid #ddd;
        }

        .md-stepper-horizontal.orange .md-step.active .md-step-circle {
            background-color: #0064f0;
        }

        .page-text {
            font-size: 24px;
            font-weight: lighter;
        }


        .course-card {
            background: #f6f6f6;
            box-shadow: none;
            margin-bottom: 25px;
        }

        .card .card-body.small-padding {
            padding: 15px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-section-title {
            background: #0064f0;
            color: #fff;
            padding: 5px 5px 5px 15px;
            font-size: 14px;
            width: 100%;
            border-radius: 3px;
        }

        .info-block .col {
            color: #686667;
            background: #f6f6f6;
            font-size: 12px;
            padding: 5px 15px;
        }

        .agreeTcc {
            display: flex;
            font-size: 12px;
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top;
        }

        .fill-remaining-space,
        .flex-1 {
            flex: 1;
        }

        .custom-control-input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .custom-control-label:before,
        .custom-file-label,
        .custom-select {
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .custom-control-label:after,
        .custom-control-label:before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
        }

        .custom-control-label:before {
            pointer-events: none;
            background-color: #fff;
            border: 1px solid #adb5bd;
        }

        .custom-checkbox .custom-control-label:before {
            border-radius: 0.25rem;
        }

        .custom-control-label:after {
            background: no-repeat 50%/50% 50%;
        }

        .custom-control-label:after,
        .custom-control-label:before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
        }

        .info-block .col label {
            line-height: 25px;
        }

        .info-block {
            margin: 0;
            padding-top: 30px;
        }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
        }

        .continue-button:disabled {
            border: 1px solid #888;
            background: #888;
        }

        .continue-button {
            background: #0064f0;
            color: #fff;
            margin-right: 25px;
            height: 34px;
        }

        .continue-button:hover {
            background: #0064f0;
            color: #fff;
            margin-right: 25px;
            height: 34px;
        }

        .back-button {
    background: #dadada;
    color: #686667;
    margin-left: 25px;
    height: 34px;
}

.back-button:hover {
    background: #dadada;
    color: #686667;
    margin-left: 25px;
    height: 34px;
}


    </style>

    <div class="container">
        <form>

            <div class="row">
                <div class="col"></div>
                <div class="col-sm-7">
                    <div class="md-stepper-horizontal orange">
                        <div class="md-step">
                            <div class="md-step-circle"><span>1</span>
                            </div>
                            {{-- <div  class="md-step-bar-left"></div> --}}
                            <div class="md-step-bar-right"></div>
                        </div>
                        <div class="md-step active">
                            <div class="md-step-circle"><span>2</span>
                            </div>
                            <div class="md-step-bar-left"></div>
                            <div class="md-step-bar-right"></div>
                        </div>
                        <div class="md-step">
                            <div class="md-step-circle"><span>3</span>
                            </div>
                            <div class="md-step-bar-left"></div>
                            {{-- <div  class="md-step-bar-right"></div> --}}
                        </div>
                        <!---->
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">

                <h1 class="col page-text text-center">Book Your Course</h1>
            </div>


            <div class="row justify-content-center">



                <div class="col-12">
                    {{-- <div class="row">
                    <div class="col-4">
                        <div class="step">
                            <div class="step-circle">1</div>
                            <div class="step-label">Step 1</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="step">
                            <div class="step-circle">2</div>
                            <div class="step-label">Step 2</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="step">
                            <div class="step-circle">3</div>
                            <div class="step-label">Step 3</div>
                        </div>
                    </div>
                </div> --}}













                    <div class="row">
                        <div class="col-12">
                            <div class="form-step" id="step-1">

                                <div class="col-md-12 book-now-details-container">
                                    <div class="card course-card book-form-card">
                                        <div class="card-body small-padding">
                                            <div class="form-group row mobile-hidden">
                                                <div class="col-sm-12">
                                                    <div class="form-section-title">Course Details</div>
                                                </div>
                                            </div>
                                            <!---->
                                            <div
                                                class="form-group row course-selection-container ng-touched ng-pristine ng-invalid">
                                                <div class="col-sm-3">

                                                    <select name="" id="" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>

                                                    </select>

                                                </div>
                                                <!---->
                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>

                                                    </select>
                                                </div>

                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>

                                                    </select>
                                                </div>

                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>
                                                        <option value="">Excel entermeditae</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <!---->
                                            <div class="row">
                                                <div class="col-md-7 col-12 pt-2">
                                                    <div class="form-group pt-2 ng-touched ng-pristine ng-invalid">
                                                        <app-bookingtrafficlights _nghost-orc-c156="">
                                                            <div _ngcontent-orc-c156="" class="col light-container">
                                                                <div _ngcontent-orc-c156="" class="light orange-light">
                                                                </div>
                                                                <span _ngcontent-orc-c156="">
                                                                    <!----><span _ngcontent-orc-c156=""> Course will run.
                                                                        Limited
                                                                        seats available (8 seats available). </span>
                                                                    <!---->
                                                                </span>
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </app-bookingtrafficlights>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div class="form-group row mt-3 mb-2">
                                                <div class="col-sm-12">
                                                    <div class="form-sub-title">Course Booking Summary
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div role="alert" class="alert alert-info mb-0 mt-4"> No
                                                courses have been added to the booking. Please select a course above. </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>


                                    <div class="card mb-3 course-card">
                                        <div class="card-body small-padding">
                                            <div class="form-group row mobile-hidden">
                                                <div class="col-sm-12">
                                                    <div class="form-section-title">Billing Contact
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col">
                                                    <!----><input type="email" id="billingEmail" name="billingEmail"
                                                        autocomplete="email" formcontrolname="billingEmail"
                                                        placeholder="Email"
                                                        class="form-control ng-untouched ng-pristine ng-invalid">
                                                    <!---->
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>

                                    <div class="row info-block pt-2">
                                        <div class="col">
                                            <div class="custom-control custom-checkbox"><input type="checkbox"
                                                    id="agreeTcc" class="custom-control-input"><label for="agreeTcc"
                                                    class="custom-control-label agreeTcc"> We will use information provided
                                                    as
                                                    per our&nbsp; <a
                                                        href="https://nexacu.com.au/about/privacy-collection-statement-marketing/"
                                                        target="_blank" class="action-text"> Collection Statement </a> .
                                                    <span class="fill-remaining-space"></span><span
                                                        class="text-danger">Required*</span></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                            </div>
                            <div class="form-step" id="step-2" style="display:none;">
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" id="address" name="address" class="form-control" required />
                                </div>
                            </div>
                            <div class="form-step" id="step-3" style="display:none;">
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" id="username" name="username" class="form-control"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row pt-4"><button
                            class="btn back-button col-sm-4" hidden="" disabled="" id="prev-btn"><i
                                class="fa fa-arrow-circle-left mr-2"></i>
                            <!----> Back
                        </button>
                        <div class="col"></div>
                        <!----><button type="button" class="btn continue-button col-sm-4" id="next-btn">
                            Continue <i class="fa fa-arrow-circle-right ml-2"></i>
                            <!---->
                        </button>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" id="prev-btn" disabled>Previous</button>
                            <button type="button" class="btn btn-primary" id="next-btn">Next</button>


                            <button type="submit" class="btn btn-success" id="submit-btn"
                                style="display:none;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <script>
        $(document).ready(function() {
            // Initialize the current step
            var currentStep = 1;

            // Get the total number of steps
            var totalSteps = $('.md-step').length;

            // Hide the previous button on the first step
            // if (currentStep === 1) {
            //     $('#prev-btn').hide();
            // }

            // Show the next button on all steps except the last one
            if (currentStep !== totalSteps) {
                $('#next-btn').show();
            }

            // Show the submit button on the last step
            if (currentStep === totalSteps) {
                $('#next-btn').hide();
                $('#submit-btn').show();
            }

            // Hide all steps except the first one
            $('.form-step').not('#step-1').hide();

            // Handle the click event for the next button
            $('#next-btn').on('click', function() {
                // Get the current step
                var $currentStep = $('#step-' + currentStep);

                // Validate the form on the current step
                // if (!$currentStep.valid()) {
                //     return false;
                // }

                // Hide the current step
                $currentStep.hide();

                // Increment the current step
                currentStep++;

                // Get the next step
                var $nextStep = $('#step-' + currentStep);

                // Show the next step
                $nextStep.show();

                // Update the step navigation
                $('.md-step-circle.active').removeClass('active').next().addClass('active');
                // $('.step-label.active').removeClass('active').next().addClass('active');

                // Enable the previous button
                $('#prev-btn').removeAttr('disabled');
                $('#prev-btn').removeAttr('hidden');

                // Hide the next button on the last step
                if (currentStep === totalSteps) {
                    $('#next-btn').hide();
                    $('#submit-btn').show();
                }
            });

            // Handle the click event for the previous button
            $('#prev-btn').on('click', function() {
                // Get the current step
                var $currentStep = $('#step-' + currentStep);

                // Hide the current step
                $currentStep.hide();

                // Decrement the current step
                currentStep--;

                // Get the previous step
                var $prevStep = $('#step-' + currentStep);

                // Show the previous step
                $prevStep.show();

                // Update the step navigation
                $('.md-step-circle.active').removeClass('active').prev().addClass('active');
                // $('.step-label.active').removeClass('active').prev().addClass('active');

                // Disable the previous button on the first step
                if (currentStep === 1) {
                    $('#prev-btn').prop('disabled', true);
                }

                // Show the next button on all steps except the last one
                if (currentStep !== totalSteps) {
                    $('#next-btn').show();
                    $('#submit-btn').hide();
                }
            });
        });
    </script>
@endsection
