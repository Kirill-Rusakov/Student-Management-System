@extends('adminlte::page')
@section('content')
    <h2 class="mb-5 pt-5 text-dark">Infomation about student № {{$student->id}}: "{{$student->name}} {{$student->surname}}"</h2>
    <table class="table table-bordered border-light text-center mb-5">
        <thead>
            <tr>
            <th class="bg-dark text-light" scope="col">Name</th>
            <th class="bg-dark text-light" scope="col">Surname</th>
            <th class="bg-dark text-light" scope="col">Age</th>
            <th class="bg-dark text-light" scope="col">Group</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="bg-dark text-light">{{$student->name}}</td>
            <td class="bg-dark text-light">{{$student->surname}}</td>
            <td class="bg-dark text-light">{{$student->age}}</td>
            <td class="bg-dark text-light">{{$student->group_id}}</td>
            </tr>
        </tbody>
    </table>
    <h4 class="text-dark mb-3">Possible actions with recording</h4>
    <div><a href="{{route('students.edit', $student->id)}}" class="link-underline-dark text-dark mb-5">Update recording</a></div>
    <form action="{{route('students.destroy', $student->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-link link-underline-dark text-dark p-0">Delete recording</button>
    </form>
@endsection