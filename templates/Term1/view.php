<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term1 $term1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Term1'), ['action' => 'edit', $term1->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Term1'), ['action' => 'delete', $term1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term1->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Term1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Term1'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="term1 view content">
            <h3><?= h($term1->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $term1->hasValue('student') ? $this->Html->link($term1->student->name, ['controller' => 'Students', 'action' => 'view', $term1->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($term1->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $this->Number->format($term1->English) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $this->Number->format($term1->Hindi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $this->Number->format($term1->Marathi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maths') ?></th>
                    <td><?= $this->Number->format($term1->Maths) ?></td>
                </tr>
                <tr>
                    <th><?= __('EVS') ?></th>
                    <td><?= $this->Number->format($term1->EVS) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($term1->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->format($term1->percentage) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
