<footer>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <button onclick="topFunction()" id="myBtn" title="Go to top">
                        <img src="{{ asset('frontend/assets/images/arrow-up.png') }}" width="50 px" alt="Arrow Up">
                    </button>
                    <script>
                        // Get the button:
                        let mybutton = document.getElementById("myBtn");

                        // When the user scrolls down 20px from the top of the document, show the button
                        window.onscroll = function() {scrollFunction()};

                        function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            mybutton.style.display = "block";
                        } else {
                            mybutton.style.display = "none";
                        }
                        }

                        // When the user clicks on the button, scroll to the top of the document
                        function topFunction() {
                        document.body.scrollTop = 0; // For Safari
                        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                        }
                    </script>
                    <div class="col-lg-10 col-md-20 col-sm-20">
                        <div class="footer-widget">
                            <h3 class="footer-title">About Us</h3>
                            <p style="text-align:justify;">Our mission is to provide a platform for people to donate clothes to the less fortunate. We believe that everyone deserves to have clothes on their back and we are here to make that happen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" style="padding-left:50px">
                    <div class="footer-widget">
                        <h3 class="footer-title">Useful Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('whatwedo') }}">What We Do</a></li>
                            <li><a href="{{ route('getinvolved') }}">Get Involved</a></li>
                            <li><a href="{{ route('shop') }}">Shop Merch</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Follow Us</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span5>Shankhamul, Kathmandu</span5>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span5>+977-9876543210</span5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <p style="text-align: center">Copyright © {{ date('Y') }}. All Rights Reserved.</p>
</footer>

