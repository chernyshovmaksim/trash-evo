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

    }

    public function noCacheRender()
    {

    }

    public function globalElements()
    {

    }

    public function sendToView()
    {
        $this->evo->addDataToView($this->data);
    }
}