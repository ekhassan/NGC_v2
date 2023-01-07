@extends('layouts.dashNav')
@section('content')
<div class="row">
    <div class="col-lg-8 margin-tb mt-3 mb-3">
        <div class="pull-left">
            <div class="pull-right">
                <a class="btn bttn btn-outline-dark shadow w-25" href="{{ route('products.index') }}"><i class="fa-solid fa-caret-left"></i> Back</a>
            </div>
        </div>
    </div>
    <div class="col-lg-12 margin-tb mt-5 mb-3">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <hr class="w-25 border border-dark">
    </div>
</div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
         
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $product->name }}" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Code:</strong>
                        <input type="text" name="code" value="{{ $product->code }}" placeholder="Product Code">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" value="{{ $product->title }}" placeholder="Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>brand:</strong>
                        <input type="text" name="brand" value="{{ $product->brand }}" placeholder="Brand">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="text" name="price" value="{{ $product->price }}" placeholder="Price">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Screen Size:</strong>
                        <input type="text" name="ss" value="{{ $product->ss }}" placeholder="Screen Size">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Resolution:</strong>
                        <input type="text" name="resolution" value="{{ $product->resolution }}" placeholder="Screen Resolution">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>type:</strong>
                        <input type="text" name="type" value="{{ $product->type }}" placeholder="Product Type">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" placeholder="image">
                        <img src="/images/{{ $product->image }}" width="300px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn bttn btn-outline-dark mt-5 mb-5 shadow w-25">Update <i class="fa-solid fa-arrows-rotate"></i></button>
                </div>
            </div>
         
        </form>
    </div>
@endsection