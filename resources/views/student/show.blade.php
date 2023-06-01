@extends('layouts.index')
@section('content')
    <div class="card">
        <div class="card-header">Student Page</div>
        <div class="card-body">
            <div class="card-body">
                <p class="card-text">First Name : {{ $student->first_name }}</p>
                <p class="card-text">Last Name : {{ $student->last_name }}</p>
                <p class="card-text">Age : {{ $student->age }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
