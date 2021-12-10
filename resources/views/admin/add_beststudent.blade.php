@extends('template.admin_template');
@section('content')







<div class="container">
    <div class="row">

        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure style="border: 1px solid black;">
                <form action="{{route('beststudents.store')}}" style="margin-left: 15px;" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Line 1</label>
                        <input type="text" name="head1" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Line 2</label>
                        <input type="text" name="head2" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Line 3</label>
                        <input type="text" name="head3" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Line 4</label>
                        <input type="text" name="head4" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Line 5</label>
                        <input type="text" name="head5" class="form-control" id="exampleInputPassword1">
                    </div>


                    <div class="mb-5">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        <div class="img-holder"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </figure>
        </div>

        @foreach($student as $student)
        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              
                <div class="card mb-3" style="max-width: 540px;">
                            <div class="row" data-aos="flip-left">
                                <div class="col-md-4">
                                    <img src="{{ asset('image/'.$student->image.'') }}" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$student->head1}}</h5>
                                        <p class="card-text">{{$student->head1}}</p>
                                        <p class="card-text">Roll No. : {{$student->head3}}</p>
                                        <p class="card-text">Category Rank : {{$student->head4}}</p>
                                        <p class="card-text"> {{$student->head5}}</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="  d-flex  ">
                   
                    <a type="button" class="btn btn-primary" href="{{route('beststudents.edit',$student->id)}}" style="height: 43px;
                       margin-right: 4px;">edit</a>
                    <form action="{{ route('beststudents.destroy',$student->id) }}" method="POST">
                        @csrf
                        {{@method_field('DELETE')}}
                        <button type="submit" class="btn btn-outline-info" href="">Delete</button>
                    </form>
                </div>
            </figure>
        </div>

        @endforeach





    </div>
</div>



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

@endsection