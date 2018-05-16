<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="img/admin.jpg" />
                        <i class="ion ion-person"></i>
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold"> Admin</strong>
                            </span> 
                            <span class="text-muted text-xs block">Super Admin <b class="caret"></b></span> 
                        </span> 
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <?php foreach ($menuList as $menuSection): ?>
                <li class="special_link">
                    <a>
                        <span class="nav-label"><?= $menuSection['label'] ?></span>
                    </a>
                </li>
                <?php if (!empty($menuSection['subList'])): ?>
                    <?php foreach ($menuSection['subList'] as $menuItem): ?>
                        <li class="<?= ($this->request->getParam(['controller']) == $menuItem['controller']) ? 'active' : '' ?>">
                            <a href="index-2.html">
                                <i class="fa fa-<?= $menuItem['icon'] ?>"></i> 
                                <span class="nav-label"><?= $menuItem['label'] ?></span> 
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <?php foreach ($menuItem['subList'] as $subItem): ?>
                                    <li class="<?= $subItem['class'] ?>">
                                        <a href="<?= $subItem['url'] ?>"> 
                                            <i class="fa fa-circle-o"></i> 
                                            <?= $subItem['label'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>