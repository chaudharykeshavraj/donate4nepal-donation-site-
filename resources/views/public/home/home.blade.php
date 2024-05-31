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
        <img src="{{ asset('frontend/assets/images/home-banner.jpg') }}" alt="Home Banner">
    </image>

</section>

<section>
    <div class="footer">@include('public/template/footer')</div>
</section>


@endsection

@section('script')
@endsection
