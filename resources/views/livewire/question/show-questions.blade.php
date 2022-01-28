<div>
    <section>

        <!-- head -->

        <div class="d-flex headsection">
            <div class="first_logo d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/logo.jpeg') }}" class="" alt="logo">
            </div>
            <div class="first_intro d-flex">
                <div class="second_logo d-flex justify-content-center align-items-center ms-2">
                    <img src="" class="" alt="logo">
                </div>
                <div class="student_details">

                    <p class="ms-3 mb-0 mt-2">Student ID: <span></span></p>
                    <p class="ms-3 mb-0 ">Subject Name: <span></span></p>
                    <p class="ms-3">Reamaining Time:
                        <span></span>
                    </p>
                    <div id="action_btn" data-btn="1" style="display:none;">1</div>
                    <div id="timeing" data-btn="" style="display:none;">1</div>
                </div>

            </div>
            <!-- <div class="last_logo">
           <img src="img/omm.jpg" class="" alt="logo">
       </div> -->
        </div>

        <!-- head -->

    </section>




    <section class="container-fluid d-flex part-1" style="height: 95vh;">

        <div class="question-box d-flex justify-content-center align-items-center ms-3"
            style="height: 100%; width: 75%;">
            <div class="main-question">
                <div class="main-question-part" style="overflow-y: scroll; height:25rem;">
                    <div class="question_no">
                        <h1>Question <span id="questionno">{{ $onQuestion?->question_no }} :</span> </h1>
                        <input type="hidden" id="hiddenid" name="pid">
                        <hr>
                    </div>
                    <div class="question_image">
                        <img src="{{ asset('image/' . $onQuestion?->image . '') }}" class="img-fluid" alt="">
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
                        <button type="button" id="save" class="btn btn-primary" data-btn="1"
                            style="background: #0cc93d;">SAVE & NEXT</button>
                        <button type="button" id="clear" class="btn btn-primary" data-btn="1"
                            style="background: white; color: black;">CLEAR</button>
                        <button type="button" id="mark" class="btn btn-primary" data-btn="1"
                            style="background: #ecb20e;">SAVE & MARK FOR NEXT</button>
                        <button type="button" id="review" class="btn btn-primary" data-btn="1"
                            style="background:#1b488a">MARK FOR REVIEW & NEXT</button>
                    </ul>
                </div>
                <div class="button-box d-flex  align-items-center"
                    style="background: rgb(240, 240, 240); height: 60px;">

                    <ul class="button  mb-0 ps-3">
                        <button type="button" id="back_btn" class="btn btn-primary"
                            style="background: white; color: black;">
                            << BACK </button>
                                <button type="button" class="btn btn-primary" id="next_btn"
                                    style="background: white; color: black;">NEXT >></button>
                    </ul>
                    <a type="button" href="{{ route('submit') }}" class="btn btn-primary ms-auto" id="submit" style="height: 38PX;
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
                    @foreach ($questions as $question)

                        <div class="col-2">
                            <button type="button" wire:click="findQuestion"
                                class="side_button btn btn-primary "  data-id="" style="background: #d8d8d8;
                                color: #7d7a7a;
                                border: 2px solid gray;">{{ $question->question_no }}</button>
                        </div>

                    @endforeach

                    <button wire:click="findQuestion">rgg</button>

                </div>
            </div>
        </div>

    </section>


    <!-- timer -->
    <script>
        $(function() {
            var a = 5222222222;
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
                    window.location.href = "{{ URL::to('/submit') }}"

                }

            }, 1000);

        });
    </script>

    
</div>
