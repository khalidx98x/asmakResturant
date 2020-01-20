<?php

namespace App\Http\Requests\Table;

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
            'floor_id' => 'required'
        ];
    }


    public function messages()
    {

        return [
            'floor_id.required'=>'اختار الطابق رجاء أو قم بإضافة طابق قبل ذلك'
        ];
    }
}
