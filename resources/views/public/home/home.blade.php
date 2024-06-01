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
    <image id="bg-image">
        <img src="{{ asset('frontend/assets/images/bg-image.jpg') }}" style="opacity:0.65;"  width="1472.8 px"   type="image/jpg" alt="Home Banner">
    </image>
    <div class="image-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h2>Nonprofit organization championing <span style="color:yellow;">textile reuse</span> to fund sustainable change</h2>
                        <p>We are a nonprofit organization collecting used clothes to protect the environment and strengthen communities.</p>

                        <div class="main-button-red">
                            <div class="scroll-to-section"><a href="#contact">Donate Today</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="footer">@include('public/template/footer')</div>
</section>


@endsection

@section('script')
@endsection
