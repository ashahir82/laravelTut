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
                        <input name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus>
                        @include('partials.error_block', ['item' => 'name'])
                    </div>
                </div>

                {{-- Email --}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">
                        Email Address
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                        @include('partials.error_block', ['item' => 'email'])
                    </div>
                </div>

                {{-- ic_number --}}
                <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
                    <label for="ic_number" class="col-md-4 control-label">
                        IC Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <input name="ic_number" type="text" class="form-control" value="{{ old('ic_number', $user->ic_number) }}" required>
                        @include('partials.error_block', ['item' => 'ic_number'])
                    </div>
                </div>

                {{-- phone_number --}}
                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                    <label for="phone_number" class="col-md-4 control-label">
                        Phone Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number', $user->phone_number) }}" required>
                        @include('partials.error_block', ['item' => 'phone_number'])
                    </div>
                </div>

                {{-- Role --}}
                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                    <label for="role" class="col-md-4 control-label">
                        Roles
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        <select name="role" class="form-control" id="role" value="{{ old('role', $user->role) }}" required>
                            @foreach($roles as $role)
                                <option @if (old('state', $user->role) == $role->name) selected @endif value="{{ $role->name }}">{{ $role->nick }}</option>
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
                        <select name="status" class="form-control" id="status" value="{{ old('status', $user->status) }}" required>
                            @foreach($roles as $role)
                                <option @if (old('state', $user->role) == $role->name) selected @endif value="{{ $role->name }}">{{ $role->nick }}</option>
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
