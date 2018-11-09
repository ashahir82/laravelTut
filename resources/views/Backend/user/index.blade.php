@extends('layouts.backend')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>All Users</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>IC Number</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->ic_number }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    @if($user->status == 'active')
                                        <span class="label label-success">{{ $user->status }}</span>
                                    @else
                                        <span class="label label-default">{{ $user->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="icon-menu9"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="/user/show/{{ $user->id  }}"><i class="icon-display"></i> View</a></li>
                                            <li><a href="/user/edit/{{ $user->id  }}"><i class="icon-pencil"></i> Edit</a></li>
                                            <li><a href="/user/destroy/{{ $user->id  }}"><i class="icon-trash"></i> Delete</a></li>
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