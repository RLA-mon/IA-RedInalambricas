<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrospro $registrospro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registrospro'), ['action' => 'edit', $registrospro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registrospro'), ['action' => 'delete', $registrospro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrospro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Registrospro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registrospro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registrospro view large-9 medium-8 columns content">
    <h3><?= h($registrospro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numeroid') ?></th>
            <td><?= h($registrospro->numeroid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ertenece') ?></th>
            <td><?= h($registrospro->ertenece) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($registrospro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($registrospro->date) ?></td>
        </tr>
    </table>
</div>
