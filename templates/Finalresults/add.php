<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finalresult $finalresult
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Finalresults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="finalresults form content">
            <?= $this->Form->create($finalResult) ?>
            <fieldset>
                <legend><?= __('Add Finalresult') ?></legend>
                <?php
                    //echo $this->Form->control('Student_id', ['options' => $students]);
                    echo $this->Form->control('student_id', ['options' => $students, 'empty' => true, 'label' => 'Student']);
                    echo $this->Form->control('term1_total');
                    echo $this->Form->control('term2_total');
                    echo $this->Form->control('final_total');
                    echo $this->Form->control('final_percentage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
