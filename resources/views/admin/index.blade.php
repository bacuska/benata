@extends('admin.master')
@section('content')
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Small Menu</h2>
            </div>
            <div class="box-content">

                <a class="quick-button-small span1" href="{{ route('users.all') }}">
                    <i class="icon-group"></i>
                    <p>Users</p>
                    <span class="notification blue">7</span>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-comments-alt"></i>
                    <p>Comments</p>
                    <span class="notification green">4</span>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-shopping-cart"></i>
                    <p>Orders</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-barcode"></i>
                    <p>Products</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-envelope"></i>
                    <p>Messages</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-calendar"></i>
                    <p>Calendar</p>
                    <span class="notification red">8</span>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-beaker"></i>
                    <p>Projects</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-thumbs-up"></i>
                    <p>Likes</p>
                    <span class="notification green">1</span>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-heart-empty"></i>
                    <p>Favorites</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-bullhorn"></i>
                    <p>Notifications</p>
                    <span class="notification yellow">7</span>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-cogs"></i>
                    <p>Settings</p>
                </a>
                <a class="quick-button-small span1">
                    <i class="icon-dashboard"></i>
                    <p>Dashboard</p>
                </a>

                <div class="clearfix"></div>
            </div>
        </div><!--/span-->

    </div><!--/row-->
    <hr>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Users</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting new-user" title="Create new user"><i class="halflings-icon white user"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date registered</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td class="center">{{ $user->created_at }}</td>
                                <td class="center">{{ $user->role->name }}</td>
                                <td class="center">
                                    @if($user->is_active == 1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td class="center">
                                    <a data-id="{{ $user->id }}" class="user-action btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a data-id="{{ $user->id }}" class="user-update btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a data-id="{{ $user->id }}" class="user-delete btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection