<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term2 $term2
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Term2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="term2 form content">
            <?= $this->Form->create($term2) ?>
            <fieldset>
                <legend><?= __('Add Term2') ?></legend>
                <?php
                    echo $this->Form->control('Student_id', ['options' => $students]);
                    echo $this->Form->control('English');
                    echo $this->Form->control('Hindi');
                    echo $this->Form->control('Marathi');
                    echo $this->Form->control('Maths');
                    echo $this->Form->control('EVS');
                    echo $this->Form->control('total');
                    echo $this->Form->control('percentage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
