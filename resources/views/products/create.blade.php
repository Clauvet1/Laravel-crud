@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">  
        <div class="pull-left">
            <h2>Add next product</h2>
        </div>
        <div class=" text-center">
            <a class="btn btn-primary " href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your inputs. <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group">
                <strong>Name:</strong>
                <div class="div"><input type="text" name="name" placeholder="Name" class="control-form w-100 p-2 mt-3"></div>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group mt-3">
                <strong>Detail:</strong>
                <textarea class="form-control mt-3" placeholder="Details" name="detail" style="height:150px"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-12 text-center">
           <button class="btn btn-primary mt-2">
            Submit
           </button>
        </div>
    </div>
</form>

@endsection