<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\BackendController;

/**
 * AdminDashboard Controller
 */
class AdminDashboard1Controller extends BackendController {

    protected $toggleFields = ['feature', 'wfqwf'];
    protected $singlePhotos = [
        'thumbnail' => [
            'label' => 'thumbnail',
            'type' => 'upload',
            'isRequire' => true,
            'width' => 400,
            'height' => 400,
        ],
        'banner' => [
            'label' => 'banner',
            'type' => 'upload',
            'isRequire' => true,
            'width' => 400,
            'height' => 400,
        ],
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    protected function prepareObject() {
        $inputField = [
            'title' => [
                'label' => 'title fqwfqf',
                'type' => 'text',
                'value' => '',
                'validation' => ''
            ],
            'content' => [
                'label' => 'content efwef',
                'type' => 'textarea',
                'value' => '',
                'validation' => ''
            ],
            'age' => [
                'label' => 'age',
                'type' => 'dropdown',
                'options' => ['1', '2', 'a', 'b'],
                'value' => '',
                'validation' => ''
            ],
        ];
        return $inputField;
        ;
    }

}
