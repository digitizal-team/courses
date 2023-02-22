@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Created_at</th>
                <th scope="col">Action</th>
              
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->created_at->format('d/m/Y') }}</td>
                  <td style="display: inline-flex">

                    <form action="{{route('category.edit',$item->id)}}" method="GET">
                      @csrf
                      <button href="" id="edit" class="btn btn-dark">Edit</button> 
                    </form>
                    <form action="{{ route('category.destroy',$item->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button href="" id="delete" data-id="{{ $item->id }}" class="btn btn-danger">Delete</button> 
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

</script>
@endsection