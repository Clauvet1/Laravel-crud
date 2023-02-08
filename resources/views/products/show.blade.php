@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">  
        <div class="pull-left">
            <h2>View product</h2>
        </div>
        <div class=" text-center">
            <a class="btn btn-primary " href="{{ route('products.index') }}">Back</a>
        </div>
    </div> 
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <div class="form-group mt-3">
            <strong>Detail: </strong>
          {{ $product->detail }}
        </div>
    </div>
</div>


@endsection