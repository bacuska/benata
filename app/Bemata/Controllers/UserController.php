<?php
namespace App\Bemata\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest; 
use App\Http\Requests\UpdateUserRequest; 
use App\Bemata\Models\User;
use App\Bemata\Models\Role;

class UserController extends Controller {

    protected $user;
    protected $role;

    public function __construct(User $user, Role $role){
        $this->user = $user;
        $this->role = $role;
    }

    public function index() {
        return view('admin.index')->with('users', $this->user->all())->with('roles', $this->role->all());
    }

    public function apiUser($id) {
        $response = array(
            'status' => 'Success',
            'msg' => 'Find user successfully',
            'data' => $this->user->find($id)
        );

        return \Response::json($response);
    }

    public function apiUserCreate(CreateUserRequest $request) {
        $this->user->email      = $request->email;
        $this->user->first_name = $request->first_name;
        $this->user->last_name  = $request->last_name;
        $this->user->nickname   = $request->nickname;
        $this->user->role_id    = $request->role;
        $this->user->password   = bcrypt($request->password);
        $this->user->phone      = $request->phone;
        $this->user->save();
        return redirect()->back()->with('msg','User created successfully.');
    }

    public function apiUserUpdate(UpdateUserRequest $request, $id) {
        $user = $this->user->find($id);
        $user->email      = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->nickname   = $request->nickname;
        $user->role_id    = $request->role;
        $user->phone      = $request->phone;
        $user->save();
        if (!$request->password == '') {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with('msg','User updated successfully.');
    }

}
