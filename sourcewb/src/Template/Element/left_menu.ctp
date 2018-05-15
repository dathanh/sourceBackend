<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">
                                    <?=$this->request->session()->read('Auth.User.first_name')?>
                                    <?=$this->request->session()->read('Auth.User.last_name')?>
                                </strong>
                            </span>
                            <span class="text-muted text-xs block">Action <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><?= $this->Html->link(__('Profile'), ['controller' => 'AdminUsers', 'action' => 'view', $this->request->session()->read('Auth.User.id')]) ?></li>
                        <li class="divider"></li>
                        <li><a href="<?= $this->Url->build(["controller" => "AdminUsers", "action" => "logout"]); ?>">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li <?= $this->request->params['controller'] == 'AdminDashboard' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(["controller" => "AdminDashboard"]); ?>">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label"><?=__('Dashboards') ?></span>
                </a>
            </li>

            <li <?= $this->request->params['controller'] == 'Users' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">
                    <i class="fa fa-group"></i>
                    <span class="nav-label"><?=__('Users')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add User'), ['controller' => 'Users', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'Categories' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('Categories')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'Categories' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'Categories' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Category'), ['controller' => 'Categories', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'Articles' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'index']); ?>">
                    <i class="fa fa-file-text-o"></i>
                    <span class="nav-label"><?=__('Articles')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'Articles' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'Articles' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Article'), ['controller' => 'Articles', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'MeditationCategories' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'MeditationCategories', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('Meditation Categories')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'MeditationCategories' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Meditation Categories'), ['controller' => 'MeditationCategories', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'MeditationCategories' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Meditation Category'), ['controller' => 'MeditationCategories', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>


            <li <?= $this->request->params['controller'] == 'MeditationItems' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'MeditationItems', 'action' => 'index']); ?>">
                    <i class="fa fa-file-text-o"></i>
                    <span class="nav-label"><?=__('Meditation Items')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'MeditationItems' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Meditation Items'), ['controller' => 'MeditationItems', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'MeditationItems' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Meditation Item'), ['controller' => 'MeditationItems', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'MeditationQuestions' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'MeditationQuestions', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('Meditation Questions')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'MeditationQuestions' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Meditation Questions'), ['controller' => 'MeditationQuestions', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'MeditationCategories' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Meditation Question'), ['controller' => 'MeditationQuestions', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'MeditationAnswers' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'MeditationAnswers', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('Meditation Answers')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'MeditationAnswers' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Meditation Answers'), ['controller' => 'MeditationAnswers', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'MeditationAnswers' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Meditation Answer'), ['controller' => 'MeditationAnswers', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'News' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('News')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'News' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'News' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add News'), ['controller' => 'News', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'NewsCategories' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'NewsCategories', 'action' => 'index']); ?>">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-label"><?=__('News Categories')?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'NewsCategories' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List News Categories'), ['controller' => 'NewsCategories', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'NewsCategories' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add News Category'), ['controller' => 'NewsCategories', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li><br/></li>

            <li <?= $this->request->params['controller'] == 'AdminUsers' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'AdminUsers', 'action' => 'index']); ?>">
                    <i class="fa fa-diamond"></i>
                    <span class="nav-label"><?=__('Admin User')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'AdminUsers' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Admin Users'), ['controller' => 'AdminUsers', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'AdminUsers' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Admin User'), ['controller' => 'AdminUsers', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'AdminRoles' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'AdminRoles', 'action' => 'index']); ?>">
                    <i class="fa fa-flask"></i>
                    <span class="nav-label"><?=__('Admin Roles')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'AdminRoles' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Admin Roles'), ['controller' => 'AdminRoles', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'AdminRoles' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Admin Role'), ['controller' => 'AdminRoles', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'AdminPermissions' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'AdminPermissions', 'action' => 'index']); ?>">
                    <i class="fa fa-database"></i>
                    <span class="nav-label"><?=__('Admin Permissions')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'AdminPermissions' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Admin Permissions'), ['controller' => 'AdminPermissions', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'AdminPermissions' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Admin Permission'), ['controller' => 'AdminPermissions', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'AdminWhitelistIps' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'AdminWhitelistIps', 'action' => 'index']); ?>">
                    <i class="fa fa-flask"></i>
                    <span class="nav-label"><?=__('Admin White list IP')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?></span>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'AdminWhitelistIps' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Admin White list IP'), ['controller' => 'AdminWhitelistIps', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'AdminWhitelistIps' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Admin New IP'), ['controller' => 'AdminWhitelistIps', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'Languages' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'Languages', 'action' => 'index']); ?>">
                    <i class="fa fa-language"></i>
                    <span class="nav-label"><?=__('Languages')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'Languages' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'Languages' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Languages'), ['controller' => 'Languages', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>

            <li <?= $this->request->params['controller'] == 'Countries' ? 'class="active"' : ''?>>
                <a href="<?= $this->Url->build(['controller' => 'Countries', 'action' => 'index']); ?>">
                    <i class="fa fa-language"></i>
                    <span class="nav-label"><?=__('Countries')?></span>
                    <span class="label label-primary pull-right"><?=__('A')?>
                </a>
                <ul class="nav nav-second-level">
                    <li <?= $this->request->params['controller'] == 'Countries' && $this->request->params['action'] == 'index' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?>
                    </li>
                    <li <?= $this->request->params['controller'] == 'Countries' && $this->request->params['action'] == 'add' ? 'class="active"' : ''?>>
                        <?= $this->Html->link(__('Add Countries'), ['controller' => 'Countries', 'action' => 'add']) ?>
                    </li>
                </ul>
            </li>


        </ul>

    </div>
</nav>
