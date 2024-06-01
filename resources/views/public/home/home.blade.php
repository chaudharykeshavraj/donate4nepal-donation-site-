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
<section class="section main-banner" id="top" data-section="section1">
     <div class="container">
        <div class="row">
            <div class="col">
                <div class="image-container">
                    <img src="{{ asset('frontend/assets/images/bg-image.jpg') }}" width="1472.8" height="auto" alt="Home Banner">
                    <div class="fade-in-text">
                        <h1>Nonprofit organization championing <span1>textile reuse</span1> to fund sustainable change</h1>
                        <p>We are a nonprofit organization collecting used clothes to protect the environment and strengthen communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    
</section>

<section>
    <div class="footer">@include('public/template/footer')</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection

@section('script')
@endsection
