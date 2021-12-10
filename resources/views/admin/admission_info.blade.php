@extends('template.admin_template');
@section('content')

<div class="ttable" style="width: 100%;
    overflow-y: scroll;">
<table class="table" style="  ">
    <thead class=" text-primary">
        <th>
            STUDENT NAME
        </th>
        <th>
            GUARDIAN NAME
        </th>
        <th>
            DATE OF BIRTTH
        </th>
        <th>
            CLASS
        </th>
        <th>
            BOARD
        </th>
        <th>
            EMAIL ID
        </th>
        <th>
            STUDENT NUMBER
        </th>
        <th>
            GUARDIAN NUMBER
        </th>
        <th>
            COURSE
        </th>
        <th>
            SUBJECT
        </th>
        <th>
            IMAGE
        </th>
        <th>
         ADD +/REMOVE-
        </th>
        <th>
            DELETE
        </th>
       
      

    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>
                {{$user->studentname}}
            </td>
           
            <td class="text-primary">
                {{$user->guardianname}}
            </td>
            <td class="text-primary">
                {{$user->dateofbirth}}
            </td>
            <td class="text-primary">
                {{$user->class}}
            </td>
            <td class="text-primary">
                {{$user->board}}
            </td>
            <td class="text-primary">
                {{$user->email}}
            </td>
            <td class="text-primary">
                {{$user->studentnumber}}
            </td>
            <td class="text-primary">
                {{$user->guardiannumber}}
            </td>
            <td class="text-primary">
                {{$user->course}}
            </td>
            <td class="text-primary">
                {{$user->subjects}}
            </td>
            <td>
                <img src="{{asset('image/'.$user->image.'')}}" width="100px" height="100px">
            </td>
            @if($user->approved==0)
            <td class=""><a type="submit" id="addbtn" class="btn btn btn-primary" href="{{ route('addadmission',$user->id) }}" >Added</a></td>
            @else
            <td class=""><a type="submit" id="removebtn" class="btn btn btn-primary" href="{{ route('removeadmission',$user->id) }}">Removed</a></td>
           @endif
          

            <td class=""><a type="submit" href="{{ route('deleteadmission',$user->id) }}" class="btn btn-outline-info">Delete</a> </td>
        </tr>


        @endforeach


    </tbody>
</table>
</div>

<!-- <script src="{{asset('jquery.js')}}"></script>



<script>
    $(document).ready(function() {


        $('#addbtn').on('click', function() {
            $("#addbtn").prop('disabled', true);
        })
    });
</script> -->

@endsection