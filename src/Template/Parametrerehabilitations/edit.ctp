<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametrerehabilitation $parametrerehabilitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parametrerehabilitation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parametrerehabilitation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parametrerehabilitations form large-9 medium-8 columns content">
    <?= $this->Form->create($parametrerehabilitation) ?>
    <fieldset>
        <legend><?= __('Modifier Parametrerehabilitation') ?></legend>
        <?php
            echo $this->Form->control('designation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
