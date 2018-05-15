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

class BackendsController extends Controller {

    public function initialize() {
        parent::initialize();
        $this->Session = $this->request->session();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

}
