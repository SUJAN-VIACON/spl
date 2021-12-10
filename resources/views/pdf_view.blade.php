<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
        * {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;

        }

        th {
            padding: 15px;
        }

        td {
            text-align: center;
        }

        table {
            margin-bottom: 25px;
        }

        button {

            text-decoration: none;
            background: #dc3545;
            border: #dc3545;
            color: white;
            padding: 10px;

        }

        h1 {
            font-size: 30px;
            text-align: center;
            font-weight: bold;
        }

        span {
            font-size: 30px;
            color: #dc3545;
        }

        .information {
            padding-top: 5px;
            text-align: center;
            color: grey;
        }

        input {
            text-align: center;
        }
    </style>
</head>

<body class="bg-white" style="background: white !important;">

    <h1>STUDY POINT<SPan> LIVE</SPan></h1>
    <div class="information">
      
    </div>
    <div class="container" class="bg-white">
        <div class="pt-5  cart-table" style="margin-top: 3rem;    margin-bottom: 4rem;">
            <div class="scroll">
                <table class="table question-table">
                    <thead class="bg-danger text-white " style="background: #dc3545;color:white">
                        <tr>
                            <th scope="col" class="hide-table">QUESTION NO</th>
                            <th scope="col" class="hide-table">QUESTION</th>


                            <th scope="col" class="hide-table">ANSWER</th>
                            <th scope="col" class="hide-table">MARKS</th>


                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($question as $question)

                        <tr class="">
                            <td class="cart-table blur">
                                <p>{{$question->question_no}}</p>
                            </td>
                            <td scope="row" class="">
                                <img src="{{public_path('image/'.$question->image.'')}}" style="width: 25rem;" alt="">


                            </td>
                            <td scope="row" class="blur">


                                <p>{{$question->answer}}</p>

                            </td>

                            <td class="cart-table blur">
                                <p>{{$question->marks}}</p>
                            </td>
                            

                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>



        </div>
    </div>
</body>


</html>