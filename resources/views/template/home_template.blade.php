<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="best coaching institute in kolata jee neet" content="HTML, CSS, JavaScript">
    <meta
        name=" #coaching institute #Class 8-12 all subjects | ICSE,ISC,CBSE,WB | Special class for JEE,NEET,B.SC NURSING,PHARMACY,PYTHON, JAVA |"
        content="Free Web tutorials for HTML and CSS">
    <meta name="UJJAL MONDAL" content="John Doe">
    <link rel="icon" href="{{ asset('img/logo.jpeg') }}" />
    <!-- csslink -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/location.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- csslink -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- bootstrap -->
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- font -->
    <!-- icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- icon -->

    <!--Animate CSS-->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--BootNavbar CSS-->
    <link rel="stylesheet" href="css/css/bootnavbar.css">

    <!--BootNavbar Js-->
    <script src="css/js/bootnavbar.js"></script>

    <title>STUDY POINT LIVE</title>
    <style>
        #loader {
            background: #fff url(https://miro.medium.com/max/1400/1*CsJ05WEGfunYMLGfsT2sXA.gif) no-repeat center;
            background-size: 50%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }

        .close {
            top: 3px;
            left: 97%;
            font-weight: bold;
            font-size: 23px
        }

        @media (max-width:735px) {
            .close {

                left: 93%;

            }
        }

    </style>
</head>

<body>

    @if ($message = Session::get('success'))
        <div class="alert alert-success fixed-top w-25 " style=" ">
            <p>{{ $message }}</p>
            <button type="button" class="close fixed-top " data-dismiss="alert">X</button>

        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger fixed-top w-100" style=" ">

            <p class="text-danger" style="   ">{{ $message }}</p>
            <button type="button" class="close fixed-top" data-dismiss="alert">X</button>

        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger fixed-top w-100 ">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close fixed-top" data-dismiss="alert">X</button>
        </div>
    @endif

    <div id="loader"></div>
    <div class="map">
        <a href="https://goo.gl/maps/fhpcaTWL6ofaKPRQ7" target="_blank">
            <img src="{{ asset('img/map.png') }}" width="55px" alt="">
        </a>
    </div>

    <div class="call">
        <a href="tel:+918621012998" target="_blank">
            <img src="{{ asset('img/call.png') }}" width="50px" alt="">
        </a>
    </div>

    <div class="whatapp">
        <a href="https://wa.me/+918621012998" target="_blank">
            <img src="{{ asset('img/whatapp.png') }}" width="50px" alt="">
        </a>
    </div>
    <div class="map">
        <a href="https://goo.gl/maps/fhpcaTWL6ofaKPRQ7" target="_blank">
            <img src="{{ asset('img/map.png') }}" width="55px" alt="">
        </a>
    </div>

    <div class="call">
        <a href="tel:+918621012998" target="_blank">
            <img src="{{ asset('img/call.png') }}" width="50px" alt="">
        </a>
    </div>

    <div class="whatapp">
        <a href="https://wa.me/+918621012998" target="_blank">
            <img src="{{ asset('img/whatapp.png') }}" width="50px" alt="">
        </a>
    </div>
    <!-- head -->

    <div class="d-flex">
        <div class="first_logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/logo.jpeg') }}" class="" alt="logo">
        </div>
        <div class="first_intro">
            <h1 class="ms-3 mb-0 mt-2">STUDY POINT LIVE</h1>
            <p class="ms-3  " style="padding-bottom: 5px;">Class 8-12 all subjects | ICSE,ISC,CBSE,WB | Special
                class for JEE,NEET,B.SC
                NURSING,PHARMACY,PYTHON, JAVA |
            </p>
        </div>
        <!-- <div class="last_logo">
            <img src="img/omm.jpg" class="" alt="logo">
        </div> -->
    </div>

    <!-- head -->

    <!-- navigation bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
        <div class="container-fluid ">
            <form class="d-flex  omm">
                <img src="{{ asset('img/omm.jpg') }}" style="width: 45px;" alt="">
            </form>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler " style="box-shadow: none;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ms-auto NAVBAR">
                    <li class="nav-item">
                        <a class="nav-icon active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>


                    @php
                        
                        $notice_no = $notice->count();
                    @endphp


                    @if ($notice_no != 0)
                        <li class="nav-item dropdown ">
                            <a class="nav-icon dropdown-toggle notice" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                NOTICE <span id="point" style="background: #09d1bf;
    border: 1px solid black;
    padding: 4px 7px;
    border-radius: 11px;
    font-weight: bold;
    margin-left: 9px;">{{ $notice_no }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <div style="width: 16rem;color: #4f9f13;">

                                        @foreach ($notice as $notice)
                                            <div class="d-flex">
                                                <img src="{{ asset('img/maillogo.png') }}"
                                                    style="width:20px;height: 25px;" alt="">
                                                <p class="mb-0" style="font-size: 13px;
    margin-left: 24px;">{{ $notice->class }} , {{ $notice->board }} , {{ $notice->course }} ,
                                                    {{ $notice->subject }} : {{ $notice->notice }}</p>
                                            </div>
                                            <span class="me-auto"
                                                style="margin-left: 143px;">{{ $notice->time }}</span>
                                            <hr class="w-100 my-3">
                                        @endforeach

                                    </div>
                                </li>



                            </ul>
                        </li>




                    @else

                        <li class="nav-item">
                            <a class="nav-icon" href="#">NOTICE</a>
                        </li>

                    @endif







                    <li class="nav-item">
                        <a class="nav-icon" href="{{ route('location') }}">Location</a>
                    </li>


                    @if (Route::has('login'))
                        @auth
                            @if (session()->has('admission'))
                                @if ($user->approved == 1)
                                    <li class="nav-item dropdown ">
                                        <a class="nav-icon dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            EXAM PORTAL ({{ $user->course }})
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @if ($user->exam != 0)
                                                <li><a class="dropdown-item"
                                                        href="{{ route('question') }}">{{ $exam?->subject }}</a></li>
                                            @endif



                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-icon" href="#">EXAM PORTAL [<span
                                                style="color: red;font-weight: bold; ">Not Approved</span>]</a>
                                    </li>
                                @endif
                            @else

                                <li class="nav-item">
                                    <a class="nav-icon" href="{{ route('admission') }}">EXAM PORTAL</a>
                                </li>

                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-icon" style="color: grey;" href="{{ route('register') }}">EXAM
                                    PORTAL</a>
                            </li>

                        @endauth
                    @endif



                    @if (Route::has('login'))
                        @auth

                            <x-app-layout>

                            </x-app-layout>


                        @else
                            <li class="nav-item dropdown ">
                                <a class="nav-icon dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-lock"></i> Login
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('register') }}">sign in</a></li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>


                                </ul>
                            </li>
                        @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-icon" style="color: green;" href="#">| MENU |</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- navigation bar -->

    @yield('content')



    <!-- footer -->
    <section id="footer">

        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit our Institute today</h1>
        </div>

        <div class="footer-row">
            <img src="{{ asset('img/edu.png') }}" alt="" class="footer-img">
            <div class="footer-left">
                <h1>Opening hours</h1>
                <p> <i class="fa fa-clock-o"></i>Sunday to Saturday - 7am to 9pm</p>
            </div>
            <div class="footer-right">
                <h1>Get in touch</h1>
                <p>Gopalpur, CMDA water tank,Kolkata-700143 <i class="fa fa-map-marker"></i> </p>
                <p>ujjalmondal130@gmail.com <i class="fa fa-envelope-o"></i></p>
                <p>+91 8621012998 <i class="fa fa-phone"></i></p>
            </div>
        </div>

        <div class="social-links">

            <a href="https://www.facebook.com/STUDY-POINT-LIVE-101005175660539/"> <i class="fa fa-facebook"></i></a>
            <a href=""> <i class="fa fa-instagram"></i></a>
            <a href=""> <i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-youtube-play"></i></a>
            <p>copyright study point youtube channel</p>

        </div>

    </section>

    <script src="{{ asset('jquery.js') }}"></script>

    <script>
        $(document).on("click", ".notice", function() {
            $("#point").hide();
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("div.alert").remove();
            }, 2500)
        });
    </script>
    <script>
        var loader = document.getElementById("loader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <script src="{{ asset('typed.min.js') }}"> </script>
    <script>
        var typed = new Typed('.main_heading', {
            strings: ['Hello students', 'Welcome to STUDY POINT LIVE', 'Lets create a bright future'],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true,
        });
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000,
        });
    </script>

    <script type="{{ asset('text/javascript') }}">
        $(function() {
                $("#bootnavbar").bootnavbar();
            });
        </script>




</body>

</html>
