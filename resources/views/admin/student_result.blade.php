@extends('template.admin_template');
@section('content')









<table class="table">
    <thead class=" text-primary">
        <th>
            STUDENT NAME
        </th>

        <th>
            STUDENT IMAGE
        </th>
        <th>
            TOTAL MARKS
        </th>
        <th>
            STUDENT MARKS
        </th>
        <th>
            CUT OF MARKS
        </th>
        <th>
            FINAL MARKS
        </th>
         <th>
            TIME & DATE
        </th>

        <th>
           CHECK ANSWERS
        </th>
       
        <th>
            DELETE
        </th>
        
    </thead>
    <tbody>
        @foreach($result as $result)
       
        <tr>
            <td>
               <h5>{{$result->name}}</h5> 
            </td>

            <td class="text-primary">
               <img src="{{asset('image/'.$result->image.'')}}" width="100px" height="100px">
            </td>

            <td class="text-primary">
                {{$result->totalmarks}}
            </td>
            <td class="text-primary">
                {{$result->marks}}
            </td>
            <td class="text-primary">
               {{$result->cutmarks}}
            </td>
            <td class="text-primary">
               {{$result->finalmarks}}
            </td>
             <td class="text-primary">
               {{$result->time}}
            </td>
            <td class=""><a type="submit" href="{{route('student_answer',$result->id)}}" class="btn btn-outline-info">Answer</a> </td>
           

            <td class=""><a type="submit" href="{{route('delete.result',$result->id)}}" class="btn btn-outline-info">Delete</a> </td>
        </tr>


        @endforeach
       

    </tbody>
</table>



     
 
@endsection