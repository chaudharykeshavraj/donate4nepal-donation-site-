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

<section>
    <div class="header">@include('public/template/header')</div>
</section>

<section class="giveclothes" id="giveclothes">
    <form method="post" action="{{ route('donate.submit') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <select id="name" name="name" class="form-control" required>
            <option value="">Select Name</option>
            <option value="pants">Pants</option>
            <option value="shirts">Shirts</option>
            <option value="windcheater">Windcheater</option>
        </select>
    </div>
    <div class="form-group">
        <label for="dropoff_location">Drop-off Location:</label>
        <select id="dropoff_location" name="dropoff_location" class="form-control" required>
            <option value="">Select Drop-off Location</option>
            <option value="location1">Location 1</option>
            <option value="location2">Location 2</option>
            <option value="location3">Location 3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Donate</button>
</form>

</section>

<section>
    <div class="footer">@include('public/template/footer')</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection

@section('script')
@endsection
