<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Provider extends FormRequest
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
         
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'user_name' => 'required|unique:provider',
                    'name' => 'required',
                    'password' => 'required|min:6',
                    'email' => 'required|email|unique:admin|unique:provider',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'user_name' => 'required|unique:provider,user_name,' . $this->get('id'),
                    'name' => 'required',
                    'password' => 'nullable',
                    'email' => 'required|email|unique:admin|unique:provider,email,' . $this->get('id'),
                ];
                
            }
            default:break;
        }
      
       
    }
    
    
   


}
