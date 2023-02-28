@extends('front.layouts.app')
@section('content')
<style>
    .card-header{
        background-color: #0d6efd;
        color: white;
    }
    .card-body{
        background-color: #f5f5f5;
    }
    .nav-tabs{
        background-color: #0d6efd;
        color: white;
    }
    .tab-content{
        background-color: #f5f5f5;
    }
    .nav-link{
        color: white;
    }
    .nav-link .active{
        color: white;
    }

</style>

<section class="mt-3 mb-3">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-6">
                <div class="main-image" style="background-image:url('{{ asset('front/assets/images/ab.png') }}');">

                </div>
            </div>
            <div class="col-md-6 mt-4">
                <h3 class="main-heading">Instructor-led Training Courses

                    </h4>
                    <p class="first-p">Upgrade your Microsoft and Data Analytics skills


                    </p>
                    <p class="first-p">All of our public courses can be attended online via remote log in.
                        </strong>
                        To attend remotely, select "Remote Online" as your location on book now.
                    </p>
                    <p class="first-p">The need to be tech-savvy has never been more important. As Australia’s
                        leading provider of Microsoft skilled end-user training, we offer practical courses
                        nationwide - in small groups in class, at your workplace, and live online. It's time to
                        complete Microsoft training to make the most of Microsoft's impressive suite of
                        applications.

                    </p>
                    <p class="first-p">
                        Our Microsoft courses span almost all of the Microsoft suite, including Power BI, Office365, SharePoint, PowerApps, Excel, VBA, Project and more. Microsoft training courses are the best way to increase your efficiency at work. Our dedicated course writers are at the forefront of technology, designing unique training to advance you to the next level of capability and give you and your team a productivity advantage. Give your skills an upgrade!


                    </p>
                  
            </div>
        </div>
    </div>
</section>
<main class="container-fluid">
    <section class="py-5  container">
        <div class="row py-lg-5">
          <div class="col-6">
            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <div class="scrollmenu">
                    @foreach ($coursebycities as $coursecity)
                      
                    <a href="#home">{{ $coursecity->city_name }}</a>
                    @endforeach
                  </div>
              </ul> --}}

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($coursebycities as $key => $item)
                <li class="nav-item" role="presentation">
                  <a class="scrollmenu nav-link {{ $key == 0 ? 'active' : '' }}" id="cityId" onclick="cityId({{ $item->city_id }})"  data-bs-toggle="tab" data-id="{{ $item->city_id }}" data-bs-target="#home{{ $item->id }}" type="button" role="tab" aria-controls="home" aria-selected="true">{{ $item->city_name }}</a>
                </li>
                @endforeach
              </ul>

              <div class="tab-content" id="myTabContent">
                @foreach($coursebycities as $key => $item)
                  <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="home{{ $item->id }}" role="tabpanel" >
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
                         $assign_courses = App\Models\Course::where('courses.level_id',$item->level_id)
                                            ->where('assign_courses.city_id',$item->city_id)
                                            ->select('assign_courses.*','cities.name as city_name','categories.name as category_name','courses.status as status')
                                            ->join('assign_courses','assign_courses.course_id','courses.id')
                                            ->join('cities','assign_courses.city_id','cities.id')
                                            ->join('categories','courses.category_id','categories.id')
                                            ->get();
                        @endphp
                        @foreach($assign_courses as $item)
                        <tr>
                          <td scope="row">{{ $item->date }}</td>
                          <td scope="row">{{ $item->category_name }} </td>
                          <td scope="row">{{ $item->city_name }}</td>
                          <td scope="row">{{ $item->status }}</td>
                          <td scope="row">
                            <a href="{{ url('/booking',$item->session_id) }}" class="view-course"><span class="courses">Book Now</span></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @endforeach
              </div>
          </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header">
                  Course Details
                </div>
                <div class="card-body" >
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
                                @foreach ($courselevel as $level)
                                    
                              
                                <li class="icon-19 " title="Power BI icon">
                                    <div class="container-flex">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">{{ $level->name }}</div>
                                                <div class="download">
                                                    <a href="https://portal.nexacu.com.au/api/Public/GetCoursePdf/10"
                                                        target="_blank">download course pdf</a>
                                                </div>
                                                <div>
                                                    <span>$385</span>

                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end pb-3">
                                                <a href="{{ url('course/level/'. $level->id) }}"
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
                                 @endforeach

                             
                                

                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ">

                </div>
                <div class="col-lg-3  other-courses">
                    <div class="other-courses-logo">
                        <div class="card-header">
                            Other Courses
                        </div>
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">
                        <img class="other-course-img" src="{{ url('front/assets/images/powerbi.png') }}" alt="">

                    </div>
                </div>
                <div class="col-lg-3 Course-by-cities">
                    <div class="card-header">
                        Power BI City Pages
                    </div>
                    <ul style="background-color: #f5f5f5">
                        <li>Power BI Brisbane Dates</li>
                        <li>Power BI Melbourne Dates</li>
                        <li>Power BI Sydney Dates</li>
                        <li>Power BI Adelaide Dates</li>
                        <li>Power BI Perth Dates</li>
                        <li>Power BI Parramatta Dates</li>
                        <li>Power BI Canberra Dates</li>
                        <li>Power BI Remote Online Dates</li>
                    </ul>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
           
           cityId({{ $coursebycities[0]->city_id }});
           
           function cityId(dataId){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : "{{ url('/getcitydata') }}" + "/" + dataId,
                    type : 'get',
                    data: null,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: (data) => {
                        console.log(data)
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
                })

        }
          
          
        </script>
    </main>
@endsection
