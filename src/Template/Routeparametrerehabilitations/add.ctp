<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Routeparametrerehabilitation $routeparametrerehabilitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['controller' => 'Parametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Parametrerehabilitation'), ['controller' => 'Parametrerehabilitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="routeparametrerehabilitations form large-9 medium-8 columns content">
    <?= $this->Form->create($routeparametrerehabilitation) ?>
    <fieldset>
        <legend><?= __('Ajouter Routeparametrerehabilitation') ?></legend>
        <?php
            echo $this->Form->control('route_id', ['options' => $routes]);
            echo $this->Form->control('parametrerehabilitation_id', ['options' => $parametrerehabilitations]);
            echo $this->Form->control('Valeur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
