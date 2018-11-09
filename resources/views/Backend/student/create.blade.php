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
                        <input name="name" type="text" class="form-control" value="{{ old('name') }}" required autofocus>
                        @include('partials.error_block', ['item' => 'name'])
                    </div>
                </div>

                {{-- Matrik Number --}}
                <div class="form-group{{ $errors->has('matrix_number') ? ' has-error' : '' }}">
                    <label for="matrix_number" class="col-md-4 control-label">
                        Matrix Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <input name="matrix_number" type="text" class="form-control" value="{{ old('matrix_number') }}" required>
                        @include('partials.error_block', ['item' => 'matrix_number'])
                    </div>
                </div>

                {{-- IC Number --}}
                <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
                    <label for="ic_number" class="col-md-4 control-label">
                        IC NUmber
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <input name="ic_number" type="text" class="form-control" value="{{ old('ic_number') }}" required>
                        @include('partials.error_block', ['item' => 'ic_number'])
                    </div>
                </div>

                {{-- State --}}
                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    <label for="state" class="col-md-4 control-label">
                        State
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <select name="state" class="form-control" id="state" value="{{ old('state') }}" required>
                            @foreach($states as $state)
                                <option value="{{ old('state', $state->id) }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Status --}}
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label for="status" class="col-md-4 control-label">
                        Status
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <select name="state" class="form-control" id="state" value="{{ old('state') }}" required>
                            @foreach($states as $state)
                                <option value="{{ old('state', $state->id) }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
