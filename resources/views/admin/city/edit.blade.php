@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <form id="city" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">City Name</label>
              <input type="text" class="form-control" value="{{ $city->name }}" name="name" id="name" placeholder="City">
            </div><br>
            <div class="form-group">
              <button type="submit" class="btn btn-dark text-white" class="form-control" id="submit" >submit</button>
            </div>
        </form>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
      $(document).on("submit",'#city', function (e) {

      var name = $('#name').val()


      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
          type: 'PATCH',
          url: "{{ route('city.update',$city->id) }}",
          data: {
            name : name,
          }, 
          dataType: 'json',
          success: (msg) => {
              if(msg == true){
                toastr.options =
                {
                  "closeButton" : true,
                  "progressBar" : true
                }
  		          toastr.success("data edited successfully");
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