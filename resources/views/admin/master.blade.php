@include('admin.partials.header')
@include('admin.partials.navigation')
<div id="content" class="span10">
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
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>    
    </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
    </form>
</div>

<div class="modal hide fade" id="UserUpdate">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Update User</h3>
    </div>
    <div class="modal-body">

        <div id='form-update' class='display:none;'></div>
        
        <form action="{{ route('users.update',['id' => 2]) }}" method="POST" enctype="multipart/form-data">
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
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>    
    </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
    </form>
</div>

<div class="modal hide fade" id="RoleUpdate">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Role Update</h3>
    </div>
    <div class="modal-body">
        @foreach($roles as $role)
            @if($role->name !== 'Admin')
                <form action="{{ route('role.update',['id' => $role->id]) }}" method="PUT">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">{{ $role->name }}</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" name="{{ strtolower($role->name).'-view' }}" value="{{ $role->view }}" 
                                @if($role->view == 1)
                                    checked
                                @endif> View
                            </label>
                            <label class="checkbox inline">
                                <input type="checkbox" name="{{ strtolower($role->name).'-create' }}" value="{{ $role->create }}"
                                @if($role->create == 1)
                                    checked
                                @endif> Create
                            </label>
                            <label class="checkbox inline">
                                <input type="checkbox" name="{{ strtolower($role->name).'-update' }}" value="{{ $role->update }}"
                                @if($role->update == 1)
                                    checked
                                @endif> Update
                            </label>
                            <label class="checkbox inline">
                                <input type="checkbox" name="{{ strtolower($role->name).'-delete' }}" value="{{ $role->delete }}"
                                @if($role->delete == 1)
                                    checked
                                @endif> Delete
                            </label>
                        </div>
                    </div>
                <hr />
            @endif
        @endforeach
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
    </form>
</div>

<div class="modal hide fade" id="RoleCreate">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Create New Role</h3>
    </div>
    <div class="modal-body">
        <form action="{{ route('role.create') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" id="name" class="form-control" type="text">
            </div>
    
    </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
    </form>
</div>

<div class="clearfix"></div>
@include('admin.partials.footer')
