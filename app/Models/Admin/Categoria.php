<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
	use SoftDeletes;

	protected $fillable = ['name', 'image'];

	protected $dates = ['deleted_at'];
}
