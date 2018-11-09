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
                        {{ $user->name }}
                    </div>
                </div>

                {{-- Email --}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">
                        Email Address
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $user->email }}
                    </div>
                </div>

                {{-- ic_number --}}
                <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
                    <label for="ic_number" class="col-md-4 control-label">
                        IC Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $user->ic_number }}
                    </div>
                </div>

                {{-- phone_number --}}
                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                    <label for="phone_number" class="col-md-4 control-label">
                        Phone Number
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $user->phone_number }}
                    </div>
                </div>

                {{-- Role --}}
                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                    <label for="role" class="col-md-4 control-label">
                        Roles
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $user->role }}
                    </div>
                </div>

                {{-- Status --}}
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label for="status" class="col-md-4 control-label">
                        Status
                        <span class="text-danger"> * </span>
                    </label>
                    <div class="col-md-6">
                        {{ $user->status }}
                    </div>
                </div>

                <div>
                    <a class="btn btn-info" href="/user/edit/{{ $user->id  }}" role="button">Edit User</a>
                </div>
            </form>
        </div>
    </div>
@endsection