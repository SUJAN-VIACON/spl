@extends('template.admin_template');
@section('content')



<form action="{{route('storeexam')}}" method="POST" enctype="multipart/form-data">
    @csrf


    <select class="form-select mb-5" name="class" aria-label="Default select example">
        <option disabled="disabled" selected="selected" value="">--choose class</option>
        <option value="8">class-8</option>
        <option value="9">class-9</option>

        <option value="10">class-10</option>
        <option value="11">class-11</option>
        <option value="12">class-12</option>
    </select>
    <select class="form-select mb-5" name="board" aria-label="Default select example">
        <option disabled="disabled" selected="selected" value="">--choose board</option>
        <option value="WBSC">WBSC</option>
        <option value="ICSC">ICSC</option>
        <option value="CBSC">CBSC</option>
    </select>
    <select class="form-select mb-5" name="course" aria-label="Default select example">
        <option disabled="disabled" selected="selected" value="">--choose course</option>
        <option value="BOARD">BOARD</option>
        <option value="JEE">JEE</option>
        <option value="NEET">NEET</option>
        <option value="NURSING">NURSING</option>
        <option value="PHARMACY">PHARMACY</option>
        <option value="JEXPO">JEXPO</option>
    </select>

    <select class="form-select mb-5" name="subject" aria-label="Default select example">
        <option disabled="disabled" selected="selected" value="">--subject</option>
        <option value="Physics">Physics</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Biology">Biology</option>
        <option value="English">English</option>
        <option value="Bengali/Hindi">Bengali/Hindi</option>
        <option value="History">History</option>
        <option value="Computer">Computer</option>
        <option value="Economics">Economics</option>
        <option value="Geography">Geography</option>
    </select>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Notice</label>
        <input type="text" name="notice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">type the notice for student</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Time</label>
        <input type="number" name="timeing" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">type the exam timeing in toltal second</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<hr>

<h3 class="my-3" style="text-align: center;">Exam Event</h3>
        <hr>
<table class="table">
    <thead class=" text-primary">
        <th>
            CLASS
        </th>

        <th>
            BOARD
        </th>
        <th>
            COURSE
        </th>
        <th>
            SUBJECT
        </th>
        <th>
            NOTICE
        </th>
        <th>
            TIME
        </th>
        <th>
            STUDENTS
        </th>
        <th>
            START/STOP
        </th>
         <th>
            SEND MAIL
        </th>
        <th>
            DELETE
        </th>

    </thead>
    <tbody>
        @foreach($exam as $exam)
        <tr>
            <td>
                {{$exam->class}}
            </td>

            <td class="text-primary">
                {{$exam->board}}
            </td>

            <td class="text-primary">
                {{$exam->course}}
            </td>
            <td class="text-primary">
                {{$exam->subject}}
            </td>
            <td class="text-primary">
                {{$exam->notice}}
            </td>
            <td class="text-primary">
                {{$exam->timeing}}
            </td>
            <td class=""><a type="submit" href="{{ route('examstudent',$exam->id) }}" class="btn btn-outline-info">View Students</a> </td>
            @if($exam->exam==0)
            <td class=""><a type="submit" href="{{ route('exam.event.start',$exam->id) }}" class="btn btn-outline-info">Start</a> </td>
            @else
            <td class=""><a type="submit" href="{{ route('exam.event.stop',$exam->id) }}" class="btn btn-outline-info">Stop</a> </td>
            @endif
 <td class=""><a type="submit" href="{{ route('exammail',$exam->id) }}" class="btn btn-outline-info">Send mail</a> </td>
            <td class=""><a type="submit" href="{{ route('examdelete',$exam->id) }}" class="btn btn-outline-info">Delete</a> </td>
        </tr>


        @endforeach
       

    </tbody>
</table>



     
 
@endsection