<?php
namespace App\Bemata\Controllers;

use App\Http\Controllers\Controller; 
use App\Bemata\Models\Role;

class RoleController extends Controller {

	protected $role;

	public function __construct(Role $role) {
		$this->role = $role;
	}

	public function index() {
		return view('admin.role')->with('roles',$this->role->all());
	}

}