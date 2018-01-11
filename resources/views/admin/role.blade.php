@extends('admin.master')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Role</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting new-role" title="Create new role"><i class="halflings-icon white user"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td class="center">
                                    @if($role->name !== 'Admin')
                                        <a data-id="{{ $role->id }}" title="Update role" class="role-update btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a data-id="{{ $role->id }}" title="Delete role" class="role-delete btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection
