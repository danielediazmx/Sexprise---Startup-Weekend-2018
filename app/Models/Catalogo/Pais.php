<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model
{
	use SoftDeletes;

	protected $fillable = ["clave", "descripcion", "abreviacion"];

	protected $dates = ["deleted_at"];
}
