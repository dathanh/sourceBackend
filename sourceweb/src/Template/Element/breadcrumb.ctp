<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?= (!empty($breadcrumb['controller'])) ? $breadcrumb['title'] : 'Welcome Admin Panel' ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?= $breadcrumb['home']['url'] ?>"> <?= $breadcrumb['home']['name'] ?></a>
            </li>
            <?php if (!empty($breadcrumb['controller'])): ?>
                <li>
                    <a href="<?= $breadcrumb['controller']['url'] ?>" > <?= (!empty($breadcrumb['action']['name'])) ? $breadcrumb['controller']['name'] : '<strong>' . $breadcrumb['controller']['name'] . '</strong>' ?></a>
                </li>
            <?php endif; ?>
            <?php if (!empty($breadcrumb['action']['name'])) : ?>
                <li class="active">
                    <strong><?= $breadcrumb['action']['name'] ?></strong>
                </li>
            <?php endif; ?>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>