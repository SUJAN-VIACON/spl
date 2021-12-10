

@extends('template.home_template')
@section('content')
<!-- carasol -->

<div id="carouselExampleIndicators" class="carousel slide position-relative" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <section class="header1"> </section>
        </div>
        <div class="carousel-item">
            <section class="header2"> </section>
        </div>
        <div class="carousel-item">
            <section class="header3"></section>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <section class="headerr position-absolute">



        <div class="text-box">
            <div class="logo_heading">

                <h1><span class="main_heading"></span></h1>
            </div>

            <p>Beginning of a new era..........
            </p>
            <p>CONTACT: 8621012998 / 7003946614
            </p>
            <div class="banner-btn">
                <a href="{{route('admission')}}"><span></span>Admission</a>
                <a href="https://www.facebook.com/STUDY-POINT-LIVE-101005175660539/"><span></span>Read More</a>
            </div>
        </div>
    </section>

</div>

<!-- carasol -->

<!-- features -->
<section id="feature">
    <div class="title-text">
        <p>FEATURES</p>
        <div style="display: flex; justify-content: center; align-items: center;">
            <h1>Why choose <h1 style="color: rgba(241, 16, 16, 0.945);"> "US"</h1>
        </div>

        </h1>
    </div>
    <div class="feature-box">
        <div class="features" data-aos="fade-right">
            <h1>Teaching faculty</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-shield"></i>
                </div>
                <div class="feature-text ">
                    <p>Organised by Ujjal Mondal (M.Tech, NIT Durgapur)
                        and variuos experienced teachers are here to counsile and guide the students. We are
                        dedicated to give a <span style="font-weight: bold; font-size:15px;">BRIGHT</span> future to each aspirant.
                    </p>
                </div>
            </div>

            <h1>Online admision</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-check-square-o"></i>
                </div>
                <div class="feature-text">
                    <p>Give your full details to take the admission from class 8 to 12 of all boards for all
                        subjects of arts and science group and be the part of Study Point Live. We provide special
                        classes for JEE and NEET and online test series. One can apply for test series only and can
                        check your prepoaration level. After submission the paper, answer sheet will be delivered in
                        your mail id.</p>
                </div>
            </div>

            <h1>Affordable cost</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-inr"></i>
                </div>
                <div class="feature-text">
                    <p>We are here to give you the best service at reasonable price.</p>
                </div>
            </div>
        </div>

        <div class="features-img" data-aos="flip-left">
            <img src="{{asset('img/dada.jpg')}}" alt="">
        </div>
    </div>
</section>
<!-- features -->

<!--  gallery -->
<section id="feature">
    <div class="title-text">
        <p>GALLERY </p>
        <h1></h1>
    </div>

    <section id="most-visited">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">


                        @foreach($gallery as $gallery)
                        <div class="item col-md-12 px-3" data-aos="flip-right">
                            <div class="visited-item" data-aos="flip-right">
                                <img src="{{asset('image/'.$gallery->image.'')}}" alt="">
                                <div class="text-content">
                                    <h4></h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
 


                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<!--  gallery -->

<!-- best student -->
<section id="feature">
    <div class="title-text" style="padding-bottom: 10px;">
        <p>TOP GRADE STUDENT</p>
        <h1>Best student of 2021</h1>
    </div>
    <section class="my-5 bg-light pt-5 pb-5">


        <div class="container service">
            <div class="row my-5">

                @foreach($student as $student)
                <div class="col-md-4 col-10 col-xxl-4 mx-auto ">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row" data-aos="flip-left">
                            <div class="col-md-4">
                                <img src="{{asset('image/'.$student->image.'')}}" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$student->head1}}</h5>
                                    <p class="card-text">{{$student->head2}}</p>
                                    <p class="card-text">Roll No. :{{$student->head3}}</p>
                                    <p class="card-text">Category Rank : {{$student->head4}}</p>
                                    <p class="card-text"> {{$student->head5}}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach


                  
                  


            </div>
        </div>
    </section>
</section>

<!-- best student -->
<!-- SERVICES -->



<!-- SERVICES -->

<!-- testimonial -->
<section id="testimonial">

    <div class="title-text">
        <p>TESTIMONIAL</p>
        <h1>what our student says</h1>
    </div>
    <div class="testimonial-row">
        @foreach($comment as $comment)
        <div class="testimonial-col">
            <div class="user">
                <img src="{{asset('img/maillogo.png')}}" alt="">
                <div class="user-info">
                    <h4>{{$comment->name}} <i class="fa fa-envelope-o"></i></h4>
                    <small>{{$comment->mail}} </small>
                </div>
            </div>
            <p>
                {{$comment->queries}}
            </p>
        </div>
        @endforeach
      
        
    </div>

</section>
<!-- testimonial -->
<!-- model -->
<section class="main_heading my-5  py-2  offer_style">

    <div class="container-fluid">
        <div class="row ">
            <div class="col-xxl-12 col-12 py-5 text-center ">
                <h2 class="text-white" style="font-size: calc(1.325rem + .9vw);margin-bottom: .5rem; line-height: 1.2;"> checkout our video </h2>
                <p>Every class's video is uploaded on our youtube chanel 'STUDY POINT LIVE'.click the below button and check our videos
                </p>
                <div class="col-xxl-12 text-center mt-5 ">
                    <button type="button" class="btn btn-outline-light  " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-arrow-circle-right" style="width: 25px;"></i>check videos</button>
                </div>

            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                YOU WILL BE REDIRECT TO OUR YOUTUBE CHANEL .WE HOPE OUR CONTENT REALLY HELP YOU TO GROW.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="https://www.youtube.com/channel/UCrL-CRdJrfNWHbkSenCrRUw">
                    <button type="button" class="btn btn-primary">CHECK OUT</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- model -->
<!-- form -->

<section class="my-5  ">
    <div class="text-center">

        <h1 class="display-4 ">Comment us</h1>
        <p>Write your opinion about our Institution</p>
       

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-10 col-md-8 mx-auto ">
                <form action="{{route('comment')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your queries</label>
                        <textarea class="form-control" name="queries" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- form -->

<script>
  
</script>
@endsection