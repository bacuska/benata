@extends('admin.master')
@section('content')
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Small Quick Buttons</h2>
            </div>
            <div class="box-content">

                <a class="quick-button-small span1">
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
                <h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Date registered</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/01/21</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-success">Active</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/08/23</td>
                        <td class="center">Staff</td>
                        <td class="center">
                            <span class="label label-important">Banned</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/06/01</td>
                        <td class="center">Admin</td>
                        <td class="center">
                            <span class="label">Inactive</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dennis Ji</td>
                        <td class="center">2012/03/01</td>
                        <td class="center">Member</td>
                        <td class="center">
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>

                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection