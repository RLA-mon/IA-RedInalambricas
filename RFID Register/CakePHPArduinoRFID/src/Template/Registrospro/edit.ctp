<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrospro $registrospro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrospro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrospro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Registrospro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registrospro form large-9 medium-8 columns content">
    <?= $this->Form->create($registrospro) ?>
    <fieldset>
        <legend><?= __('Edit Registrospro') ?></legend>
        <?php
            echo $this->Form->control('numeroid');
            echo $this->Form->control('ertenece');
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
