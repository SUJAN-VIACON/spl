<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="best coaching institute in kolata jee neet" content="HTML, CSS, JavaScript">
    <meta name="Registration" content="Free Web tutorials for HTML and CSS">
    <meta name="UJJAL MONDAL" content="John Doe">
     <link rel="icon" href="{{asset('img/logo.jpeg')}}" />
    <title>STUDY POINT LIVE</title>
    <link rel="stylesheet" href="{{asset('css/admission.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
    #loader {
      background: #fff url(https://miro.medium.com/max/1400/1*CsJ05WEGfunYMLGfsT2sXA.gif) no-repeat center;
      background-size: 50%;
      height: 100vh;
      width: 100%;
      position: fixed;
      z-index: 100;
    }

  
  </style>
</head>

<body style="background: #f3f8f9;">
<div id="loader"></div>

    <div class="admissionbox">
       



        <div class="regform" style="border-radius: 15px;">
            <div class="welcome">

                <h1>welcome</h1>
    
                <p class="pt">please fill all the details carefully.Only valid information will be selected
                 </p>
    
                <a href="{{route('home')}}">
                    << Back</a>
    
    
            </div>
            <div class="main">
                @if($message = Session::get('success'))
                <div class="alert alert-success bg-success" style=" background: #0cc93d !important;">
                    <p     padding: 26px;
    font-size: 23px;
    color: white>{{$message}}</p>
                    <div class="col-12">



                    </div>
                </div>
                @endif
                 @if($message = Session::get('error'))
                <div class="alert alert-success bg-success" style=" background: #f74f57 !important;">
                    <p class="text-danger" style="    padding: 26px;
    font-size: 23px;
    color: white">{{$message}}</p>
                    <div class="col-12">



                    </div>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger bg-danger" style=" background: red !important;">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('admissiondata')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="study">
                        <h1>STUDY POINT REGISTRATION FORM</h1>



                    </div>
                    <div id="name">
                        <h2 class="name">Name of the student</h2>
                        <input class="firstname" type="text" name="studentname" required><br>


                    </div>


                    <div id="name">

                        <h2 class="name">Guardian name</h2>
                        <input type="text" class="company" name="guardianname" required>
                    </div>


                    <div id="name">

                        <h2 class="name">Date of birth</h2>
                        <input type="date" class="company" name="dateofbirth" required>



                    </div>

                    <div id="name">

                        <h2 class="name">class</h2>

                        <select name="class" id="" class="classs" required>
                            <option disabled="disabled" selected="selected" value="">--choose class</option>
                            <option value="8">class-8</option>
                            <option value="9">class-9</option>

                            <option value="10">class-10</option>
                            <option value="11">class-11</option>
                            <option value="12">class-12</option>
                        </select>
                        <h2 class="name1">board</h2>
                        <select name="board" id="" class="classs" required>
                            <option disabled="disabled" selected="selected" value="">--choose board</option>
                            <option value="WBBSE">WBBSE</option>
                            <option value="WBCHSE">WBCHSE</option>
                            <option value="ICSC">ICSC</option>
                             <option value="ISC">ISC</option>
                            <option value="CBSE">CBSE</option>
                        </select>
                    </div>

                    <div id="name" style="display: none;">

                        <h2 class="name">email</h2>
                        <input type="mail" class="email" name="email">
                    </div>

                    <div id="name">

                        <h2 class="name">Student contact number</h2>
                        <select name="" id="" class="classs1">
                            <option disabled="disabled" selected="selected" value="">--choose area_code</option>
                            <option value="91">+91</option>

                        </select>
                        <input type="text" name="studentnumber" class="number1" required>

                    </div>

                    <div id="name">
                        <h2 class="name">Guardian contact number</h2>
                        <select name="subject" id="" class="classs1">
                            <option disabled="disabled" selected="selected" value="">--choose area_code</option>
                            <option value="91">+91</option>

                        </select>
                        <input type="text" name="guardiannumber" class="number1" required>

                    </div>
                    <div id="name">
                        <h2 class="name">course details</h2>
                        <select name="course" id="" class="classs" required>
                            <option disabled="disabled" selected="selected" value="">--choose course</option>
                            <option value="BOARD">BOARD</option>
                            <option value="JEE">JEE</option>
                            <option value="NEET">NEET</option>
                            <option value="NURSING">NURSING</option>
                            <option value="PHARMACY">PHARMACY</option>
                            <option value="JEXPO">JEXPO</option>
                        </select>

                    </div>

                    <div id="name">

                        <h2 id="student">subject details</h2>
                        <div class="radioo">

                            <div class="sub">
                                <input name="subjects[]" type="checkbox" value="Physics">Physics
                                <input name="subjects[]" type="checkbox" value="Mathematics">Mathematics
                                <input name="subjects[]" type="checkbox" value="English">English
                                <input name="subjects[]" type="checkbox" value="History">History
                                <input name="subjects[]" type="checkbox" value="Computer">Computer
                            </div>

                            <div class="sub1">

                                <input name="subjects[]" type="checkbox" value="Chemistry">Chemistry
                                <input name="subjects[]" type="checkbox" value="Biology">Biology
                                <input name="subjects[]" type="checkbox" value="Bengali/Hindi">Bengali/Hindi
                                <input name="subjects[]" type="checkbox" value="Economics">Economics
                                <input name="subjects[]" type="checkbox" value="Geography">Geography
                            </div>
                        </div>
                    </div>

                    <div id="photo">
                        <h2 class="name">upload photo (below 1 MB)</h2>
                        <input class="firstname" type="file" name="image" value="" required><br>


                    </div>
 <div class="img-holder"></div>


                    <button type="submit" name="submit">Register</button>

                </form>
            </div>
        </div>
    </div>


</body>


<script src="{{asset('jquery.js')}}"></script>



<script>
    $(document).ready(function() {


        $('input[type="file"][name="image"]').on('change', function() {
            var img_path = $(this)[0].value;
            var img_holder = $('.img-holder');
            var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
            if (extension == 'jpg' || extension == 'jpeg' || extension == 'png') {

                if (typeof(FileReader) != 'undefined') {

                    img_holder.empty();
                    var reader = new FileReader();
                    reader.onload = function(e) {

                        $('<img/>', {
                            'src': e.target.result,
                            'calss': 'img-fluid',
                            'style': 'max-width:100px;margin-bottom:10px'
                        }).appendTo(img_holder);
                    }

                    img_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    $(img_holder).html(
                        ' this browser not support filereader'
                    )
                }
            } else {
                $(img_holder).empty();
            }

        })
    });
</script>

  <script>
      $(document).ready(function() {
        setTimeout(function() {
          $("div.alert").remove();
        }, 3000)
      });
    </script>
    <script>
      var loader = document.getElementById("loader");
      window.addEventListener("load", function() {
        loader.style.display = "none";
      })
    </script>


</html>