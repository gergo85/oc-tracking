<?php namespace Indikator\Tracking\Models;

use Model;
use File;

class GoogleEvent extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $table = 'indikator_tracking_google_event';

    public $rules = [
        'name'   => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:indikator_tracking_google_event'],
        'action' => 'required',
        'status' => 'required|between:1,2|numeric'
    ];

    public function afterSave()
    {
        $sql  = $this::where('status', 1)->get();
        $json = '';

        foreach ($sql as $item) {
            $json .= ',{"name":"'.$item->name.'","category":"'.$item->category.'","action":"'.$item->action.'","label":"'.$item->label.'","value":"'.$item->value.'","auto_category":"'.$item->auto_category.'","auto_label":"'.$item->auto_label.'"}';
        }

        $json = '['.substr($json, 1).']';

        File::put(base_path().'/plugins/indikator/tracking/assets/google-event.txt', $json);
    }
}
