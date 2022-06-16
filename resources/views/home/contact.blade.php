@extends('layouts.nosliderfrontbase')

@section('title', "Contact Us")

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success">@include("home.message")</div>
                    <form action="/storemessage" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">{{$data->company}}</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Option One </h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$data->address}}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$data->email}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$data->phone}}</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Option Two</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$data->address}}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$data->email}}</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$data->phone}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection