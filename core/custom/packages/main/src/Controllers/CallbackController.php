<?php

namespace EvolutionCMS\Main\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CallbackController
{
    public function form(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['required']
        ]);



        if (!$validator->fails()){
            evolutionCMS()->sendmail(
                [
                    'from' => 'eurogruzchiki@yandex.ru',
                    'to' => 'eurogruzchiki@yandex.ru, chernyshovmaksim56@gmail.com',
                    'subject' => 'Запрос на звонок с мусоровывоз54.рф',
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