<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    @yield('site_title')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-edu-meeting.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css"') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom_header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom_home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/counter.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" rel=""stylesheet>
    <link href="{{ asset('frontend/assets/js/gmap.js') }} rel="stylesheet">
    {{-- <link href="{{ asset('frontend/assets/js/form.js') }} rel="stylesheet"> --}}

    @yield('meta_data')
    @yield('css')
  </head>
