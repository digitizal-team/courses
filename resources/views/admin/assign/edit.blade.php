@extends('admin.layouts.app')
@section('content')
<div class="row">
{{-- @dd($courses[3]->id,$assign_course->course_id) --}}
    <div class="col-xl-12 col-md-12">
      <form id="formsubmit" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Course</label>
              <select class="form-control" name="course" id="course">
                @foreach($courses as $item)
                <option value="{{ $item->id }}" {{ $item->id == $assign_course->course_id ? 'selected' : '' }}>{{ $item->category->name }} ({{ $item->levelcourse->name }})</option>
                @endforeach
              </select>
            </div><br>
            <div class="form-group">
              <label for="exampleFormControlInput1">City</label>
              <select class="form-control" name="city" id="city">
                @foreach($cities as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </div><br>
            <div class="form-group">
              <label for="exampleFormControlInput1">Total seats</label>
              <input type="number" class="form-control" value="{{ $assign_course->no_of_seats }}" name="seats" id="seats" placeholder="Seat">
            </div><br>
            <div class="form-group">
              <label for="exampleFormControlInput1">Date</label>
              <input type="date" class="form-control" name="date" value="{{ $assign_course->date }}" id="date" placeholder="date">
            </div><br>
            <div class="form-group">
              <input type="submit" class="btn btn-dark text-white" class="form-control" id="submit" >
            </div>
          </form>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
      $(document).on("submit",'#formsubmit', function (e) {

      var formData = new FormData(this);
      console.log(formData);

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
          type: 'POST',
          url: "{{ route('assign.store') }}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: (msg) => {
              if(msg == true){
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
  		          toastr.success("data created successfully");
              }else{
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
  		          toastr.success("something went wrong");
              }
          },
      });
});
</script>
@endsection