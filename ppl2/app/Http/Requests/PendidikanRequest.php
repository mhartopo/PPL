<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PendidikanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nip' => 'required',
            'nama_institusi' => 'required',
            'gelar' => 'required',
            'jurusan' => 'required',
            'no_ijazah' => 'required',
            'tahun' => 'required|year'
        ];
    }
}
