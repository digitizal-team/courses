@extends('front.layouts.app')
@section('content')
    <style>
        .card-header {
            background-color: #0d6efd;
            color: white;
        }

        .card-body {
            background-color: #f5f5f5;
        }

        .nav-tabs {
            background-color: #0d6efd;
            color: white;
        }

        .tab-content {
            background-color: #f5f5f5;
        }

        .nav-link {
            color: white;
        }

        .nav-link .active {
            color: white;
        }
    </style>
    <main class="container-fluid">
        <section class="py-5  container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach ($courses as $key => $item)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="courseId" data-bs-toggle="tab"
                                    data-id="{{ $item->id }}" data-bs-target="#home{{ $item->id }}" type="button"
                                    role="tab" aria-controls="home"
                                    aria-selected="true">{{ $item->levelcourse->name }}</button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($courses as $course)
                            <div class="tab-pane fade show" id="home{{ $course->id }}" role="tabpanel">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $assign_courses = App\Models\AssignCourse::where('course_id', $course->id)
                                                ->with('course')
                                                ->get();
                                        @endphp
                                        @foreach ($assign_courses as $item)
                                            <tr>
                                                <td scope="row">{{ $item->date }}</td>
                                                <td scope="row">{{ $item->course->category->name }}
                                                    {{ $item->course->levelcourse->name }}</td>
                                                <td scope="row">{{ $item->course->citycourse->city->name }}</td>
                                                <td scope="row">{{ $item->course->status }}</td>
                                                <td scope="row"><button type="button" class="btn btn-dark btn-sm">Book
                                                        Now</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Course Details
                        </div>
                        <div class="card-body">
                            <div class="row" id="myHtmlCode">

                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="macro-course-structure course-blue-box large">

                        <div class="title accordion">
                            <h2>
                                <span class="mobiletittle"> Power BI</span>
                                Course Outlines
                            </h2>
                        </div>

                        <ul class="panel courseoutline">
                            <div class="mobile">

                                <style>
                                    .icon-19::after {
                                        background-image: {{ url('front/assets/images/powerbi.png') }};
                                    }
                                </style>
                                <li class="icon-19 " title="Power BI icon">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">Power BI Beginner</div>
                                                <div class="download">
                                                    <a href="https://portal.nexacu.com.au/api/Public/GetCoursePdf/10"
                                                        target="_blank">download course pdf</a>
                                                </div>
                                                <div>
                                                    <span>$385</span>

                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="/microsoft-power-bi-training-courses/power-bi-beginner/"
                                                    class="view-course">View <span class="courses">Course</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <style>
                                    .icon-18::after {
                                        background-image: url("/media/krtl3owd/power-bi_128x128.png");
                                    }
                                </style>
                                <li class="icon-18 " title="Power BI icon">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">Power BI Intermediate</div>
                                                <div class="download">
                                                    <a href="https://portal.nexacu.com.au/api/Public/GetCoursePdf/9"
                                                        target="_blank">download course pdf</a>
                                                </div>
                                                <div>
                                                    <span>$595</span>

                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="/microsoft-power-bi-training-courses/power-bi-intermediate/"
                                                    class="view-course">View <span class="courses">Course</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <style>
                                    .icon-20::after {
                                        background-image: url("/media/krtl3owd/power-bi_128x128.png");
                                    }
                                </style>
                                <li class="icon-20 " title="Power BI icon">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">Power BI Advanced</div>
                                                <div class="download">
                                                    <a href="https://portal.nexacu.com.au/api/Public/GetCoursePdf/11"
                                                        target="_blank">download course pdf</a>
                                                </div>
                                                <div>
                                                    <span>$595</span>

                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="/microsoft-power-bi-training-courses/power-bi-advanced/"
                                                    class="view-course">View <span class="courses">Course</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <style>
                                    .icon-21::after {
                                        background-image: url("/media/krtl3owd/power-bi_128x128.png");
                                    }
                                </style>
                                <li class="icon-21 " title="Power BI icon">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">Power BI DAX</div>
                                                <div class="download">
                                                    <a href="https://portal.nexacu.com.au/api/Public/GetCoursePdf/12"
                                                        target="_blank">download course pdf</a>
                                                </div>
                                                <div>
                                                    <span>$595</span>

                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="/microsoft-power-bi-training-courses/power-bi-dax/"
                                                    class="view-course">View <span class="courses">Course</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <style>
                                    .icon-cert::after {
                                        background-image: url("/media/f5ijtexc/nexacu-ms-badge-300-x-300.png?width=60px");
                                    }
                                </style>
                                <li class="icon-cert" title="">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">DA-100 Power BI Certification</div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="/certification-programs/da-100-power-bi-certification/"
                                                    class="view-course">View <span class="courses">Course</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).on("click", '#courseId', function(e) {
                var dataId = $(this).attr("data-id");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: "{{ url('/getCourseData') }}" + "/" + dataId,
                    data: null,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: (data) => {
                        $('#myHtmlCode').empty();
                        $('#myHtmlCode').append(myHtmlCode);
                        var myHtmlCode =
                            '<div class="col-6">' +
                            '<p>Price</p>' +
                            '<p>Duration</p>' +
                            '<p>Time</p>' +
                            '<p>Class Size (max)</p>' +
                            '<p>Class Size (avg)</p>' +
                            '<p>Reference Materials</p>' +
                            '<p>Training Computer</p>' +
                            '<p>CPD Hours</p>' +
                            '<p>Delivery</p>' +
                            '</div>' +
                            '<div class="col-6" id="myHtmlCode">' +
                            '<p>' + data.data.price + '</p>' +
                            '<p>' + data.data.duration + '</p>' +
                            '<p>' + data.data.time + '</p>' +
                            '<p>' + data.data.class_size_max + '</p>' +
                            '<p>' + data.data.class_size_min + '</p>' +
                            '<p>' + data.data.reference_material + '</p>' +
                            '<p>' + data.data.training_computer + '</p>' +
                            '<p>' + data.data.CPD_hour + '</p>' +
                            '<p>' + data.data.delivery + '</p>'
                        '</div>';
                        console.log(data.data.price)
                        $('#myHtmlCode').append(myHtmlCode);
                    },
                });
            });
        </script>
    </main>
@endsection
