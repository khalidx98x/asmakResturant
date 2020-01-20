<?php

namespace App\Http\Requests\Floor;

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
            'name' => 'required|max:255|unique:floors',
            'floor_manager_id' => 'required'
        ];
    }


    public function messages()
    {

        return [
            'name.required'=>'أدخل الإسم رجاء',
            'name.max'=>'طول الإسم قد تعدى المسموح',
            'name.unique'=>' الإسم موجود بالفعل',
            'floor_manager_id.required'=>'اختار مدير الطابق رجاء أو قم بإضافة مدير قبل ذلك'
        ];
    }
}
