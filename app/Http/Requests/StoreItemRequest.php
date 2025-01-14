<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     * authorize メソッドを true にしないとビューでうまく表示されない理由は、リクエストがコントローラに到達する前に、authorize メソッドがリクエストを拒否する可能性があるためです。
     * Laravel の FormRequest クラスでは、リクエストの認可（authorization）を行うために authorize メソッドが提供されています。このメソッドが false を返す場合、リクエストは即座に拒否され、コントローラやビューには到達しません。
     */
    // 
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required','max:50'],
            'memo'=>['required','max:255'],
            'price'=>['required','numeric']
        ];
    }
}
