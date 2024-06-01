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
                                <a href="#top" class="active">HOME</a>
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
                                <a href="{{ route('contact') }}">CONTACT</a>
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
