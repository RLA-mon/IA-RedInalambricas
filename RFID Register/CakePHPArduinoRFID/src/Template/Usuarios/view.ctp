<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $usuario->id_usuarios]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuarios], ['confirm' => __('Decea borrar # {0}?', $usuario->id_usuarios)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id_usuarios) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuarios Us') ?></th>
            <td><?= h($usuario->usuarios_us) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password Us') ?></th>
            <td><?= h($usuario->password_us) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($usuario->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($usuario->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuarios') ?></th>
            <td><?= $this->Number->format($usuario->id_usuarios) ?></td>
        </tr>
    </table>
</div>
