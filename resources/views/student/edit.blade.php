@extends('layouts.index')
@section('content')
    <div class="card">
        <div class="card-header">Update Student Page</div>
        <div class="card-body">
            <form action="{{ url('student/' .$student->id) }}" method="post">
                @csrf
                @method("PATCH")
                <input type="hidden" name="id" value="{{$student->id}}" />
                <label>First Name</label></br>
                <input type="text" name="first_name" value="{{$student->first_name}}" class="form-control mt-1"></br>
                <label>Last Name</label></br>
                <input type="text" name="last_name" value="{{$student->last_name}}" class="form-control mt-1"></br>
                <label>Age</label></br>
                <input type="number" name="age" value="{{$student->age}}" class="form-control mt-1"></br>
                <button type="submit" class="btn btn-success">Update</button></br>
            </form>
        </div>
    </div>
@endsection
