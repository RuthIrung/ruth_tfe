<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Route $route
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Liste Routes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['controller' => 'Travauxs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveaux Travaux'), ['controller' => 'Travauxs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="routes form large-9 medium-8 columns content">
    <?= $this->Form->create($route) ?>
    <fieldset>
        <legend><?= __('Ajouter Route') ?></legend>
        <?php
            echo $this->Form->control('Nom');
            echo $this->Form->control('Longueur');
            echo $this->Form->control('Coordonnees');
            echo $this->Form->control('Etat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
