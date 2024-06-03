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
    <img src="{{ asset('frontend/assets/images/bg.jpg') }}" alt="Home Banner">
     <div class="container">
        <div class="row">
            <div class="fade-in-text">
                <h1>Nonprofit organization championing <span1>textile reuse</span1> to fund sustainable change</h1>
                <p>We are a nonprofit organization collecting used clothes to protect the environment and strengthen communities.</p>
            </div>
        </div>
    </div>
</section>

<section class="mission">
    <div class="span12 widget-span widget-type-cell dnd-column" style data-widget-type="cell" data-x="0" data-w="12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id class="text text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <label class="subheading heading-accent--small-width pe-link">Our Mission</label>
                        <h2 class="heading">
                            <span>
                                Donate 4 Nepal’s mission is to create global
                                <br>
                                environmental and social progress.
                            </span>
                        </h2>
                        <div>
                            <p1>When you donate used clothes and shoes in our yellow bins and solar-powered donation centers, you're not just cleaning out your closet; you're also reducing landfill waste, preserving precious resources like water, reducing pollution and pesticides and helping raise funds for community-led programs that promote education, health and wellness, agricultural sustainability and community development.</p1>
                            <br><br>
                            <p1>Donate or partner with us today. Together, our small steps can have a big impact.</p1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <!-- counter -->
            <div class="col-md-4 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                <img src="{{ asset('frontend/assets/images/cloth-icon.webp') }}" width="90 px" alt="Counter Icon"><br>
                <div class="counter">
                    <span2 class="count-digit">1000</span2>
                    <span2>tons</span2>
                </div>
                <h4 class="count-title">of textiles collected<br>and reused</h4>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-md-4 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                <img src="{{ asset('frontend/assets/images/fund-icon.webp') }}" width="90 px" alt="Counter Icon"><br>
                <div class="counter">
                    <span2>$</span2>
                    <span2 class="count-digit">100</span2>
                    <span2>millions</span2>
                </div>
                <h4 class="count-title">raised to fund<br>community led projects</h4>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-md-4 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                <img src="{{ asset('frontend/assets/images/year-icon.webp') }}" width="90 px" alt="Counter Icon"><br>
                    <div class="counter">
                        <span2 class="count-digit">10</span2>
                        <span2>+ years</span2>
                <h4 class="count-title">collected used<br>textiles for reuse</h4>
            </div>
            <!-- end counter -->
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
