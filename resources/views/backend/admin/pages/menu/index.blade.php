@extends('backend.admin.layout.master')
 @section('page_title','')
 @section('content')
 <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Menu List</h4>
                <a href="{{ route('menus.create') }}"><button class="btn btn-success btn-sm m-0 addmanu"> Add Menu</button></a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr class="text-center">
                        <th>SL</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Created_At</th>
                        <th>Updated_At</th>
                        <th>Action</th>
                  </thead>
                  <tbody>
                    @foreach ($allMenus as $row )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->slug}}</td>
                        <td>
                           @if ($row->status==0)
                             <span class="text-danger">Unpublish</span>
                           @else
                           <span class="text-primary">Publish</span>
                           @endif

                        </td>
                        <td>{{$row->created_at->toFormattedDateString()}}</td>
                        {{-- <td>{{$row->updated_at->toFormattedDateString()}}</td> --}}
                        {{-- custom Date Function --}}
                        <td>{{\carbon\carbon::parse($row->updated_at)->format('d/m/y')}}</td>
                        <td>
                            <a href="{{route('menus.edit',$row->id)}}"class="btn btn-outline-info btn-sm">Edit</a>
                            <a href="{{route('menu.delete',$row->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

 @endsection
