<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
        <li><a href="http://127.0.0.1/ArduinoRFID/registrospro">Ver Registros</a>
    </ul></li>
        <li><a href="http://127.0.0.1/LoginRFID/Login.html">Cerrar Seccion</a>
    </ul></li>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_usuarios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuarios_us') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password_us') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id_usuarios) ?></td>
                <td><?= h($usuario->usuarios_us) ?></td>
                <td><?= h($usuario->password_us) ?></td>
                <td><?= h($usuario->nombre) ?></td>
                <td><?= h($usuario->apellido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->id_usuarios]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id_usuarios]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $usuario->id_usuarios], ['confirm' => __('Decea borrar # {0}?', $usuario->id_usuarios)]) ?>
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
