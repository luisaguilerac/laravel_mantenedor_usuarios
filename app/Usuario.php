<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Watson\Validating\ValidatingTrait;

class Usuario extends Model
{
	use ValidatingTrait;
	protected $rules = [
	'nombre'    => 'unique',
	];
}
