<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrospro[]|\Cake\Collection\CollectionInterface $registrospro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Registro'), ['action' => 'add']) ?></li>
        <li><a href="http://127.0.0.1/ArduinoRFID/usuarios">regresar</a>
    </ul></li>
        <li><a href="file:///C:/xampp/htdocs/LoginRFID/Login.html">Cerrar Seccion</a>
    </ul></li>
    </ul>
</nav>
<div class="registrospro index large-9 medium-8 columns content">
    <h3><?= __('Registros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ertenece') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrospro as $registrospro): ?>
            <tr>
                <td><?= $this->Number->format($registrospro->id) ?></td>
                <td><?= h($registrospro->numeroid) ?></td>
                <td><?= h($registrospro->ertenece) ?></td>
                <td><?= h($registrospro->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $registrospro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $registrospro->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $registrospro->id], ['confirm' => __('Decea Borrar # {0}?', $registrospro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
