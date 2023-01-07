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
            <h2>Show Product</h2>
        </div>
        <hr class="w-25 border border-dark">
    </div>
</div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: &ensp; &ensp;</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code: &ensp; &ensp;</strong>
                {{ $product->code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:&ensp; &ensp;</strong>
                {{ $product->brand }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price: &ensp; &ensp;</strong>
                {{ $product->price }} $
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Screen Size:&ensp; &ensp;</strong>
                {{ $product->ss }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Screen Resolution:&ensp; &ensp;</strong>
                {{ $product->resoluiton }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type: &ensp; &ensp;</strong>
                {{ $product->type }}
            </div>
        </div>
        <hr class="mx-auto border border-dark">
        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:&ensp; &ensp;</strong>
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection