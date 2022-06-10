@extends('layouts.nosliderfrontbase')


@section('head')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection


@section('title', "FAQs")

@section('content')
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">FAQs</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">FAQs</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Frequently Asked Questions</span></h2>
        </div>
        
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="accordion" @php $i=1 @endphp>
                    
                    @foreach($datalist as $data)

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse{{$i}}">
                            {{$data->question}}
                            </a>
                        </div>
                        <div id="collapse{{$i}}" class="collapse @once show @endonce" data-parent="#accordion">
                            <div class="card-body">
                            {!! $data->answer !!}@php $i++ @endphp
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection