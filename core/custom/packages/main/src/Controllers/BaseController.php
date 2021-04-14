<?php

namespace EvolutionCMS\Main\Controllers;

use Illuminate\Support\Facades\Cache;
use EvolutionCMS\Models\SiteContent;

class BaseController
{
    public $data = [];

    public function __construct()
    {
        $this->evo = EvolutionCMS();
        ksort($_GET);
        $cacheid = md5(json_encode($_GET));
        if ($this->evo->getConfig('enable_cache')) {
            $this->data = Cache::rememberForever($cacheid, function () {
                $this->globalElements();
                $this->render();
                return $this->data;
            });
        } else {
            $this->globalElements();
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }

    public function render()
    {

        $this->data['services'] = SiteContent::withTVs(['service_image'])
            ->active()
            ->where('parent', 2)
            ->orderBy('menuindex', 'asc')
            ->get()
            ->toArray();

        $this->data['sliders'] = SiteContent::withTVs(['slider_image'])
            ->active()
            ->where('parent', 7)
            ->orderBy('menuindex', 'asc')
            ->get()
            ->toArray();

        $this->data['cars'] = SiteContent::withTVs(['car_image'])
            ->active()
            ->where('parent', 8)
            ->orderBy('menuindex', 'asc')
            ->get()
            ->toArray();

        $this->data['price'] = $this->evo->runSnippet('multiTV', [
            'tvName' => 'price',
            'display' => 'all',
            'docid' => '9'
        ]);

        $this->data['documents'] = SiteContent::where('id', 10)
            ->first()
            ->toArray();

    }

    public function noCacheRender()
    {

    }

    public function globalElements()
    {
        $this->data['seo'] = SiteContent::withTVs([
            'keyw',
            'descr',
            'tel',
            'tel_digits',
            'logo',
            'site_name'
        ])
            ->where('site_content.id', 1)
            ->first()
            ->toArray();
    }

    public function sendToView()
    {
        $this->evo->addDataToView($this->data);
    }
}