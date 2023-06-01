@extends('layouts.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Create Student Page
        </div>
        <div class="card-body">
            <form action="{{ url('student') }}" method="post">
                @csrf
                <label>First Name</label></br>
                <input type="text" name="first_name" class="form-control mt-1"></br>
                <label>Last Name</label></br>
                <input type="text" name="last_name" class="form-control mt-1"></br>
                <label>Age</label></br>
                <input type="number" name="age" class="form-control mt-1"></br>
                <button type="submit" class="btn btn-success">Save</button></br>
            </form>
        </div>
    </div>
@endsection
