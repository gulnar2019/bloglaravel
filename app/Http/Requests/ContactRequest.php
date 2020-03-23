<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'name' => 'required',
          'subject' => 'required|min:5|max:50',
          'message' =>'required|min:5|max:200'
            //
        ];
    }


    public function attributes(){
      return [
        'name' => 'ad'
      ];
    }

    public function messages() {
      return [
        'name.required' => 'Ad daxil edin',
        'subject.required' => 'Movzu daxil edin'

      ];
    }


}
