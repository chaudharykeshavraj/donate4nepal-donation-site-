<?php
use App\Models\User;
$cmsObj = new User();
?>
@extends('public.template.main_template')
@section('site_title')
    <title>{!! config('app.name') !!}</title>
@endsection

@section('meta_data')
@endsection

@section('css')
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/contact.css') }}">

<header class="header-area header-sticky">
    <div id="container-fluid">
        <div class="container-expand">
            <div class="col-12">
                <nav class="main-nav fixed-top">
                    <div class="navbar-left">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" left="20%" width="120 px" alt="Logo">
                        </a>
                    </div>

                    <div class="navbar-center">
                        <ul class="nav">
                            <!-- <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li> -->
                            <li>
                                <a href="{{ route('home') }}" class="active">HOME</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#home" aria-controls="home" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li>
                                <a href="{{ route('whatwedo') }}">WHAT WE DO</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#whatwedo" aria-controls="whatwedo" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li>
                                <a href="{{ route('getinvolved') }}">GET INVOLVED</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#getinvolved" aria-controls="getinvolved" aria-expanded="false" aria-label="Toggle navigation">
                                </li>
                            <li>
                                <a href="{{ route('shop') }}">SHOP MERCH</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#shopmerch" aria-controls="shopmerch" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li>
                                <a href="#contact" "{{ route('contact') }}">CONTACT</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contact" aria-controls="contact" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-right">
                        <ul class="nav">
                            <li>
                                <a class="navbar-brand" href="#">GIVE CLOTHES</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#giveclothes" aria-controls="giveclothes" aria-expanded="false" aria-label="Toggle navigation">
                            </li>
                            <li>
                                <a class="navbar-brand" href="#">DONATE</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <!-- <span class="navbar-toggler-icon"></span> -->
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
            <div class="row">
                <div class="col-lg-12">
                {{ Html()->Form('POST', route('contact.action'))->id('contact')->class('')->open() }}
                    <div class="row">
                    <div class="col-lg-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-lg-4">
                        <h4>Your Name</h4>
                        <fieldset>
                            <input name="name" type="text" id="name" placeholder="YOURNAME...*" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <h4>Email Address</h4>
                        <fieldset>
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <h4>Subject</h4>
                        <fieldset>
                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                        </fieldset>
                    </div>
                    </div>
                {{ Html()->Form()->close() }}
                </div>
            </div>
            </div>
        <div class="col-lg-3">
            <div class="right-info">
                <ul>
                    <li>
                        <h6>Phone Number</h6>
                        <span>9876543210</span>
                    </li>
                    <li>
                        <h6>Email Address</h6>
                        <span>info@donate4nepal.org</span>
                    </li>
                    <li>
                        <h6>Street Address</h6>
                        <span>Shankhamul, Kathmandu 44600, Nepal</span>
                    </li>
                    <li>
                        <h6>Website</h6>
                        <span>donate4nepal.org</span>
                    </li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</section>


<section>
    <div class="footer">@include('public/template/footer')</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection

@section('script')
@endsection
