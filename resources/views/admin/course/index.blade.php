@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Course Name</th>
                <th scope="col">Level</th>
                <th scope="col">Start date</th>
                <th scope="col">Delivery</th>
                <th scope="col">Level</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              
              </tr>
            </thead>
            <tbody>
                @foreach($courses as $item)
                <tr>
                <td scope="row">{{ $item->id }}</td>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row">{{ $item->level_id }}</td>
                <td scope="row">{{ $item->start_date }}</td>
                <td scope="row">{{ $item->delivery }}</td>
                <td scope="row">{{ $item->levelcourse->name }}</td>
                <td scope="row">{{ $item->status }}</td>
                
                <td style="display: inline-flex">
                <form action="{{route('course.edit',$item->id)}}" method="GET">
                    @csrf
                    <button href="" id="edit" class="btn btn-dark">Edit</button> 
                </form>
                <form action="{{ route('course.destroy',$item->id) }}" method="POST">
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
@endsection