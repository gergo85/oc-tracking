<?php namespace Indikator\Tracking\Components;

use Cms\Classes\ComponentBase;

class GoogleEvent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.tracking::lang.component.google_name',
            'description' => 'indikator.tracking::lang.component.google_description'
        ];
    }

    public function onRun()
    {
        $this->addJs('/plugins/indikator/tracking/assets/google-event.js');
    }
}
