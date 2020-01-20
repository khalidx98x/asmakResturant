<?php

namespace App\Http\Requests\FloorManager;

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:floor_Managers',
            'password' => 'required|min:6',
        ];
    }



    public function messages()
    {

        return [
            'name.required'=>'أدخل الإسم رجاء',
            'name.max'=>'طول الإسم قد تعدى المسموح',
            'email.max'=>'طول البريد قد تعدى المسموح',
            'email.required'=>'أدخل بريد المطعم رجاء',
            'email.email'=>'أدخل البريد بطريقة مسموحة',
            'email.unique'=>'البريد موجود بالفعل الرجاء كتابة بريد آخر',
            'password.required'=>'أدخل كلمة المرور',
            'password.min'=>'كلمة المرور يجب أن تكون ستة أحرف /أرقام على الأقل',
        ];
    }
}
