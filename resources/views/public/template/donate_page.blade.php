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
                                <a class="navbar-brand" href="{{ route('donate') }}">DONATE</a>
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

<section class="donate" id="donate">
    <nav class="navbar">
  <button id="openFormBtn">Donate</button>
  <div id="donationForm" class="form-container">
    <span class="close">&times;</span>
    <h2>Donate Now</h2>
    <form id="donationForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="amount">Donation Amount:</label>
      <input type="number" id="amount" name="amount" required>

      <button type="submit" class="donateBtn">Donate</button>
    </form>
  </div>
</nav>
</section>

<script>
// Get the form modal
var formModal = document.getElementById('donationForm');

// Get the button that opens the form
var openFormBtn = document.getElementById("openFormBtn");

// Get the <span> element that closes the form
var closeBtn = formModal.querySelector(".close");

// When the user clicks on the button, open the form
openFormBtn.onclick = function() {
  formModal.style.display = "block";
}

// When the user clicks on <span> (x), close the form
closeBtn.onclick = function() {
  formModal.style.display = "none";
}

// When the user clicks anywhere outside of the form, close it
window.onclick = function(event) {
  if (event.target == formModal) {
    formModal.style.display = "none";
  }
}
</script>

<section>
    <div class="footer">@include('public/template/footer')</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection

@section('script')
@endsection
