<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Berana | Coming soon ...</title>

        <base href="/">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" /> -->

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" />
        <link rel="stylesheet" href="css/app.css" />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" /> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" /> -->

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>


        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpVhQiwAllg1RAFaxMWSpQruuGARy0Y1k&libraries=places"></script>

        <style>
.gradient {
    background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
}
        </style>
    </head>
    <body style="margin: 0 !important;">
        <!-- <nb-layout windowMode> -->
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="bg/mp4/bg.mp4" type="video/mp4" />
        </video>
        <!-- Masthead-->

        <div class="masthead" style="height: 100vh !important; z-index: 90 !important;">
            {{-- <div class="row justify-content-end mr-0" style="z-index: 95 !important;">
                <div class="col-12 justify-content-end mr-0">
                    <div class="button2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        INVESTMENT DECK
                    </div>
                </div>
            </div> --}}
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h2 class="fst-italic lh-1 mb-4 text-center berana">Berana</h2>
                    <div class="d-flex justify-content-center" id="logo">
                        <img src="images/logo-symbol.png" id="logo-symbol" alt="Berana Logo">
                    </div>
                    <h6 class="font-italic font-weight-lighter text-center mb-4 mt-2">... coming soon ...</h6>
                    <p class="mb-5 font-size-1">
                        We're working hard to finish the development of Berana. Sign up below to be one of the first to help us beta test.
                    </p>
                    @if (\App\Models\BetaTester::count() > 300)
                        <div class="card">
                            <div class="card-body py-0">
                                <p class="text-left text-info overflow-auto" style="font-size: small !important;">
                                    We have currently finished the slots for the beta testers. Please come back later
                                </p>
                            </div>
                        </div>
                    @else
                        @if(isset($success) && $success)
                            <p class="mb-5 text-success font-size-1" style="font-weight: lighter !important;">
                                Thank you for being a taking part in this test.
                            </p>
                        @else
                            <form id="form" aria-labelledby="shortlistingForm" method="POST" action="{{ config('app.url') }}">
                                @if(isset($errors))
                                    <p class="error-message" style="font-size: small !important;">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                                <div class="row">
                                    <input size="small" class="form-control form-control-sm mb-4" name="email" id="email" type="email" placeholder="Enter email address..." aria-label="Enter email address..."  autofocus />
                                    <button size="small" class="btn btn-sm btn-primary"  type="submit">Subscribe</button>
                                    <a href="https://view.genial.ly/61e401e91c84d80cf4d99f2f/presentation-berana-pitch-deck" target="_blank" id="m3-c" class="text-center" style="text-decoration-line: none !important;">
                                        <div class="button2 d-flex d-inline-flex">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            INVESTMENT DECK
                                        </div>
                                    </a>
                                </div>
                                {{-- <div class="box"> --}}
                                    {{-- <a href="#m3-o" class="link-1" id="m3-c">Modal 3</a>
                                    <p class="box__info">With Background Full Opacity</p> --}}

                                    {{-- <div class="modal-container" id="m3-o" style="--m-background: var(--global-background);"> --}}
                                      {{-- <div class="modal" style="--m-shadow: 0 0 10rem 0"> --}}
                                        {{-- <h1 class="modal__title">Modal 3 Title</h1>
                                        <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p> --}}
                                        {{-- <div style="width: 100%;" id="m3-o"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1200" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/61e401e91c84d80cf4d99f2f" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div> --}}
                                        {{-- <button class="modal__btn">Button &rarr;</button> --}}
                                        {{-- <button class="modal__btn">Button &rarr;</button> --}}
                                        {{-- <a href="#m3-c" class="link-2"></a> --}}
                                      {{-- </div> --}}
                                    {{-- </div> --}}
                                  {{-- </div> --}}
                                <div class="row">
                                </div>
                                @csrf
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="https://www.facebook.com/profile.php?id=100070065453500"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="https://www.instagram.com/berana_audiobooks/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </body>
</html>
