@extends('template.admin_template');
@section('content')



<form action="{{route('addquestion.update',$addquestion->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Question_no</label>
        <input type="number" name="question_no" class="form-control" value="{{$addquestion->question_no}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">type here no of the question</div>
    </div>


    <select class="form-select mb-5" name="answer" aria-label="Default select example">
        <option selected disabled>{{ $addquestion->answer}}</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
    </select>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">marks</label>
        <input type="number" name="marks" class="form-control" value="{{$addquestion->marks}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">type here marks of the question</div>
    </div>
    <div class="mb-5">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="image" class="form-control" value="{{ $addquestion->image}}" type="file" id="formFile">
        <div class="img-holder"></div>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

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