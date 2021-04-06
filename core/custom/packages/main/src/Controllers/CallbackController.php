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
        ]);



        if (!$validator->fails()){
            evolutionCMS()->sendmail(
                [
                    'from' => 'info@ddaproduction.com',
                    'to' => 'chernyshovmaksim56@gmail.com',
                    'subject' => 'Тестовое письмо с сайта вывоза мусора',
                    'body' => View::make('partials.thanks', $request)->toHtml()
                ]
            );
            $data = [
                'output' => View::make('partials.success', $request)->toHtml()
            ];
        } else {
            $data = [
                'errors' => $validator->errors()
            ];
        }

        return \Response::json($data);
    }
}