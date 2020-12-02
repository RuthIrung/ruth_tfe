<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typedecompte $typedecompte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typedecompte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typedecompte->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste Typedecomptes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typedecomptes form large-9 medium-8 columns content">
    <?= $this->Form->create($typedecompte) ?>
    <fieldset>
        <legend><?= __('Modifier Typedecompte') ?></legend>
        <?php
            echo $this->Form->control('designation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
