<header class="header-area header-sticky">
    <div class="container-fluid">
        <div class="container-expand">
            <div class="col-12">
                <nav class="main-nav">

                    <ul class="nav">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" width="120 px" alt="Logo">
                        </a>
                        <!-- <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li> -->
                        <li><a href="#top" class="active">HOME</a></li>
                        <li><a href="{{ route('whatwedo') }}">WHAT WE DO</a></li>
                        <li><a href="{{ route('getinvolved') }}">GET INVOLVED</a></li>
                        <li><a href="{{ route('shop') }}">SHOP MERCH</a></li>
                        <li><a href="{{ route('contact') }}">CONTACT</a></li>
                        <li>
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">GIVE CLOTHES</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#giveclothes" aria-controls="giveclothes" aria-expanded="false" aria-label="Toggle navigation">

                            </div>
                        </li>
                        <li>
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">DONATE</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <!-- <span class="navbar-toggler-icon"></span> -->
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> 
</header>
