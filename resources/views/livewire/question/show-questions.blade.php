<div>
    <section class=" bg-dark bg-gradient shadow-sm">
        <x-livewire-confirm />
        {{-- <div class="first_logo">
                <img src="{{ asset('img/logo.jpeg') }}" class=" img-fluid float-start w-10" alt="logo">
            </div> --}}
        <div class="d-flex justify-content-center py-2 ">
            <div>
                <h3 class="text-light text-center" style="">Study Point Live</h3>
                <h6 class="ms-3 mb-0 mt-2 text-center text-light">Student ID :- <span>0254178</span></h6>
                <div>
                    <span class="ms-3 text-light">Subject :- <span>History</span></span>
                    <span class="ms-3 text-light">Reamaining Time :- <span>1 hour</span></span>
                </div>
            </div>
        </div>
    </section>

    <section class=" container d-lg-flex justify-content-between my-lg-5">
        <div class="question-box d-flex" style="height: 100%; width: 70%;">
            <div class="main-question">
                <div class="main-question-part" style="overflow-y: scroll; height:25rem;">
                    <div class="question_no">
                        <h1>Question <span id="questionno">{{ $onQuestion?->question_no }} :</span> </h1>
                        <input type="hidden" id="hiddenid" name="pid">
                        <hr>
                    </div>
                    <div class="question_image">
                        <img src="{{ asset('image/' . $onQuestion?->image . '') }}" class="img-fluid w-100" alt="">
                    </div>

                    <table class="table table-borderless mb0">
                        @php
                            $disabled=null;
                            if (isset($markedAnswers[$questionNo]['answer'])) {
                                if ($markedAnswers[$questionNo]['color']=='success') {
                                    $disabled = "disabled";
                                }
                            }
                        @endphp
                        <tbody>
                            <tr>
                                <td> <input {{$disabled}} wire:model="answer" type="radio" value="1"> 1 ) </td>
                                <td> <input {{$disabled}} wire:model="answer" type="radio" value="2"> 2 ) </td>
                                <td> <input {{$disabled}} wire:model="answer" type="radio" value="3"> 3 ) </td>
                                <td> <input {{$disabled}} wire:model="answer" type="radio" value="4"> 4 ) </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>

                <div class="my-2">
                    <hr>
                    <div class=" my-3">
                        <button wire:click="saveAndNext" type="button" class="btn btn-success shadow rounded my-1">SAVE
                            &
                            NEXT</button>
                        <button wire:click=" clear" type="button"
                            class="btn btn-light text-dark rounded my-1">CLEAR</button>
                        <button wire:click="saveAndMarkForNext" type="button"
                            class="btn btn-warning shadow rounded my-1">SAVE
                            & MARK FOR NEXT</button>
                        <button wire:click="markForReviewAndNext" type="button"
                            class="btn btn-primary shadow rounded my-1">MARK FOR REVIEW & NEXT</button>
                    </div>
                </div>

                <div class="d-flex justify-content-between bg-secondary bg-gradient shadow rounded-3 p-2">
                    <div class="">
                        <button wire:click="findQuestion({{ $questionNo - 1 }})" type="button" id="back_btn"
                            class="btn btn-light">
                            << BACK </button>
                                <button wire:click="findQuestion({{ $questionNo + 1 }})" type="button"
                                    class="btn btn-primary" id="next_btn">NEXT
                                    >></button>
                    </div>
                    <div>
                        <button type="button" onclick="livewireConfirm('Do you really want to Approve?', 'submit')"
                            class="btn btn-success shadow rounded border-dark"> SUBMIT
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="answerbox-box">
            <div class="timer-box d-flex align-items-center justify-content-center shadow rounded">
                <span class=" ">1: 56 : 60 </span>
            </div>

            <div class="option-box py-3 px-2">
                <div class="row g-3" style="margin:0px 3px">
                    @foreach ($questions as $question)

                        <div class="col-2">
                            <button type="button" wire:click="findQuestion({{ $question->question_no }})"
                                class="btn rounded shadow
                                @if ($question->question_no == $questionNo)
                                border-danger border-3
                                @endif
                              @if (isset($markedAnswers[$question->question_no]['color']))
                                  btn-{{ $markedAnswers[$question->question_no]['color'] }}
                              @endif
                                 ">{{ $question->question_no }}</button>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark bg-gradient d-flex justify-content-between  py-3">
        <div class="text-light px-3">Copyright © 2022 Study Point Live</div>
        <div class="px-3">
            <i class="fab fa-twitter text-light mx-2"></i>
            <i class="fab fa-youtube text-light mx-2"></i>
            <i class="fab fa-facebook text-light mx-2"></i>
            <i class="fab fa-instagram text-light mx-2"></i>
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
        window.addEventListener("focus", handleBrowserState.bind(context, true));
window.addEventListener("blur", handleBrowserState.bind(context, false));

function handleBrowserState(isActive){
    alert("Tge");
}

    </script>

    


</div>
