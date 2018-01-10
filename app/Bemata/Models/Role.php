<?php

namespace App\Bemata\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $tables = 'roles';

	public function user(){
    	return $this->hasMany('App\Bemata\Model\User');
    }

}
