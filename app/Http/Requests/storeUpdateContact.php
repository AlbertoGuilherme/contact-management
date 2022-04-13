<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateContact extends FormRequest
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

        $id = $this->segment(3);
        $rules = [

                'name' => "required|min:3|max:1000|unique:contacts,name,{$id},id",
                'email' => "required|email|unique:contacts,email,{$id},id",
                'contact' => "required|unique:contacts,contact,{$id},id|digits:9|"

        ];




        if($this->method() == 'PUT'){

            $rules['name'] =  ['nullable', 'min:3', 'max:1000'];
            $rules['email'] =  ['nullable', 'string', 'email', 'max:255'];
            $rules['contact'] = ['nullable', 'digits:9'];

        }
        return $rules;
    }
}
