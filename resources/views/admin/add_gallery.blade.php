@extends('template.admin_template');
@section('content')







<div class="container">
    <div class="row">

        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure style="border: 1px solid black;">
                <form action="{{route('gallerys.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        <div class="img-holder"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">ADD PHOTO</button>
                </form>
            </figure>
        </div>

        @foreach($gallery as $gallery)
        <div class=" col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
                <img src="{{ asset('image/'.$gallery->image.'') }}" class="img-fluid h-75" alt="">

                
                <div class="  d-flex  ">
                    <!-- <a type="submit" href="{{route('gallerys.edit',$gallery->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="    height: 43px;
                       margin-right: 4px;">edit</a> -->

                       <a type="button" class="btn btn-primary" href="{{route('gallerys.edit',$gallery->id)}}" style="height: 43px;
                       margin-right: 4px;">edit</a>

                    <form action="{{ route('gallerys.destroy',$gallery->id) }}" method="POST">
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