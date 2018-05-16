<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\I18n\Date;
use Cake\Routing\Router;
use Cake\Validation\Validation;
use Cake\Utility\Inflector;
use Cake\Core\Configure;
use App\Utility\Utils;
use Cake\Controller\Component;

abstract class BackendsController extends AppController {

    protected $slug = false;
    protected $model = null;
    protected $modelName = false;
    protected $invalidActions = [];
    protected $listUnsetFields = [];
    protected $unsetFields = [];
    protected $toggleFields = [];
    protected $multiLangFields = [];

    public function initialize() {
        parent::initialize();

        $this->Session = $this->request->getSession();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        Utils::useComponents($this, ['Navigation']);
        $menuList = $this->Navigation->getNavList($this->request);
        $this->_breadcrumb();
        $this->set('menuList', $menuList);
    }

    public function edit() {
        $submitData = $this->_prepareSubmitData();
        $this->_updateData($submitData);
    }

    public function add() {
        $submitData = $this->_prepareSubmitData();
        $this->_updateData($submitData);
    }

    protected function _prepareSubmitData() {
        $submitData = $this->request->getData();
        return $submitData;
    }

    protected function _updateData() {
        
    }

    protected function _prepareCommonObject(Entity $object) {
        $inputTypes = [];

        return $inputTypes;
    }

    protected abstract function _prepareObject(Entity $object);

    protected function _breadcrumb() {
        $controller = $this->request->params['controller'];
        $action = $this->request->params['action'];
        $title = __(Inflector::humanize(Inflector::underscore($controller)));

        $breadcrumb = array(
            array(
                'title' => __('Admin Panel'),
                'href' => '#',
                'class' => 'fake',
            ),
            array(
                'title' => $title,
                'href' => Router::url(['controller' => $controller, 'action' => 'index']),
                'class' => '',
            ),
        );
        if ($action != 'index') {
            $actionTitle = Inflector::humanize($action);
            $breadcrumb[] = array(
                'title' => $actionTitle,
                'href' => Router::url(['controller' => $controller, 'action' => $action]),
                'class' => '',
            );
            $title = __($actionTitle) . ' ' . __($title);
        }
        $this->set('breadcrumb', $breadcrumb);
        $this->set('headerTitle', $title);
    }

}
