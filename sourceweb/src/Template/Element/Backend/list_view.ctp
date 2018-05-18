		

<?php if (empty($objectList)) : ?>
<p class="text-warning text-center description-block"> <strong><?php echo __('Empty Data'); ?></strong></p>
<?php else: ?>
    <table id="tableList" class="table table-bordered table-striped wordWrap">
        <thead>
            <tr>
                <?php foreach (array_keys($objectList[0]) as $key): ?>
                    <?php if ($key != 'actions' && $key != 'id'): ?>
                        <th><?= $this->Paginator->sort($key) ?></th>
                    <?php endif; ?>
                <?php endforeach; ?>
                <th><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objectList as $object): ?>
                <tr>
                    <?php foreach ($object as $key => $value): ?>
                        <?php if (!empty($activationFields[$key])): ?>
                            <td>
                                <div class="btn-group" id="<?php echo $object['id']; ?>-<?php echo $key; ?>-btn">
                                    <button type="button" class="btn btn-info current-selection"><?php echo (!empty($activationFields[$key][$value]) ? $activationFields[$key][$value] : __($key)); ?></button>
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">&nbsp;</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php foreach ($activationFields[$key] as $optionKey => $optionValue): ?>
                                            <li id="<?php echo $object['id']; ?>-<?php echo $key; ?>-<?php echo $optionKey; ?>" style="display: <?php echo ($optionKey == $value ? 'none' : 'block'); ?>;">
                                                <a rel="async" href="#" ajaxify="<?php echo $this->Url->build(['action' => 'activate', $object['id'], $key, $optionKey], true); ?>">
                                                    <?php echo $optionValue; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </td>
                        <?php elseif (is_array($value) && $key != 'actions'): ?>
                            <td>
                                <?php if (!empty($value['type']) && $value['type'] == 'box'): ?>
                                    <span class="<?php echo (!empty($value['class']) ? $value['class'] : ''); ?>"><?php echo $value['value']; ?></span>
                                <?php elseif (!empty($value['path'])): ?>
                                    <?php $photoPath = $this->Cf->imageUrl($value['path']); ?>
                                    <a href="<?php echo $photoPath; ?>" class="thumbnail-link">
                                        <img src="<?php echo $photoPath; ?>" width="100" />
                                    </a>
                                <?php endif; ?>
                            </td>
                        <?php elseif ($key != 'actions' && $key != 'id'): ?>
                            <td><?php echo $value; ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <td class="actions">
                        <?php if (!empty($object['actions'])): ?>
                            <?php foreach ($object['actions'] as $action): ?>
                                <a class="mb5 btn btn-<?php echo $action['button']; ?>" href="<?php echo $action['url']; ?>" title="<?php echo __($action['label']); ?>">
                                    <i class="glyphicon glyphicon-<?php echo $action['icon']; ?> icon-white"></i>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <?php foreach (array_keys($objectList[0]) as $key): ?>
                    <?php if ($key != 'actions' && $key != 'id'): ?>
                        <th><?= $this->Paginator->sort($key) ?></th>
                    <?php endif; ?>
                <?php endforeach; ?>
                <th><?= __('Actions'); ?></th>
            </tr>
        </tfoot>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?> - <?= __('Total records') . ' ' . $totalRecords; ?></p>
    </div>
<?php endif; ?>