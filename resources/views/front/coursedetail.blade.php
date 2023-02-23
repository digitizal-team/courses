@extends('front.layouts.app')
@section('content')
<main class="container-fluid">



<<<<<<< HEAD
    <section class="py-5  container">
=======
    <section class="py-5 text-center ">
>>>>>>> refs/remotes/origin/main
        <div class="row py-lg-5">
          <div class="col-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              {{-- @dd($courses) --}}
                @foreach($courses as $item)
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="courseId"  data-bs-toggle="tab" data-id="{{ $item->id }}" data-bs-target="#home{{ $item->id }}" type="button" role="tab" aria-controls="home" aria-selected="true">{{ $item->levelcourse->name }}</button>
                </li>
                @endforeach
              </ul>
              <div class="tab-content" id="myTabContent">
                @foreach($courses as $course)
                
                  <div class="tab-pane fade show" id="home{{ $course->id }}" role="tabpanel" >
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
                         $assign_courses = App\Models\AssignCourse::where('course_id',$course->id )->with('course')->get();
                        @endphp
                        @foreach($assign_courses as $item)
                        <tr>
                          <td scope="row">{{ $item->date }}</td>
                          <td scope="row">{{ $item->course->category->name }} {{ ($item->course->levelcourse->name) }}</td>
                          <td scope="row">{{ $item->course->citycourse->city->name }}</td>
                          <td scope="row">{{ $item->course->status }}</td>
                          <td scope="row"><button type="button" class="btn btn-dark btn-sm">Book Now</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @endforeach
              </div>
          </div>

            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  Course Details
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <p>Price</p>
                      <p>Duration</p>
                      <p>Time</p>
                      <p>Class Size (max)</p>
                      <p>Class Size (avg)</p>
                      <p>Reference Materials</p>
                      <p>Training Computer</p>
                      <p>CPD Hours</p>
                      <p>Delivery</p>
                    </div>
                    <div class="col-6" id="myHtmlCode">

                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
          $(document).on("click",'#courseId', function (e) {
            var dataId = $(this).attr("data-id");

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
    
          $.ajax({
              type: 'GET',
              url: "{{ url('/getCourseData') }}"+"/"+dataId,
              data: null,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',
              success: (data) => {
                $('#myHtmlCode').empty();
                $('#myHtmlCode').append(myHtmlCode);
                var myHtmlCode =
                '<p>'+data.data.price+'</p>'+
                '<p>'+data.data.duration+'</p>'+
                '<p>'+data.data.time+'</p>'+
                '<p>'+data.data.class_size_max+'</p>'+
                '<p>'+data.data.class_size_min+'</p>'+
                '<p>'+data.data.reference_material+'</p>'+
                '<p>'+data.data.training_computer+'</p>'+
                '<p>'+data.data.CPD_hour+'</p>'+
                '<p>'+data.data.delivery+'</p>'
                ;
                console.log(data.data.price)
                $('#myHtmlCode').append(myHtmlCode);
              },
          });
    });
    </script>
</main>
@endsection
