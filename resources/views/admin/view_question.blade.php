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
         MARKS
        </th>
        <th>
         IMAGE
        </th>
        <th>
            EDIT
        </th>
        <th>
            DELETE
        </th>

    </thead>
    <tbody>
    @foreach($question as $question)
        <tr>
            <td>
                {{$question->question_no}}
            </td>
           
            <td class="text-primary">
            {{$question->answer}}
            </td>
            <td class="text-primary">
            {{$question->marks}}
            </td>
            <td>
            <img src="{{asset('image/'.$question->image.'')}}" width="100px" height="100px">
            </td>
            <td class=""><a type="submit" class="btn btn-outline-info" href="{{ route('addquestion.edit',$question->id) }}">Edit</a></td>

            <td class="">
                <form action="{{ route('addquestion.destroy',$question->id) }}" class="m-0" method="POST">
                    @csrf
                    {{@method_field('DELETE')}}
                    <button type="submit" class="btn btn-outline-info">Delete</button>
                </form>
            </td>
        </tr>
     
      
   @endforeach
    
        
    </tbody>
</table>











@endsection