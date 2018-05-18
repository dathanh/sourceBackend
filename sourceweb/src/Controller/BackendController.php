<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\Entity;
use Cake\Routing\Router;
use Cake\Core\Configure;
use Cake\Utility\Inflector;
use Cake\Event\Event;
use App\Utility\Utils;

abstract class BackendController extends Controller {

    protected $toggleFields = [];
    protected $multiLanguageFields;
    protected $singlePhotos;
    protected $activationFields;
    public static $_globalObjects = [
        'components' => [],
        'tables' => []
    ];
    public static $_instance = null;

//    protected abstract function _prepareObject();

    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        self::$_instance = $this;
        Utils::useComponents($this, ['Navigation']);
        $menuList = $this->Navigation->getNavList($this->request);
        $breadrumb = $this->createBreadcrumb();
        $buttonTop = $this->_buttonTopCustom();
        $this->showButtonTop($buttonTop);

        $this->set('menuList', $menuList);
        $this->set('breadcrumb', $breadrumb);
    }

    protected function createBreadcrumb() {
        $controler = $this->request->getParam(['controller']);
        $action = $this->request->getParam(['action']);
        if (($controler == 'AdminDashboard') && ($action == 'index')) {
            $breadcrumb = [
                'home' => [
                    'name' => '<strong>Home</strong>',
                    'url' => Router::url(['controller' => 'AdminDashboard', 'action' => 'index']),
                ],
            ];
            return $breadcrumb;
        } else {
            $breadcrumb = [
                'home' => [
                    'name' => 'Home',
                    'url' => Router::url(['controller' => 'AdminDashboard', 'action' => 'index']),
                ],
                'controller' => [
                    'name' => Inflector::humanize(Inflector::underscore($controler)),
                    'url' => Router::url(['controller' => $controler, 'action' => 'index']),
                ],
                'action' => [
                    'name' => ($action == 'index') || (empty($action)) ? '' : Inflector::humanize(Inflector::underscore($action)),
                ],
                'title' => ($action == 'index') ? Inflector::humanize(Inflector::underscore($controler)) : Inflector::humanize(Inflector::underscore($action . " $controler"))
            ];
            return $breadcrumb;
        }
    }

    protected function showButtonTop($buttonTop) {
        $action = $this->request->getParam(['action']);
        switch ($action) {
            case 'index':
                $this->set('buttonTop', $buttonTop['index']);
                break;
            case 'view':
                $this->set('buttonTop', $buttonTop['view']);
                break;
            case 'edit':
                $this->set('buttonTop', $buttonTop['edit']);
                break;
            case 'add':
                $this->set('buttonTop', $buttonTop['add']);
                break;
            default :
                $this->set('buttonTop', '');
                break;
        }
    }

    protected function _buttonTopCustom() {
        $controller = $this->request->getParam(['controller']);
        $buttonTop = [
            'index' => [
                [
                    'name' => Inflector::humanize(Inflector::underscore("Add $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'add']),
                    'icon' => 'plus',
                    'color' => 'success',
                ],
            ],
            'add' => [
                [
                    'name' => Inflector::humanize(Inflector::underscore("List $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'index']),
                    'icon' => 'list',
                    'color' => 'primary',
                ],
            ],
            'edit' => [
                [
                    'name' => Inflector::humanize(Inflector::underscore("List $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'index']),
                    'icon' => 'list',
                    'color' => 'primary',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("Add $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'add']),
                    'icon' => 'plus',
                    'color' => 'success',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("View $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'view']),
                    'icon' => 'eye',
                    'color' => 'warning',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("Delete $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'delete']),
                    'icon' => 'trash',
                    'color' => 'danger',
                ],
            ],
            'view' => [
                [
                    'name' => Inflector::humanize(Inflector::underscore("List $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'index']),
                    'icon' => 'list',
                    'color' => 'primary',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("Add $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'add']),
                    'icon' => 'plus',
                    'color' => 'success',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("View $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'view']),
                    'icon' => 'eye',
                    'color' => 'warning',
                ],
                [
                    'name' => Inflector::humanize(Inflector::underscore("Delete $controller")),
                    'url' => Router::url(['controller' => $controller, 'action' => 'delete']),
                    'icon' => 'trash',
                    'color' => 'danger',
                ],
            ]
        ];
        return $buttonTop;
    }

    public function index() {
        $this->render('/Element/Backend/list_view');
    }

    public function add() {
//        $submitData = $this->prepareSubmitData($this->request->getData());
//        $this->createUpdate($submitData);
        $this->showUpdateField();
        $this->render('/Element/Backend/create_update_view');
    }

    public function edit() {
//        $this->prepareSubmitData();
//        $this->createUpdate($submitData);
            debug($this->request->getData());
            die;
        $this->showUpdateField();
        $this->render('/Element/Backend/create_update_view');
    }

    protected function prepareSubmitData($submitData) {
        
    }

    protected function createUpdate($submitData) {
        
    }

    protected function showUpdateField() {
        $inputField = $this->prepareObject();

        if (!empty($this->toggleFields)) {
            $toggleFields = $this->toggleFields;
            if (is_array($toggleFields)) {
                foreach ($toggleFields as $key => $fieldInput) {
                    $toggleFields[$fieldInput] = [
                        'label' => ucfirst($fieldInput),
                        'type' => 'toggle',
                        'value' => '',
                    ];
                    unset($toggleFields[$key]);
                }
                $inputField = array_merge($inputField, $toggleFields);
            } else {
                $inputField[$toggleFields] = [
                    'label' => ucfirst($toggleFields),
                    'type' => 'toggle',
                    'value' => '',
                ];
            }
            $inputField = array_merge($inputField, $toggleFields);
        }
        if (!empty($this->singlePhotos)) {
            $singlePhotos = $this->singlePhotos;
            foreach ($singlePhotos as $key => $fieldInput) {
                $fieldInput['type'] = 'upload';
            }

            $inputField = array_merge($inputField, $singlePhotos);
        }

        $activationField = $this->activationField;
        $this->set('inpuField', $inputField);
    }

    protected abstract function prepareObject();
}
