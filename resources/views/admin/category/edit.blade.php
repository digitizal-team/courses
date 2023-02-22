@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <form id="formsubmit" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Category Name</label>
              <input type="text" class="form-control" value="{{ $category->name }}" name="name" id="name" placeholder="Category">
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

        var name = $('#name').val();


      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
          type: 'PATCH',
          url: "{{ route('category.update',$category->id) }}",
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