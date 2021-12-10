@extends('template.home_template')
@section('content')

<section class="background firstsection">
    <div class="box-main">
        <div class="firsthalf">
            <h1 class="text-bigg">LOCATION</h1>
            <p class="text-small">
                Find us on google map

            </p>

            <div class="banner-btn">
                <a href="https://goo.gl/maps/evwUwgcUEgoJ46X68"><span></span>Search</a>

            </div>
        </div>
        <div class="secondhalf">
           
            <img src="{{asset('img/map.png')}}" alt="">
        </div>

    </div>

</section>


<section class="my-5 ">
    <div class="text-center">

        <h1 class="display-4 ">Address</h1>
        <hr class="w-25 mx-auto">

    </div>

    <div class="container my-5">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                <figure>
                   
                    <img src="{{asset('img/map.png')}}"class="img-fluid about_img" alt="">
                </figure>
            </div>


            <div class="row col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column ">
                <h1>our location</h1>
                <h3>srakarpool,kultala bazar</h3>
                <h3>post - sarkarpoll</h3>
                <h3>kolkata-700143</h3>
                <p></p>
                <button type="button" class="btn btn-outline-info w-25 mx-2" data-bs-toggle="tooltip" data-bs-placement="right" title="know more">
                    Info</button>
            </div>

        </div>

    </div>

</section>

<section class="location">


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14744.060773763373!2d88.29374554764844!3d22.503613126982955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027bee99240681%3A0x736a5ae27ecac56a!2sStudy%20Point!5e0!3m2!1sen!2sin!4v1617852809010!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>






</section>
<section class="my-5  ">
    <div class="text-center">

        <h1 class="display-4 ">Comment us</h1>
        <hr class="w-25 mx-auto">

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




@endsection