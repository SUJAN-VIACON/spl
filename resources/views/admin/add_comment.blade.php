@extends('template.admin_template');
@section('content')


<table class="table">
    <thead class=" text-primary">
    <th>
       NAME
        </th>
        <th>
       EMAIL ID
        </th>
        <th>
          CMMENT
        </th>
       
        <th>
            ADD
        </th>
        <th>
            DELETE
        </th>

    </thead>
    <tbody>
    @foreach($comment as $comment)
        <tr>
        <td>
                {{$comment->name}}
            </td>
            <td>
                {{$comment->mail}}
            </td>
            <td>
            {{$comment->queries}}
            </td>
           
            <td class=""><a type="submit" class="btn btn btn-primary" href="{{ route('addcomment',$comment->id) }}">Add</a></td>

            <td class="">
               
                    <a type="submit" href="{{ route('deletecomment',$comment->id) }}" class="btn btn-outline-info">Delete</a>
               
            </td>
        </tr>
     
      
   @endforeach
    
        
    </tbody>
</table>
<hr>
<h2 class="te" style="text-align: center;">Added comment</h2>
<hr>
<table class="table " style="margin-top: 15px;">
    <thead class=" text-primary">
    <th>
       NAME
        </th>
        <th>
       EMAIL ID
        </th>
        <th>
          CMMENT
        </th>
       
       
        <th>
            DELETE
        </th>

    </thead>
    <tbody>
    @foreach($addcomment as $addcomment)
        <tr>
        <td>
                {{$addcomment->name}}
            </td>
            <td>
                {{$addcomment->mail}}
            </td>
            <td>
            {{$addcomment->queries}}
            </td>
           
           

            <td class="">
               
                    <a type="submit" href="{{ route('deleteaddcomment',$addcomment->id) }}" class="btn btn-outline-info">Delete</a>
               
            </td>
        </tr>
     
      
   @endforeach
    
        
    </tbody>
</table>


@endsection