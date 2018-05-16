
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h1><?php echo $headerTitle; ?></h1>
        <ol class="breadcrumb">
            <?php foreach ($breadcrumb as $index => $section): ?>
                <li class="<?php echo ($index == count($breadcrumb) - 1 ? 'active' : ''); ?>">
                    <a class="<?php echo $section['class']; ?>" href="<?php echo $section['href']; ?>">
                        <?php echo ($index == count($breadcrumb) - 1 ? '<strong>' . $section['title'] . '</strong>' : $section['title']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>