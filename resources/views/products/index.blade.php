@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success " href="{{ route('products.create') }}">create a new product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th style="width: 280px">Action</th>
    </tr>
    {{-- products is the variable holding the database table's data --}}
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            {{-- products here is the name specified in route/wed used to access the webapp its used to link the btns to th controllers --}}
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a href="{{ route('products.show',$product->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>
{{-- $products is a variable holding the database table( products)'s data --}}
{{ $products->links()}}


@endsection