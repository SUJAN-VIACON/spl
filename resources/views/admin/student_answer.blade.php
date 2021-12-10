@extends('template.admin_template')
@section('content')


<table class="table">
    <thead class=" text-primary">
        <th>
           QUESTION NO
        </th>
      
        <th>
            ANSWER
        </th>
        <th>
            STUDENT ANSWER
        </th>
        <th>
         MARKS
        </th>
        <th>
         IMAGE
        </th>
       

    </thead>
    <tbody>
    @foreach($result as $result)
        <tr>
            <td>
                {{$result->question_no}}
            </td>
           
            <td class="text-primary">
            {{$result->answer}}
            </td>
             <td class="text-primary">
            {{$answer_details[$result->question_no]}}
            </td>
            <td class="text-primary">
            {{$result->marks}}
            </td>
            <td>
            <img src="{{asset('image/'.$result->image.'')}}" style="width:25rem">
            </td>
           
        </tr>
     
      
   @endforeach
    
        
    </tbody>
</table>











@endsection