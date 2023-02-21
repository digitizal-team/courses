@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
      <form id="level" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Level Name</label>
              <input type="text" class="form-control" name="level" id="level" placeholder="Level">
            </div><br>
            <div class="form-group">
              <input type="submit" class="btn btn-dark text-white" class="form-control" id="submit" >
            </div>
          </form>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
      $(document).on("submit",'#level', function (e) {

      var formData = new FormData(this);
      console.log(formData);

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
          type: 'POST',
          url: "{{ route('level.store') }}",
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