<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Cake\Routing\Router;
use App\Utility\Utils;

class NavigationComponent extends Component {

    public function getNavList($request) {
        if (empty($request)) {
            return $request = [];
        }
        $controller = (!empty($request->getParam(['controller']))) ? $request->getParam(['controller']) : false;
        $action = ($request->getParam(['action'])) ? $request->getParam(['action']) : false;
        $menuList = [
            'content' => [
                'label' => 'Content',
                'subList' => [
                    'checks' => [
                        'label' => 'Check Management',
                        'icon' => 'th-large',
                        'controller' => 'Checks',
                        'subList' => [
                            [
                                'label' => 'List checks',
                                'class' => $action == 'index' ? 'active' : '',
                                'url' => Router::url(['controller' => 'Checks', 'action' => 'index'])
                            ],
                            [
                                'label' => 'Add check',
                                'class' => $action == 'add' ? 'active' : '',
                                'url' => Router::url(['controller' => 'Checks', 'action' => 'add'])
                            ],
                        ]
                    ]
                ],
            ],
        ];
        return $menuList;
    }

}
