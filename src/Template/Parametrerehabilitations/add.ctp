<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametrerehabilitation $parametrerehabilitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parametrerehabilitations form large-9 medium-8 columns content">
    <?= $this->Form->create($parametrerehabilitation) ?>
    <fieldset>
        <legend><?= __('Ajouter Parametrerehabilitation') ?></legend>
        <?php
            echo $this->Form->control('designation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
