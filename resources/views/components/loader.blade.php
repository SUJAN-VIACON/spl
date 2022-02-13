<div class="loading-overlay">
    <style>
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: grid;
            place-content: center;
            z-index: 99999;
        }

        /*!
        * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
        * Copyright 2015 Daniel Cardoso <@DanielCardoso>
        * Licensed under MIT
        */
        .la-ball-scale-multiple,
        .la-ball-scale-multiple>div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .la-ball-scale-multiple {
            display: block;
            font-size: 0;
            color: #fff;
        }

        .la-ball-scale-multiple.la-dark {
            color: #333;
        }

        .la-ball-scale-multiple>div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }

        .la-ball-scale-multiple {
            width: 32px;
            height: 32px;
        }

        .la-ball-scale-multiple>div {
            position: absolute;
            top: 0;
            left: 0;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            opacity: 0;
            -webkit-animation: ball-scale-multiple 1s 0s linear infinite;
            -moz-animation: ball-scale-multiple 1s 0s linear infinite;
            -o-animation: ball-scale-multiple 1s 0s linear infinite;
            animation: ball-scale-multiple 1s 0s linear infinite;
        }

        .la-ball-scale-multiple>div:nth-child(2) {
            -webkit-animation-delay: .2s;
            -moz-animation-delay: .2s;
            -o-animation-delay: .2s;
            animation-delay: .2s;
        }

        .la-ball-scale-multiple>div:nth-child(3) {
            -webkit-animation-delay: .4s;
            -moz-animation-delay: .4s;
            -o-animation-delay: .4s;
            animation-delay: .4s;
        }

        .la-ball-scale-multiple.la-sm {
            width: 16px;
            height: 16px;
        }

        .la-ball-scale-multiple.la-sm>div {
            width: 16px;
            height: 16px;
        }

        .la-ball-scale-multiple.la-2x {
            width: 64px;
            height: 64px;
        }

        .la-ball-scale-multiple.la-2x>div {
            width: 64px;
            height: 64px;
        }

        .la-ball-scale-multiple.la-3x {
            width: 96px;
            height: 96px;
        }

        .la-ball-scale-multiple.la-3x>div {
            width: 96px;
            height: 96px;
        }

        /*
        * Animation
        */
        @-webkit-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-moz-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -moz-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @-o-keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -o-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes ball-scale-multiple {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
            }

            5% {
                opacity: .75;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

    </style>

    <style>
        /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
        .la-ball-pulse-sync,
        .la-ball-pulse-sync>div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .la-ball-pulse-sync {
            display: block;
            font-size: 0;
            color: #fff;
        }

        .la-ball-pulse-sync.la-dark {
            color: #333;
        }

        .la-ball-pulse-sync>div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }

        .la-ball-pulse-sync {
            width: 54px;
            height: 18px;
        }

        .la-ball-pulse-sync>div {
            width: 10px;
            height: 10px;
            margin: 4px;
            border-radius: 100%;
            -webkit-animation: ball-pulse-sync .6s infinite ease-in-out;
            -moz-animation: ball-pulse-sync .6s infinite ease-in-out;
            -o-animation: ball-pulse-sync .6s infinite ease-in-out;
            animation: ball-pulse-sync .6s infinite ease-in-out;
        }

        .la-ball-pulse-sync>div:nth-child(1) {
            -webkit-animation-delay: -.14s;
            -moz-animation-delay: -.14s;
            -o-animation-delay: -.14s;
            animation-delay: -.14s;
        }

        .la-ball-pulse-sync>div:nth-child(2) {
            -webkit-animation-delay: -.07s;
            -moz-animation-delay: -.07s;
            -o-animation-delay: -.07s;
            animation-delay: -.07s;
        }

        .la-ball-pulse-sync>div:nth-child(3) {
            -webkit-animation-delay: 0s;
            -moz-animation-delay: 0s;
            -o-animation-delay: 0s;
            animation-delay: 0s;
        }

        .la-ball-pulse-sync.la-sm {
            width: 26px;
            height: 8px;
        }

        .la-ball-pulse-sync.la-sm>div {
            width: 4px;
            height: 4px;
            margin: 2px;
        }

        .la-ball-pulse-sync.la-2x {
            width: 108px;
            height: 36px;
        }

        .la-ball-pulse-sync.la-2x>div {
            width: 20px;
            height: 20px;
            margin: 8px;
        }

        .la-ball-pulse-sync.la-3x {
            width: 162px;
            height: 54px;
        }

        .la-ball-pulse-sync.la-3x>div {
            width: 30px;
            height: 30px;
            margin: 12px;
        }

        /*
 * Animation
 */
        @-webkit-keyframes ball-pulse-sync {
            33% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }

            66% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-moz-keyframes ball-pulse-sync {
            33% {
                -moz-transform: translateY(100%);
                transform: translateY(100%);
            }

            66% {
                -moz-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -moz-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-o-keyframes ball-pulse-sync {
            33% {
                -o-transform: translateY(100%);
                transform: translateY(100%);
            }

            66% {
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes ball-pulse-sync {
            33% {
                -webkit-transform: translateY(100%);
                -moz-transform: translateY(100%);
                -o-transform: translateY(100%);
                transform: translateY(100%);
            }

            66% {
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

    </style>

    {{-- <div class="la-ball-scale-multiple la-2x">
        <div></div>
        <div></div>
        <div></div>
    </div> --}}

    <div class="la-ball-pulse-sync">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
