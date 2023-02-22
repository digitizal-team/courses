@extends('admin.layouts.app')
@section('content')
<div class="row">


    <div class="col-xl-12 col-md-12">
      <form id="formsubmit" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
        @csrf
        @method('PUT')
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Category</label>
                <select  class="form-control" id="category" name="category" placeholder="Select category">
                  @foreach($categories as $item)
                  <option value="{{ $item->id }}" {{ $item->name == $course->category->name ? 'selected' : '' }}>{{ $item->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Level</label>
                <select  class="form-control" id="level" name="level"  placeholder="Select level">
                  @foreach($levels as $item)
                  <option value="{{ $item->id }}" {{ $course->levelcourse->name == $item->name ? 'selected' : '' }}>{{ $item->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            {{-- <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">City</label>
                <select  class="form-control" id="city" name="city[]"  placeholder="Select city" multiple>
                  @foreach($cities as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
                </select>
              </div>
            </div> --}}
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Start date</label>
                <input type="date" class="form-control" id="sdate" value="{{ $course->start_date }}" name="sdate" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">End date</label>
                <input type="date" class="form-control" value="{{ $course->end_date }}" id="edate" name="edate" placeholder="">
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="number" class="form-control" id="price" value="{{ $course->price }}" name="price" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Duration</label>
                <input type="number" class="form-control" id="duration" value="{{ $course->duration }}" name="duration" placeholder="">
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Time</label>
                <input type="time" class="form-control" id="time" value="{{ $course->time }}" name="time" placeholder="">
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">class size (max)</label>
                <input type="number" class="form-control" id="maxsize" value="{{ $course->class_size_max }}" name="maxsize" placeholder="">
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">class size (min)</label>
                <input type="number" class="form-control" id="minsize" value="{{ $course->class_size_min }}" name="minsize" placeholder="">
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Reference materials</label>
                <input type="text" class="form-control" id="rmaterials" value="{{ $course->reference_material }}" name="rmaterials" placeholder="">
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Training computer</label>
                <input type="text" class="form-control" id="tcomputer" value="{{ $course->reference_material }}" name="tcomputer" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">CPD Hours</label>
                <input type="text" class="form-control" id="cpdhour" name="cpdhour" value="{{ $course->CPD_hour }}" placeholder="">
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Delivery</label>
                <input type="text" class="form-control" id="delivery" value="{{ $course->delivery }}" name="delivery" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <select class="form-control" id="status" name="status"  placeholder="">
                  <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Active</option>
                  <option value="0" {{ $course->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-3 mt-4">
            <div class="form-group">
              <input type="submit" class="btn btn-dark text-white" class="form-control" id="submit" >
            </div>
          </div>
          </form>
    </div>
</div>

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
      url: "{{ route('course.update',$course->id) }}",
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