<?php
use Cake\Utility\Inflector;
$title = Inflector::humanize(Inflector::underscore($this->request->params['controller']));
$issetAction = !empty($this->request->params['action']) && $this->request->params['action'] != 'index';
$actionName = $issetAction ? Inflector::humanize($this->request->params['action']) . ' ' : '';
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?=$actionName . $title?></h2>
        <ol class="breadcrumb">
            <li>
                <?= $this->Html->link(__('Dashboards'), ['controller' => 'AdminDashboard']) ?>
            </li>
            <li>
                <?=$this->Html->link(
                    $title,
                    ['controller' => $this->request->params['controller'], 'action' => 'index'],
                    ['class' => $this->request->params['action'] == 'index' ? 'active' : ''])?>
            </li>
            <?php
            if ($issetAction) {
                ?>
                <li class="active"><?=$actionName?></li>
            <?php
            }
            ?>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>