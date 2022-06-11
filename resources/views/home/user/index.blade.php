@extends('layouts.nosliderfrontbase')

@section('title','User Panel')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">User Panel</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Panel</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            @include('home.user.usermenu')
              <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    @include('user.profile')
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

@endsection