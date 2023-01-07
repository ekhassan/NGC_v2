@extends('layouts.dashNav')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <section id="display">
        <div class="container mt-4 ">
            <div class="font-weight-bolder row">
                <h1>Admin Dash Board</h1><br>
            </div>
            <p class="lead"> click on Dashboard</p>
           
        </div>
            </section>
   

@endsection
