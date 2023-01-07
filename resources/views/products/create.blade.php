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
            <h2>Add New Product</h2>
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
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">

                    <input type="text" name="code"  placeholder="Code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">
                    
                    <input type="text" name="title" placeholder="Tile of product">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">
                    
                    <input type="text" name="brand"  placeholder="Brand of Product">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">
                    
                    <input type="text" name="price"  placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">
                   
                    <input type="text" name="ss"  placeholder="Screen size(Only for Displays in Inches)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">
                    
                    <input type="text" name="resolution" placeholder="Screen resolution(Only for Displays in W X H)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <div class="form-group">

                    <input type="text" name="type"  placeholder="Product type">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
                <div class="form-group">
                    
                    <input type="file" name="image" placeholder="Image of Product">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn bttn btn-outline-dark mt-5 mb-5 shadow w-25">Submit <i class="fa-solid fa-arrow-up-from-bracket ml-2"></i></button>
            </div>
        </div>
         
    </form>
</div>
@endsection