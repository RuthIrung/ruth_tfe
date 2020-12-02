<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Compte'), ['action' => 'edit', $compte->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Compte'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Typedecomptes'), ['controller' => 'Typedecomptes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Typedecompte'), ['controller' => 'Typedecomptes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comptes view large-9 medium-8 columns content">
    <h3><?= h($compte->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Utilisateur') ?></th>
            <td><?= $compte->has('utilisateur') ? $this->Html->link($compte->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $compte->utilisateur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typedecompte') ?></th>
            <td><?= $compte->has('typedecompte') ? $this->Html->link($compte->typedecompte->id, ['controller' => 'Typedecomptes', 'action' => 'view', $compte->typedecompte->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($compte->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($compte->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($compte->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compte->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($compte->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($compte->modified) ?></td>
        </tr>
    </table>
</div>
