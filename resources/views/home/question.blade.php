<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('question.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
            .headsection {
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
                height: 100%;
                margin: 0px;

            }

            .main-question-part {
                height: 15rem !important;
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
    @livewireStyles
</head>

<body>

    <livewire:question.show-questions />
    @livewireScripts
</body>



</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
