<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('img/logo.jpeg')}}" />
         <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Scripts -->
        <script src="{{asset('js/app.js') }}" defer></script>
        <title>STUDY POINT LIVE</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 <style>
        #loader{
            background: #fff url(https://miro.medium.com/max/1400/1*CsJ05WEGfunYMLGfsT2sXA.gif) no-repeat center;
            background-size: 50%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }
        .close{
            top: 3px;
    left: 97%;
    font-weight: bold; font-size:23px
        }
        
        @media (max-width:735px){
             .close{
           
    left: 93%;
   
        }
        }
    </style>
       
    </head>
    <body>
        
          @if($message = Session::get('success'))
                <div class="alert alert-success fixed-top w-25 " style=" ">
                    <p >{{$message}}</p>
    <button type="button" class="close fixed-top " data-dismiss="alert" >X</button>
                    
                </div>
                @endif
                 @if($message = Session::get('error'))
                <div class="alert alert-danger fixed-top w-100" style=" ">
                    
                    <p class="text-danger text-center" style="   ">{{$message}}</p>
     <button type="button" class="close fixed-top"  data-dismiss="alert">X</button>
                   
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger fixed-top w-100 " >
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                     <button type="button" class="close fixed-top"  data-dismiss="alert">X</button>
                </div>
                @endif
                 <div id="loader"></div>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
         <script src="{{asset('jquery.js')}}"></script>
    
   <script>
        var loader= document.getElementById("loader");
        window.addEventListener("load",function(){
            loader.style.display="none";
        })
    </script>
  <script>
         $(document).ready(function() {
             setTimeout(function(){
                 $("div.alert").remove();
             },6000)
         });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
