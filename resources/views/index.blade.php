@extends('adminlte::page')
@section('content')
    <h2 class="mb-3 pt-3 text-dark text-center">All students</h2>
    <table class="table table-bordered border-light text-center mb-5">
        <thead>
            <tr>
            <th class="bg-dark text-light" scope="col">№</th>
            <th class="bg-dark text-light" scope="col">Name</th>
            <th class="bg-dark text-light" scope="col">Surname</th>
            <th class="bg-dark text-light" scope="col">Age</th>
            <th class="bg-dark text-light" scope="col">Group</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
            <th class="bg-dark text-light" scope="row">{{$student->id}}</th>
            <td class="bg-dark text-light"><a href="{{route('students.show', $student->id)}}" class="link-underline-dark text-light">{{$student->name}}</a></td>
            <td class="bg-dark text-light">{{$student->surname}}</td>
            <td class="bg-dark text-light">{{$student->age}}</td>
            <td class="bg-dark text-light">{{$student->group_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$students->links()}}
@endsection