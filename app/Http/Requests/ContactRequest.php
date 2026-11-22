<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    public const TOPICS = [
        'planificacion' => 'Planificación de tratamientos',
        'impresion' => 'Impresión de alineadores',
        'ambos' => 'Planificación e impresión',
        'otro' => 'Otra consulta',
    ];

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'clinic' => ['nullable', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'topic' => ['required', Rule::in(array_keys(self::TOPICS))],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            'privacy' => ['accepted'],
            'website' => ['nullable'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'clinic' => 'clínica',
            'email' => 'email',
            'phone' => 'teléfono',
            'topic' => 'tipo de consulta',
            'message' => 'mensaje',
            'privacy' => 'política de privacidad',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'Introduce un email válido.',
            'max' => 'El campo :attribute no puede superar :max caracteres.',
            'message.min' => 'El mensaje debe tener al menos :min caracteres.',
            'in' => 'Selecciona un :attribute válido.',
            'privacy.accepted' => 'Debes aceptar la política de privacidad.',
        ];
    }
}
