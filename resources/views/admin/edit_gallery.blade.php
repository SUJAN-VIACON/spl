@extends('template.admin_template');
@section('content')







<div class="container">
    <div class="row">

        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure style="border: 1px solid black;">
                <form action="{{route('gallerys.update',$gallery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        <div class="img-holder"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE PHOTO</button>
                </form>
            </figure>
        </div>

      
        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
                <img src="{{ asset('image/'.$gallery->image.'') }}" class="img-fluid h-75" alt="">
                
            </figure>
        </div>

       




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