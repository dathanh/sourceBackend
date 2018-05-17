<div class="row">
    <div class="col-sm-12 m-b-xs">
        <?php foreach ($buttonTop as $action => $button): ?>
            <a class="btn btn-<?= $button['color'] ?>"  href="<?= $button['url'] ?>">
                <i class="fa fa-<?= $button['icon'] ?>"></i>
                <?= $button['name'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>