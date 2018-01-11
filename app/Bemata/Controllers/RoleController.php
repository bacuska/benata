<?php
namespace App\Bemata\Controllers;

use App\Http\Controllers\Controller; 
use App\Http\Requests\CreateUserRequest; 
use App\Bemata\Models\Role;

class RoleController extends Controller {

	protected $role;

	public function __construct(Role $role) {
		$this->role = $role;
	}

	public function index() {
		return view('admin.role')->with('roles',$this->role->all());
	}

	public function apiRoleCreate(CreateUserRequest $request) {
        $this->role->name = $request->name;
        $this->role->save();
        return redirect()->back()->with('msg','Role created successfully.');
	}

	public function rolesModal() {
		return view('admin.master')->with('roles',$this->role->all());	
	}

}