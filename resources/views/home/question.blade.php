<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('question.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <style>
        .savecolor {
            background: #0cc93d !important;
        }

        .clearcolor {
            background: #d8d8d8 !important;
        }

        .markcolor {
            background: #ecb20e !important;
        }

        .reviewcolor {
            background: #1b488a !important;
        }

        .bordercolor {
            border: 2px red !important;
        }

        .question_image img {
            width: 100%;

            margin-bottom: 10px
        }

        @media screen and (max-width: 900px) {
            .headsection{
                height: 6rem;
            }
            .part-1 {
                flex-direction: column;
            }


            .first_logo img {
                width: 45px;
                margin: 0px 8px;

            }

            .second_logo {
              margin: 11px 2px;
            }

            .second_logo img {
                width: 58px;
                height:100%;
                margin: 0px;

            }

           .main-question-part{
               height:15rem !important;
           }
            .first_intro p {

                font-size: 12px;

            }

            .question_no hr {
                height: 1px;
                margin: 10px 0;
            }

            .question_no h1 {
                font-size: 13px;
                padding-top: 27px;

            }

            .button button {
                margin-right: 3px;
                font-weight: bold;
                font-size: 8px;
            }

            .button {
                padding-left: 0px;
            }

            .answerbox-box {
                width: 100%;
            }

            .timer-box {
                height: 4rem;
                background: #424141;

            }

            .timer-box span {
                font-size: 31px;
                color: red;
            }

            .option-box {
                height: 25rem;

            }

            .question-box {
                margin-left: 0 !important;
                width: 21rem !important;
            }
        }
    </style>
</head>

<body>


    <section>

        <!-- head -->
        
        @php
        
        $time=$exam->timeing;
      
        $hour=$time/3600;
        settype($hour, "integer");
        $min=($time%3600)/60;
        settype($min, "integer");
        $sec=($time%3600)%60;
        settype($sec, "integer");
        
        @endphp

        <div class="d-flex headsection">
            <div class="first_logo d-flex justify-content-center align-items-center">
                <img src="{{asset('img/logo.jpeg')}}" class="" alt="logo">
            </div>
            <div class="first_intro d-flex">
                <div class="second_logo d-flex justify-content-center align-items-center ms-2">
                    <img src="{{asset('image/'.$user->image.'')}}" class="" alt="logo">
                </div>
                <div class="student_details">

                    <p class="ms-3 mb-0 mt-2">Student ID: <span>{{$user->email}}</span></p>
                    <p class="ms-3 mb-0 ">Subject Name: <span>{{$exam->subject}}</span></p>
                    <p class="ms-3">Reamaining Time: <span>{{$hour}}:{{$min}}:{{$sec}}</span></p>
                    <div id="action_btn" data-btn="1" style="display:none;">1</div>
                     <div id="timeing" data-btn="{{$exam->timeing}}" style="display:none;">1</div>
                </div>

            </div>
            <!-- <div class="last_logo">
            <img src="img/omm.jpg" class="" alt="logo">
        </div> -->
        </div>

        <!-- head -->

    </section>




    <section class="container-fluid d-flex part-1" style="height: 95vh;">

        <div class="question-box d-flex justify-content-center align-items-center ms-3" style="height: 100%; width: 75%;">
            <div class="main-question">
                <div class="main-question-part" style="overflow-y: scroll; height:25rem;">
                    <div class="question_no">
                        <h1>Question <span id="questionno">{{$vquestion->question_no}} :</span> </h1>
                        <input type="hidden" id="hiddenid" name="pid">
                        <hr>
                    </div>
                    <div class="question_image">
                        <img src="{{asset('image/'.$vquestion->image.'')}}" class="img-fluid" alt="">
                    </div>


                    <table class="table table-borderless mb0">
                        <tbody>
                            <tr>
                                <td> <input type="radio" value="1" name="radiospage01" id="rOption01_1"> 1 ) </td>
                                <td> <input type="radio" value="2" name="radiospage01" id="rOption01_1"> 2 ) </td>
                                <td> <input type="radio" value="3" name="radiospage01" id="rOption01_1"> 3 ) </td>
                                <td> <input type="radio" value="4" name="radiospage01" id="rOption01_1"> 4 ) </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <div class="button-box">
                    <hr>
                    <ul class="button">
                        <button type="button" id="save" class="btn btn-primary" data-btn="1" style="background: #0cc93d;">SAVE & NEXT</button>
                        <button type="button" id="clear" class="btn btn-primary" data-btn="1" style="background: white; color: black;">CLEAR</button>
                        <button type="button" id="mark" class="btn btn-primary" data-btn="1" style="background: #ecb20e;">SAVE & MARK FOR NEXT</button>
                        <button type="button" id="review" class="btn btn-primary" data-btn="1" style="background:#1b488a">MARK FOR REVIEW & NEXT</button>
                    </ul>
                </div>
                <div class="button-box d-flex  align-items-center" style="background: rgb(240, 240, 240); height: 60px;">

                    <ul class="button  mb-0 ps-3">
                        <button type="button" id="back_btn" class="btn btn-primary" style="background: white; color: black;">
                            << BACK </button>
                                <button type="button" class="btn btn-primary" id="next_btn" style="background: white; color: black;">NEXT >></button>
                    </ul>
                    <a type="button" href="{{route('submit')}}" class="btn btn-primary ms-auto" id="submit" style="height: 38PX;
                    margin-right: 13px;background:#0cc93d ;"> SUBMIT
                    </a>
                </div>
            </div>

        </div>



        <div class="answerbox-box">
            <div class="timer-box d-flex align-items-center justify-content-center">
                <span>1: 56 : 60 </span>
            </div>

            <div class="option-box">
                <div class="row g-3" style="margin:0px 3px">
                    @foreach($question as $question)

                    <div class="col-2">
                        <button type="button" class="side_button btn btn-primary " id="side_button" data-id="{{$question->question_no}}" style="background: #d8d8d8;
    color: #7d7a7a;
    border: 2px solid gray;">{{$question->question_no}}</button>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>








    </section>
   
    <script src="{{asset('jquery.js')}}"></script>


    <script>
        $(document).ready(function() {

            function check(data) {
                $('input[name=radiospage01]').attr("disabled", false);
                $('input[name="radiospage01"]:checked').prop("checked", false);
                if (data.radiono != 0) {
                    $('input[name="radiospage01"]:checked').prop("checked", false);
                    $("input[name=radiospage01][value=" + data.radiono + "]").prop("checked", true);
                    $('input[name=radiospage01]').attr("disabled", true);
                }
            }


            $(document).on("click", "#side_button", function(e) {
                e.preventDefault();



                var questionid = $(this).attr('data-id');

                $.ajax({
                    url: "/ajaxquestion",
                    type: "GET",
                    data: {
                        id: questionid
                    },
                    success: function(data) {

                        $("#questionno").text(data.result.question_no);
                        $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                        $("#action_btn").attr('data-btn', data.result.question_no);
                        check(data);

                    }
                })

            });








            $(document).on("click", "#next_btn", function() {

                var a = parseInt($('#action_btn').attr('data-btn'));
                var questionid = a + 1;

                $.ajax({
                    url: "/ajaxquestion",
                    type: "GET",
                    data: {
                        id: questionid
                    },
                    success: function(data) {

                        $("#questionno").text(data.result.question_no);
                        $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                        $("#action_btn").attr('data-btn', data.result.question_no);
                        check(data);

                    }
                })


            });


  $(document).on("click", "#submit", function() {

              alert("Are you sure");


            });





            $(document).on("click", "#back_btn", function() {

                var a = parseInt($('#action_btn').attr('data-btn'));
                var questionid = a - 1;

                $.ajax({
                    url: "/ajaxquestion",
                    type: "GET",
                    data: {
                        id: questionid
                    },
                    success: function(data) {

                        $("#questionno").text(data.result.question_no);
                        $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                        $("#action_btn").attr('data-btn', data.result.question_no);
                        check(data);

                    }
                })


            });

            window.radio_value = 0;
            $('input[type=radio]').click(function(e) {

                window.radio_value = $(this).val();

            });
            $(document).on("click", "#save", function() {

                var a = parseInt($('#action_btn').attr('data-btn'));

                var questionid = a + 1;
                if (window.radio_value != 0) {
                    $.ajax({
                        url: "/savequestion",
                        type: "GET",
                        data: {
                            id: questionid,
                            answer: window.radio_value
                        },
                        success: function(data) {

                            $("#questionno").text(data.result.question_no);
                            $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                            $("#action_btn").attr('data-btn', data.result.question_no);
                            $(".side_button[data-id=" + a + "]").removeClass("reviewcolor");

                            $(".side_button[data-id=" + a + "]").addClass("savecolor");
                            $('input[name="radiospage01"]:checked').prop("checked", false);
                            radio_value = 0;
                            check(data)


                        }
                    })
                } else {
                    if (window.radio_value == 0) {
                        alert("please select a option");
                    }

                }


            });






            $(document).on("click", "#mark", function() {

                var a = parseInt($('#action_btn').attr('data-btn'));

                var questionid = a + 1;
                if (window.radio_value != 0) {
                    $.ajax({
                        url: "/savequestion",
                        type: "GET",
                        data: {
                            id: questionid,
                            answer: window.radio_value
                        },
                        success: function(data) {

                            $("#questionno").text(data.result.question_no);
                            $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                            $("#action_btn").attr('data-btn', data.result.question_no);

                            $(".side_button[data-id=" + a + "]").removeClass("reviewcolor");
                            $(".side_button[data-id=" + a + "]").addClass("markcolor");
                            $('input[name="radiospage01"]:checked').prop("checked", false);
                            radio_value = 0;
                            check(data)


                        }
                    })
                } else {
                    if (window.radio_value == 0) {
                        alert("please select a option");
                    }

                }


            });



            $(document).on("click", "#clear", function() {



                var a = parseInt($('#action_btn').attr('data-btn'));

                var questionid = a;
                $.ajax({
                    url: "/clearquestion",
                    type: "GET",
                    data: {
                        id: questionid
                    },
                    success: function(data) {

                        if (data == 1) {
                            $(".side_button[data-id=" + a + "]").removeClass("savecolor");
                            $(".side_button[data-id=" + a + "]").removeClass("markcolor");
                            $('input[name="radiospage01"]:checked').prop("checked", false);
                            $('input[name=radiospage01]').attr("disabled", false);

                        } else {
                            alert("this question is not selected for save & next or save and mark for next");
                        }


                    }
                })




            });


            $(document).on("click", "#review", function() {

                var a = parseInt($('#action_btn').attr('data-btn'));

                var questionid = a + 1;
                $.ajax({
                    url: "/ajaxquestion",
                    type: "GET",
                    data: {
                        id: questionid
                    },
                    success: function(data) {

                        $("#questionno").text(data.result.question_no);
                        $('.question_image').html('<img src="/public/image/' + data.result.image + '"  >');
                        $("#action_btn").attr('data-btn', data.result.question_no);
                        check(data)
                        
                        if (data.review == 0) {

                            $(".side_button[data-id=" + a + "]").addClass("reviewcolor");
                        }





                    }
                })

            });

        });
    </script>



    <!-- timer -->
    <script>
        $(function() {
              var a = parseInt($('#timeing').attr('data-btn'));
            let totaTime = a;
            let hour = 0;
            let min = 0;
            let sec = 0;
            let counter = 0;



            let timer = setInterval(function() {
                counter++;
                hour = Math.floor((totaTime - counter) / 3600);
                min = Math.floor((totaTime - hour * 3600 - counter) / 60);
                sec = totaTime - hour * 3600 - min * 60 - counter;

                $(".timer-box span").text(hour + " " + ":" + " " + min + " " + ":" + " " + sec);

                if (counter == totaTime) {

                    alert("time's up. press ok to show the result.");

                    clearInterval(timer);
                    window.location.href = "{{URL::to('/submit')}}"


                }

            }, 1000);

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>



</html>