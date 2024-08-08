<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finalresult $finalresult
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finalresult'), ['action' => 'edit', $finalresult->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finalresult'), ['action' => 'delete', $finalresult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finalresult->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finalresults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finalresult'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="finalresults view content">
            <h3><?= h($finalresult->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $finalresult->hasValue('student') ? $this->Html->link($finalresult->student->name, ['controller' => 'Students', 'action' => 'view', $finalresult->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finalresult->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Total') ?></th>
                    <td><?= $this->Number->format($finalresult->term1_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term2 Total') ?></th>
                    <td><?= $this->Number->format($finalresult->term2_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Final Total') ?></th>
                    <td><?= $this->Number->format($finalresult->final_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Final Percentage') ?></th>
                    <td><?= $this->Number->format($finalresult->final_percentage) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
