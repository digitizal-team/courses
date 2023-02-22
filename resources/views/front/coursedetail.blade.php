@extends('front.layouts.app')
@section('content')
<main class="container">



    <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              {{-- @dd($courses) --}}
                @foreach($courses as $item)
                <li class="nav-item" role="presentation">
                  <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#home{{ $item->id }}" type="button" role="tab" aria-controls="home" aria-selected="true">{{ $item->levelcourse->name }}</button>
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
        </div>
    </section>



</main>
@endsection
