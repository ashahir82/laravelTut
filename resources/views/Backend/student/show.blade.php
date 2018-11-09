@extends('layouts.backend')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST">
                {{ csrf_field() }}

                {{-- Name --}}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">
                        Name
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $student->name }}
                    </div>
                </div>

                {{-- Matrik Number --}}
                <div class="form-group{{ $errors->has('matrix_number') ? ' has-error' : '' }}">
                    <label for="matrix_number" class="col-md-4 control-label">
                        Matrix Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $student->matrix_number }}
                    </div>
                </div>

                {{-- IC Number --}}
                <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
                    <label for="ic_number" class="col-md-4 control-label">
                        IC NUmber
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $student->ic_number }}
                    </div>
                </div>

                {{-- State --}}
                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    <label for="state" class="col-md-4 control-label">
                        State
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $student->state->name }}
                    </div>
                </div>

                {{-- Status --}}
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label for="status" class="col-md-4 control-label">
                        Status
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $student->status }}
                    </div>
                </div>

                <div>
                    <a class="btn btn-info" href="/student/edit/{{ $student->id  }}" role="button">Edit Student</a>
                </div>
            </form>
        </div>
    </div>
@endsection