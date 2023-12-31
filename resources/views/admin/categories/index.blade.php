@extends('layouts.admin')

@section('content')
    
<div class="card">
    <div class="card-header">
        <h3>Category List
            <a href="{{route('categories.create')}}" class="btn btn-primary btn-md float-right">
                Create
            </a>
        </h3>     
    </div>
    
    <div class="card-body">
       
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Product Count</th>
                        <th>Image</th>
                        <th>Parent</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->products_count }}</td>
                            <td>
                                @if($category->photo)
                                    <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                        <img src="{{ $category->photo->getUrl() }}" width="30px" height="30px">
                                    </a>
                                @else
                                    <span class="badge badge-warning">No Image</span>
                                @endif
                            </td>
                            <td>{{ $category->parent->name ?? 'Null' }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <div class="btn-group">
                                    
                                    <form onclick="return confirm('Are you sure?');" action="{{ route('categories.destroy', $category->id) }}" method="post">
                                        @csrf 
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection