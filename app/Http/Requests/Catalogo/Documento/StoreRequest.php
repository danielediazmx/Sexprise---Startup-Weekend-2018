<?php

namespace App\Http\Requests\Catalogo\Documento;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return User::isAdmin();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'clave' => 'required|max:50',
			'descripcion' => 'required|max:150',
			'tipo' => 'required|integer'
		];
	}
}
