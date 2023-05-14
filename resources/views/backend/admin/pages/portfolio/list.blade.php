@extends('backend.admin.layout.master')
@section('page_title', 'Portfolio List')
@section('content')
    
<div class="container ">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="card-body ">
                    <table class="table-bordered table ">
                      
                        <thead class="table-dark">
                            <H4 class="text-center  m-2 ">Portfolio List</H4>
                            <tr class="text-center">
                                <th>SI</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($portfolios as $portfolio )
                            <tr class="">
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>
                                    <img src="{{ asset('/backend/admin/assets/portfolio/'.$portfolio->image) }}" height="80" width="80" >
                                </td>
                                <td>{{ $portfolio->project_name }}</td>
                                <td>{{ $portfolio->description }}</td>
                                <td>
                                    <a href="{{ route('portfolio.edit',$portfolio->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('portfolio.delete',$portfolio->id) }}" class="btn btn-sm btn-danger "onclick="return confirm('Are You Sure ?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                   
                </div>
                {{ $portfolios->links() }}
            </div>
        </div>
    </div>
</div>

@endsection()