<?php

namespace App\Http\Requests\Catalogo\CalendarioExamenExtemporaneo;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
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
            'id_etapa_extemporaneo'=>'required',
            'id_asignatura'=>'required',
        ];
    }
}