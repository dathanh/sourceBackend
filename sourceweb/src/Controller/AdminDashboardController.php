<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\BackendController;
use Cake\Routing\Router;

/**
 * AdminDashboard Controller
 */
class AdminDashboardController extends BackendController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->_buttonTopCustom();
    }

    protected function _buttonTopCustom() {
        $button = parent::_buttonTopCustom();
        $button['index'][] = [
            'name' => 'uewfffffffffffffff',
            'url' => Router::url(['controller' => 'AdminDashboard1', 'action' => 'edit']),
            'icon' => 'pencil-square-o',
            'color' => 'success',
        ];
        return $button;
    }

}
