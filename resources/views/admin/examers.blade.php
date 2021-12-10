@extends('template.admin_template');
@section('content')


<table class="table" style="overflow-y: scroll !important;">
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
            REMOVE
        </th>
      

    </thead>
    <tbody>
        @foreach($result as $result)
        <tr>
            <td>
                {{$result->studentname}}
            </td>
           
            <td class="text-primary">
                {{$result->guardianname}}
            </td>
            <td class="text-primary">
                {{$result->dateofbirth}}
            </td>
            <td class="text-primary">
                {{$result->class}}
            </td>
            <td class="text-primary">
                {{$result->board}}
            </td>
            <td class="text-primary">
                {{$result->email}}
            </td>
            <td class="text-primary">
                {{$result->studentnumber}}
            </td>
            <td class="text-primary">
                {{$result->guardiannumber}}
            </td>
            <td class="text-primary">
                {{$result->course}}
            </td>
            <td class="text-primary">
                {{$result->subjects}}
            </td>
            <td>
                <img src="{{asset('image/'.$result->image.'')}}" width="100px" height="100px">
            </td>
             <td class="text-primary">
                <a href="{{route('selecter',$result->id)}}" class="btn btn-primary" >Remove</a>
            </td>
           
        </tr>


        @endforeach


    </tbody>
</table>

<!-- <script src="{{asset('jquery.js')}}"></script>



<script>
    $(document).ready(function() {


        $('#addbtn').on('click', function() {
            $("#addbtn").prop('disabled', true);
        })
    });
</script> -->

@endsection