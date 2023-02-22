@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Course</th>
                <th scope="col">Level</th>
                <th scope="col">City</th>
                <th scope="col">Total seats</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              
              </tr>
            </thead>
            <tbody>
                @foreach($courses as $item)
                <tr>
                  {{-- @dd( $item->no_of_seats) --}}
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->course->category->name }}</td>
                  <td>{{ $item->course->levelcourse->name }}</td>
                  <td>{{ $item->course->citycourse->city->name }}</td>
                  <td>{{ $item->no_of_seats }}</td>
                  <td>{{ $item->date }}</td>
                  <td>{{ $item->created_at->format('d/m/Y') }}</td>
                  <td style="display: inline-flex">

                    <form action="{{route('assign.edit',$item->id)}}" method="GET">
                      @csrf
                      <button href="" id="edit" class="btn btn-dark">Edit</button> 
                    </form>
                    <form action="{{ route('assign.destroy',$item->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button href="" id="delete"  class="btn btn-danger">Delete</button> 
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

@if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
@endif
//       $(document).on("click",'#delete', function (e) {
//         e.preventDefault();
//         var dataId = $(this).attr("data-id");
//         console.log(dataId)

//       $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//       });

//       $.ajax({
//           type: 'DELETE',
//           url: 'level.destroy/' + $(this).attr("data-id"),
//           data: dataId,
//           cache: false,
//           contentType: false,
//           processData: false,
//           dataType: 'json',
          
//           success: (msg) => {
//               if(msg == true){
//                 toastr.options =
//                 {
//                   "closeButton" : true,
//                   "progressBar" : true
//                 }
//   		          toastr.success("data created successfully");
//               }else{
//                 toastr.options =
//                 {
//                   "closeButton" : true,
//                   "progressBar" : true
//                 }
//   		          toastr.success("something went wrong");
//               }
//           },
//       });
// });


// function deletelevel(id)
//     {
//         location.href = '/level/delete/'+id;
//         alert(id)
//     }
</script>
@endsection