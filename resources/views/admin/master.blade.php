@include('admin.partials.header')
@include('admin.partials.navigation')
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>

    @yield('content')
</div><!--/.fluid-container-->
<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="User">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>User</h3>
    </div>
    <div class="modal-body">
        <p>First Name: <span class="first-name"></span></p>
        <p>Last Name: <span class="last-name"></span></p>
        <p>Role: <span class="role"></span></p>
        <p>Created At: <span class="created-at"></span></p>
        <p>Status: <span class="status"></span></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="modal hide fade" id="UserCreate">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Create New User</h3>
    </div>
    <div class="modal-body">
        <form action="{{ route('users.create') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input name="first_name" id="first_name" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input name="last_name" id="last_name" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" id="email" class="form-control" type="email">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" id="phone" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input name="nickname" id="nickname" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" id="password" class="form-control" type="password">
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                        <option value="1">Administrator</option>
                </select>
            </div>    
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <div class="modal-footer">
    </div>
</div>

<div class="modal hide fade" id="UserUpdate">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Update User</h3>
    </div>
    <div class="modal-body">

        <div id='form-update' class='display:none;'></div>
        
        <form action="{{ route('users.update',['id' => 2]) }}" method="PUT" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input name="first_name" id="first_name" class="form-control" type="text" value="">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input name="last_name" id="last_name" class="form-control" type="text" value="">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" id="email" class="form-control" type="email" value="">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" id="phone" class="form-control" type="text" value="">
            </div>

            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input name="nickname" id="nickname" class="form-control" type="text" value="">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" id="password" class="form-control" type="password">
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                        <option value="1">Administrator</option>
                </select>
            </div>    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <div class="modal-footer">
    </div>
</div>

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="http://themifycloud.com">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>
@include('admin.partials.footer')
