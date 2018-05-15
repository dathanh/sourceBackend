<?php

namespace Backend\Controller;

use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\Routing\Router;


class AdminRolesController extends CrudController {

    public function initialize() {
        parent::initialize();
        Utils::useTables($this, ['FsCore.AdminPermissions', 'FsCore.AdminUsers', 'FsCore.AdminRoles']);
        $this->modelName = 'AdminRoles';
        $this->model = $this->AdminRoles;
    }

    public function delete($id) {
        if ($id == 1) {
            $this->Flash->error(__('Cannot edit Supper Admin.'), ['plugin' => 'FsCore']);
            return $this->redirect(['action' => 'index']);
        }
        $adminRole = $this->getObject($id);
        if (!empty($adminRole) && $this->AdminRoles->delete($adminRole)) {
            $this->AdminPermissions->deleteAll([
                'AdminPermissions.target_id' => $id,
                'AdminPermissions.target_type' => AdminPermission::TARGET_TYPE_ROLE,
            ]);
            $this->Flash->success(__('The data has been deleted.'), ['plugin' => 'FsCore']);
        } else {
            $this->Flash->error(__('The data could not be saved. Please, try again.'), ['plugin' => 'FsCore']);
        }
        return $this->redirect(['action' => 'index']);
    }

    public function permission($id) {
        if ($id == 1) {
            $this->Flash->error(__('Cannot change permission for Supper Admin.'), ['plugin' => 'FsCore']);
            return $this->redirect(['action' => 'index']);
        }
        $adminRole = $this->getObject($id);
        if (empty($adminRole)) {
            $this->Flash->error(__('Data cannot found.'), ['plugin' => 'FsCore']);
            return $this->redirect(['action' => 'index']);
        }
        $permission = $this->AdminPermissions->find('all', [
                    'conditions' => [
                        'AdminPermissions.target_id' => $id,
                        'AdminPermissions.target_type' => AdminPermission::TARGET_TYPE_ROLE,
                    ]
                ])->first();
        $permissionList = [];
        if (!empty($permission)) {
            $permissionList = json_decode($permission->content, true);
        }
        Utils::useComponents($this, ['FsCore.AdminCommon']);
        $actionList = $this->AdminCommon->getAllActions();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = Utils::clean($this->request->data);
            foreach ($actionList as $controller => $actions) {
                if (!empty($actions)) {
                    $moduleAllow = FALSE;
                    foreach ($actions as $action => $enable) {
                        $field = "{$controller}__{$action}";
                        if (!empty($data[$field])) {
                            $permissionList[$controller][$action] = 1;
                            $moduleAllow = TRUE;
                        } else {
                            $permissionList[$controller][$action] = 0;
                        }
                    }
                    if ($moduleAllow && isset($actions['index'])) {
                        $permissionList[$controller]['index'] = 1;
                    }
                }
            }
            if (empty($permission)) {
                $permission = $this->AdminPermissions->newEntity([
                    'target_id' => $id,
                    'target_type' => AdminPermission::TARGET_TYPE_ROLE,
                ]);
            }
            $permission->content = json_encode($permissionList);
            $this->AdminPermissions->save($permission);
            $this->Flash->success(__('The permission has been saved.'), ['plugin' => 'FsCore']);
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('actionList', 'permissionList', 'adminRole'));
        $this->set('_serialize', ['actionList', 'permissionList', 'adminRole']);
    }

    protected function _prepareObject(Entity $object) {
        $inputTypes = [
            'name' => [
                'input' => 'text',
                'label' => 'Role Name',
                'currentValue' => !empty($object) && !empty($object->name) ? $object->name : false,
            ],
        ];
        $inputTypes = array_merge($inputTypes, $this->_prepareCommonObject($object));
        $this->set('inputTypes', $inputTypes);
        return true;
    }

    protected function _mainNav($page = 'index', $id = false) {
        $navList = parent::_mainNav($page, $id);
        if ($id == 1) {
            unset($navList['delete']);
        } elseif ($id) {
            $navList['permission'] = [
                'url' => Router::url(['action' => 'permission', $id]),
                'label' => 'Set Permission',
                'icon' => 'wrench'
            ];
        }
        return $navList;
    }

    protected function _setActions($record) {
        $actions = parent::_setActions($record);
        if ($record->id == 1) {
            unset($actions['delete']);
        } elseif ($record->id) {
            $actions['permission'] = [
                'url' => Router::url(['action' => 'permission', $record->id]),
                'label' => 'Set Permission',
                'button' => 'info',
                'icon' => 'wrench'
            ];
        }
        return $actions;
    }

}
