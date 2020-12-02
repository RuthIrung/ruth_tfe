<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Typedecomptes'), ['controller' => 'Typedecomptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Typedecompte'), ['controller' => 'Typedecomptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comptes form large-9 medium-8 columns content">
    <?= $this->Form->create($compte) ?>
    <fieldset>
        <legend><?= __('Modifier Compte') ?></legend>
        <?php
            echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs]);
            echo $this->Form->control('typedecompte_id', ['options' => $typedecomptes]);
            echo $this->Form->control('login');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
