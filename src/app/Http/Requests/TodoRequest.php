<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// ToDoの入力内容をバリデーションしたいので、TodoRequestクラスを作成している
class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    // ここがfalseのままだと全てのリクエストを受け付けなくなってしまうので注意
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    // rules()には実際のバリデーションルールを指定
    public function rules()
    {
        return [
            // required : 入力が必須
            // max:? : 入力された値が指定の文字数以下（?は任意の文字数を指定）
            'content' => 'required|max:255',
        ];
    }

    public function messages()
{
    return [
        // 入力欄のname属性.ルール => メッセージ
        'content.required' => 'ToDoが入力されていません。',
        'content.max' => 'ToDoは :max 文字以内で入力してください。',
    ];
}
}
