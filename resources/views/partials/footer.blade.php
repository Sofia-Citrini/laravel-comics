{{-- inserisco il footer
    che succesivamente inlcuderó nel mio layout --}}

    <footer>
        <div class="container">
    
            <div class="row">
                <div class="col-4 py-3">
                    <div class="row">
                        <div class="col col-md-4 d-flex flex-column justify-content-between">
                            <div>
                                <h6>DC COMICS</h6>
                                <ul class="footer-link">
                                    <li><a href="#">Characters</a></li>
                                    <li><a href="#">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>

                            <div>
                                <h6>SHOP</h6>
                                <ul class="footer-link">
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <h6>DC</h6>
                            <ul class="footer-link">
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy policy (New)</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshop</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="col col-md-4">
                            <h6>SITIES</h6>
                            <ul class="footer-link">
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-8 img-footer">
                    <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
        @include("partials.footerBanner")
    </footer>