<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utilisateur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utilisateurs form large-9 medium-8 columns content">
    <?= $this->Form->create($utilisateur) ?>
    <fieldset>
        <legend><?= __('Edit Utilisateur') ?></legend>
        <?php
            echo $this->Form->control('nomsUtilisateur');
            echo $this->Form->control('email');
            echo $this->Form->control('genre');
            echo $this->Form->control('TypeUtilisateur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
