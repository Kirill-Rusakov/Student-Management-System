@extends('adminlte::page')
@section('content')
    <form action="{{route('students.update', $student->id)}}" method="post" class="mt-5">
        @csrf
        @method('patch')
        <h2 class="mb-3 text-dark">Update student</h2>
        <div class="mb-3">
            <label for="name" class="form-label text-dark">Name</label>
            <input type="text" name="name" class="form-control border-light bg-dark text-light" id="name" value="{{$student->name}}">
            @error('name')
                <div class="text-danger bg-light">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label text-dark">Surname</label>
            <input type="text" name="surname" class="form-control border-light bg-dark text-light" id="surname" value="{{$student->surname}}">
            @error('surname')
                <div class="text-danger bg-light">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label text-dark">Age</label>
            <input type="number" name="age" class="form-control border-light bg-dark text-light" id="age" value="{{$student->age}}">
            @error('age')
                <div class="text-danger bg-light">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="group" class="form-label text-dark">Group</label>
            <select class="form-select border-light bg-dark text-light" name="group_id" id="group">
                @foreach($groups as $group)
                    <option class="text-light" value="{{$group->id}}"
                    {{$group->id===$student->group_id?' selected':''}}
                    >{{$group->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-5">
            <label for="lessons" class="form-label text-dark">Lessons</label>
            <select class="form-select border-light bg-dark text-light" multiple name="lessons[]" id="lessons">
                @foreach($lessons as $lesson)
                    <option class="text-light" value="{{$lesson->id}}"
                    {{$student->lessons->contains('id', $lesson->id)?' selected':''}}
                    >{{$lesson->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary bg-dark text-light">Submit</button>
    </form>
@endsection