@extends('layouts.backend')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>All Student</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Matrix Number</th>
                            <th>IC Number</th>
                            <th>State</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->matrix_number }}</td>
                                <td>{{ $student->ic_number }}</td>
                                <td>{{ $student->state->name }}</td>
                                <td>
                                    @if($student->status == 'active')
                                        <span class="label label-success">{{ $student->status }}</span>
                                    @else
                                        <span class="label label-default">{{ $student->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="icon-menu9"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="/student/show/{{ $student->id  }}"><i class="icon-display"></i> View</a></li>
                                            <li><a href="/student/edit/{{ $student->id  }}"><i class="icon-pencil"></i> Edit</a></li>
                                            <li><a href="/student/destroy/{{ $student->id  }}"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection