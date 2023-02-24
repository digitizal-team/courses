@extends('front.layouts.app')
@section('content')
    <!-- Include the necessary CSS and JavaScript files -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" integrity="sha512-YDChav1pUAodyH1Ja7PIpEDUOoFROpZi5Lb7pY8+9+kU8UTr3J8SI8QO7SRuf4qdDKb5OI0xSt4Vk1wiYjBXgw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


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

        .booking-summary-card {
            background: #fff;
            padding: 10px;
            border: 1px solid #dbdbdb;
            margin-bottom: 0;
            margin-right: 10px;
            margin-left: 10px;
        }




        .summary-heading {
            font-size: 12px;
            padding-top: 5px;
            font-weight: 700;
        }

        .summary-data {
            font-size: 12px;
            padding-top: 5px;
        }

        .summary-input {
            height: 30px !important;
            margin-left: 12px;
        }

        .remove-student-button {
            height: 30px;
            padding-top: 2px;

        }

        .summery-head {
            margin-bottom: 10px;
        }

        .category-option {
            font-weight: 700;
            color: #666;
            font-size: 15px;
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
                                                    <select name="" id="course" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="">Select Course</option>
                                                        
                                                        @php($category = '');
                                                        @foreach ($courses as $course)
                                                            @if ($category != $course->category->name)
                                                                <option value="" {{ $course->id == $assign_course->course_id ? 'selected' : '' }}  class="category-option" disabled>
                                                                    {{ $course->category->name }}</option>
                                                            @endif
                                                            @php($category = $course->category->name)
                                                            <option value="{{ $course->id }}">
                                                                {{ $course->levelcourse->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="location" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                    </select>
                                                </div>

                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="session" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">

                                                    </select>
                                                </div>

                                                <div class="col-sm-3 option-container">
                                                    <select name="" id="no_of_seats"
                                                        class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">


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

                                            <div id="summery-data">

                                                {{-- <div class="form-group row mb-0">
                                                    <div class="col booking-summary-card ng-touched ng-dirty ng-invalid">
                                                        <div class="row summery-head">
                                                            <div class="col-2 summary-heading">Course </div>
                                                            <div class="col-2 summary-heading">City</div>
                                                            <div class="col-2 summary-heading">Date</div>
                                                            <div class="col-5 ">
                                                                <div class="row">
                                                                    <div class="summary-heading col ">Student Name</div>
                                                                    <div class="summary-heading col">Student Email</div>
                                                                </div>
    
                                                            </div>
                                                            <div class="col-1">
                                                            </div>
                                                        </div>
                                                    <div id="student-summery">
                                                       
                                                    </div>
    
                                                    </div>
    
    
                                                </div> --}}
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

                    <div class="form-group row pt-4"><button class="btn back-button col-sm-4" hidden=""
                            disabled="" id="prev-btn"><i class="fa fa-arrow-circle-left mr-2"></i>
                            <!----> Back
                        </button>
                        <div class="col"></div>
                        <!----><button type="button" class="btn continue-button col-sm-4" id="next-btn">
                            Continue <i class="fa fa-arrow-circle-right ml-2"></i>
                            <!---->
                        </button>
                    </div>


                    {{-- <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" id="prev-btn" disabled>Previous</button>
                            <button type="button" class="btn btn-primary" id="next-btn">Next</button>


                            <button type="submit" class="btn btn-success" id="submit-btn"
                                style="display:none;">Submit</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </form>

    </div>
@endsection
@section('script')
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


    <script>
        ///// get location /////
        $(document).on("change", '#course', function(e) {
            var dataId = $(this).val();
            $.ajax({
                type: 'GET',
                url: "{{ url('/getlocation') }}" + "/" + dataId,
                dataType: 'json',
                success: (data) => {
                    $('#location').empty();

                    $('#location').append('<option value="">Select Location</option>');
                    $.each(data, function(index, element) {
                        $('#location').append('<option value="' + element['city']['id'] + '">' +
                            element['city']['name'] +
                            '</option>');

                    });
                },
            });
        });

        ///// get session /////
        $(document).on("change", '#location', function(e) {
            var city_id = $(this).val();
            var course_id = $('#course').find(":selected").val();
            $.ajax({
                type: 'GET',
                url: "{{ url('/getsession') }}" + "/" + course_id + "/" + city_id,
                dataType: 'json',
                success: (data) => {
                    console.log(data)
                    $('#session').empty();
                    $('#session').append('<option value="">Select Session</option>');
                    $.each(data, function(index, element) {
                        $('#session').append('<option value="' + element['id'] + '">' + element[
                                'date'] + '&nbsp;&nbsp;&nbsp;(' + element['no_of_seats'] +
                            ')</option>');

                    });
                },
            });
        });



        ///// No of Seats /////
        $(document).on("change", '#session', function(e) {
            var id = $(this).val();
            $.ajax({
                type: 'GET',
                url: "{{ url('/getseats') }}" + "/" + id,
                dataType: 'json',
                success: (data) => {
                    $('#no_of_seats').append('<option value="">No. Student</option>');
                    for (let index = 0; index < data; index++) {
                        let no_of_seats = index + 1;
                        $('#no_of_seats').append('<option value="' + no_of_seats + '"> ' + no_of_seats +
                            '</option>');
                    }
                },
            });
        });



        ///// No of Seats /////
        $(document).on("change", '#no_of_seats', function(e) {
            var students = $(this).val();

            // $('#no_of_seats').append('<option value="">No. Student</option>');


                var seats = '' + 
                ' <div class="form-group row mb-0">' + 
                '    <div class="col booking-summary-card ng-touched ng-dirty ng-invalid">' + 
                '        <div class="row summery-head">' + 
                '            <div class="col-2 summary-heading">Course </div>' + 
                '            <div class="col-2 summary-heading">City</div>' + 
                '            <div class="col-2 summary-heading">Date</div>' + 
                '            <div class="col-5 ">' + 
                '                <div class="row">' + 
                '                    <div class="summary-heading col ">Student Name</div>' + 
                '                    <div class="summary-heading col">Student Email</div>' + 
                '                </div>' + 
                '            </div>' + 
                '            <div class="col-1">' + 
                '            </div>' + 
                '        </div>' + 
                '        <div id="student-summery">'; 

            for (let index = 0; index < students; index++) {
                let no_of_student = index + 1;

                  seats += '' + 
                    '<div class="row mt-2">' +
                    '    <div class="col-2 summary-data">Course </div>' +
                    '    <div class="col-2 summary-data">City</div>' +
                    '    <div class="col-2 summary-data">Date</div>' +
                    '    <div class="col-5 ">' +
                    '        <div class="row">' +
                    '            <input type="text"' +
                    '                class="form-control summary-input col">' +
                    '            <input type="text"' +
                    '                class="form-control summary-input col">' +
                    '        </div>' +
                    '' +
                    '    </div>' +
                    '    <div class="col-1 ">' +
                    '        <button type="button"' +
                    '            class="btn btn-dark remove-student-button ng-star-inserted "><i' +
                    '                _ngcontent-xph-c158=""' +
                    '                class="fa fa-times mr-0"></i></button>' +
                    '' +
                    '    </div>' +
                    '</div>' +
                    '';


                
            }


             seats += '' + 
                '        </div>' + 
                '' + 
                '    </div>' + 
                '' + 
                '</div>' + 
                '';

                $('#summery-data').append(seats);

        });
    </script>
@endsection
