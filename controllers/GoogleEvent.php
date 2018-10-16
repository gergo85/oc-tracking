<?php namespace Indikator\Tracking\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Indikator\Tracking\Models\GoogleEvent as Item;
use Flash;
use Lang;

class GoogleEvent extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['indikator.tracking.google_event'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Tracking', 'tracking', 'googleevent');
    }

    public function onActivate()
    {
        if ($this->isSelected()) {
            $this->changeStatus(post('checked'), 2, 1);
            $this->setMessage('activate');
        }

        return $this->listRefresh();
    }

    public function onDeactivate()
    {
        if ($this->isSelected()) {
            $this->changeStatus(post('checked'), 1, 2);
            $this->setMessage('deactivate');
        }

        return $this->listRefresh();
    }

    public function onRemove()
    {
        if ($this->isSelected()) {
            foreach (post('checked') as $itemId) {
                if (!$item = Item::whereId($itemId)) {
                    continue;
                }

                $item->delete();
            }

            $this->setMessage('remove');
        }

        return $this->listRefresh();
    }

    /**
     * @return bool
     */
    private function isSelected()
    {
        return ($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds);
    }

    /**
     * @param $action
     */
    private function setMessage($action)
    {
        Flash::success(Lang::get('indikator.tracking::lang.flash.'.$action));
    }

    /**
     * @param $post
     * @param $from
     * @param $to
     */
    private function changeStatus($post, $from, $to)
    {
        foreach ($post as $itemId) {
            if (!$item = Item::where('status', $from)->whereId($itemId)) {
                continue;
            }

            $item->update(['status' => $to]);
        }
    }
}
