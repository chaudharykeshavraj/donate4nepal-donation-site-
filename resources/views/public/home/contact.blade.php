@extends('public.template.main_template')
@section('site_title')
    <title>{!! config('app.name') !!}</title>
@endsection

@section('meta_data')
@endsection

@section('css')
@endsection

@section('content')
@include('public/template/contact_page')


@endsection

@section('script')
@endsection
