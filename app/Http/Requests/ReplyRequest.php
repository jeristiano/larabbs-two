<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];

    }

    public function messages()
    {
        return [
            'content.min'=>'最少两个字符'
        ];
    }
}
