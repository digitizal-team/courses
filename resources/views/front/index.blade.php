@extends('front.layouts.app')
@section('content')
<main class="container">

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>
  
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <h6 class="border-bottom pb-2 mb-0">Our Courses</h6>
          <div class="row">
            @foreach($courses as $item)
            <div class="col-3">
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                      <a href="{{ route('course.details',$item->id) }}"><strong class="d-block text-gray-dark">{{ $item->name }}</strong></a>
                    </p>
                </div>
            </div>
            @endforeach
          </div>

          <small class="d-block text-end mt-3">
            <a href="#">All updates</a>
          </small>
        </div>
  
  </main>
@endsection
