<?php

namespace EvolutionCMS\Main\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CallbackController
{
    public function form(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'phone' => ['required']
        ],[
            'name.required' => 'Поле имя обязательно для заполнения.',
            'name.min' => 'Имя должно содержать минимум 5 символов.',
            'phone.required' => 'Поле телефона обязательно для заполнения.'
        ]);



        if (!$validator->fails()){

        } else {
            $data = [
                'output' => View::make('partials.form', $request)->withErrors($validator)->toHtml(),
                'errors' => $validator->errors()
            ];
        }

        return \Response::json($data);
    }
}