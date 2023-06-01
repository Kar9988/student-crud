@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Students CRUD App</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Create Student">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Create Student
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->age }}</td>

                                <td>
                                    <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            View
                                        </button>
                                    </a>
                                    <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edit Student">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Edit
                                        </button>
                                    </a>

                                    <form method="POST" action="{{ url('/student' . '/' . $student->id) }}"
                                          accept-charset="UTF-8" style="display:inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
