<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    
    public function rules(): array
    {
        return [
            'ownerId'=>['default'=> auth()->id()],
            'name'=> ['required', 'string'],
            'CarId' => ['required', 'string'],
            
        ];
    }
}
