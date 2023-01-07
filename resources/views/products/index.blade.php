@extends('layouts.dashNav')

@section('content')

<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<style>
    td
    {
        font-weight: 600;
    }
</style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-4 ">
                <h2>Products</h2>
            </div>
            <hr class="w-25 border border-dark">
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive-sm mt-4">
        <table class="table table-bordered" id="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Title</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price $</th>
                    <th scope="col">Screen Size</th>
                    <th scope="col">Resolution</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
                 @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->ss }}</td>
                <td>{{ $product->resolution }}</td>
                <td>{{ $product->type}}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <div class="btn btn-group btn-sm">
                            <a class="btn btn-outline-info" href="{{ route('products.show', $product->id) }}"><i class="fa fa-eye"
                                aria-hidden="true"></i></a>

                        <a class="btn btn-outline-primary" href="{{ route('products.edit', $product->id) }}"><i
                                class="fas fa-edit    "></i></a>

                        @csrf
                        @method('DELETE')

                        <a type="submit" role="button"class="btn btn-outline-danger"><i class="fa fa-trash"
                                aria-hidden="true"></i></a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
            </thead>
        </table>
    </div>

    {!! $products->links() !!}
@endsection
