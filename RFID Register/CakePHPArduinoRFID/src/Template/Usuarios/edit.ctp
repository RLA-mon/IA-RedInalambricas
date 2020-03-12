<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $usuario->id_usuarios],
                ['confirm' => __('Seguro que decea borrar # {0}?', $usuario->id_usuarios)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
            echo $this->Form->control('usuarios_us');
            echo $this->Form->control('password_us');
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Actualizar')) ?>
    <?= $this->Form->end() ?>
</div>
