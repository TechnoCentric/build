<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class storeMaterials extends Request
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
            'amount_paid' => 'required|numeric',
            'payment_date' => 'required',
            'paid_to' => 'required|string',
            'payment_type' => 'required',
            'material_name' => 'required|string',
            'lpo' => 'required|string',
            'project_id' => 'required',
        ];
    }
}
