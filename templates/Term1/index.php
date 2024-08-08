<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Term1> $term1
 */
?>
<div class="term1 index content">
    <?= $this->Html->link(__('New Term1'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Term1') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Student_id') ?></th>
                    <th><?= $this->Paginator->sort('English') ?></th>
                    <th><?= $this->Paginator->sort('Hindi') ?></th>
                    <th><?= $this->Paginator->sort('Marathi') ?></th>
                    <th><?= $this->Paginator->sort('Maths') ?></th>
                    <th><?= $this->Paginator->sort('EVS') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('percentage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($term1 as $term1): ?>
                <tr>
                    <td><?= $this->Number->format($term1->id) ?></td>
                    <td><?= $term1->hasValue('student') ? $this->Html->link($term1->student->name, ['controller' => 'Students', 'action' => 'view', $term1->student->id]) : '' ?></td>
                    <td><?= $this->Number->format($term1->English) ?></td>
                    <td><?= $this->Number->format($term1->Hindi) ?></td>
                    <td><?= $this->Number->format($term1->Marathi) ?></td>
                    <td><?= $this->Number->format($term1->Maths) ?></td>
                    <td><?= $this->Number->format($term1->EVS) ?></td>
                    <td><?= $this->Number->format($term1->total) ?></td>
                    <td><?= $this->Number->format($term1->percentage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $term1->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $term1->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $term1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term1->id)]) ?>
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
