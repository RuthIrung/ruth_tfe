<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Travaux $travaux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Travaux'), ['action' => 'edit', $travaux->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Travaux'), ['action' => 'delete', $travaux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travaux->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveaux Travaux'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Typetravauxs'), ['controller' => 'Typetravauxs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveaux Typetravaux'), ['controller' => 'Typetravauxs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="travauxs view large-9 medium-8 columns content">
    <h3><?= h($travaux->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Route') ?></th>
            <td><?= $travaux->has('route') ? $this->Html->link($travaux->route->id, ['controller' => 'Routes', 'action' => 'view', $travaux->route->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typetravaux') ?></th>
            <td><?= $travaux->has('typetravaux') ? $this->Html->link($travaux->typetravaux->id, ['controller' => 'Typetravauxs', 'action' => 'view', $travaux->typetravaux->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($travaux->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateDebut') ?></th>
            <td><?= h($travaux->DateDebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DureeTravaux') ?></th>
            <td><?= h($travaux->DureeTravaux) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($travaux->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($travaux->modified) ?></td>
        </tr>
    </table>
</div>
