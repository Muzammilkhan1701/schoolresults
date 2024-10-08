<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Finalresult> $finalresults
 */
?>
<div class="finalresults index content">
    <?= $this->Html->link(__('New Finalresult'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finalresults') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Student_id') ?></th>
                    <th><?= $this->Paginator->sort('term1_total') ?></th>
                    <th><?= $this->Paginator->sort('term2_total') ?></th>
                    <th><?= $this->Paginator->sort('final_total') ?></th>
                    <th><?= $this->Paginator->sort('final_percentage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finalresults as $finalresult): ?>
                <tr>
                    <td><?= $this->Number->format($finalresult->id) ?></td>
                    <td><?= $finalresult->hasValue('student') ? $this->Html->link($finalresult->student->name, ['controller' => 'Students', 'action' => 'view', $finalresult->student->id]) : '' ?></td>
                    <td><?= $this->Number->format($finalresult->term1_total) ?></td>
                    <td><?= $this->Number->format($finalresult->term2_total) ?></td>
                    <td><?= $this->Number->format($finalresult->final_total) ?></td>
                    <td><?= $this->Number->format($finalresult->final_percentage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finalresult->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finalresult->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finalresult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finalresult->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
