<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Routeparametrerehabilitation $routeparametrerehabilitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Routeparametrerehabilitation'), ['action' => 'edit', $routeparametrerehabilitation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Routeparametrerehabilitation'), ['action' => 'delete', $routeparametrerehabilitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $routeparametrerehabilitation->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['controller' => 'Parametrerehabilitations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Parametrerehabilitation'), ['controller' => 'Parametrerehabilitations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="routeparametrerehabilitations view large-9 medium-8 columns content">
    <h3><?= h($routeparametrerehabilitation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Route') ?></th>
            <td><?= $routeparametrerehabilitation->has('route') ? $this->Html->link($routeparametrerehabilitation->route->id, ['controller' => 'Routes', 'action' => 'view', $routeparametrerehabilitation->route->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parametrerehabilitation') ?></th>
            <td><?= $routeparametrerehabilitation->has('parametrerehabilitation') ? $this->Html->link($routeparametrerehabilitation->parametrerehabilitation->id, ['controller' => 'Parametrerehabilitations', 'action' => 'view', $routeparametrerehabilitation->parametrerehabilitation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($routeparametrerehabilitation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valeur') ?></th>
            <td><?= $this->Number->format($routeparametrerehabilitation->Valeur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($routeparametrerehabilitation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($routeparametrerehabilitation->modified) ?></td>
        </tr>
    </table>
</div>
