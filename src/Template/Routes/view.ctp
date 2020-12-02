<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Route $route
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Route'), ['action' => 'edit', $route->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Route'), ['action' => 'delete', $route->id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Routes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['controller' => 'Travauxs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveaux Travaux'), ['controller' => 'Travauxs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="routes view large-9 medium-8 columns content">
    <h3><?= h($route->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($route->Nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur') ?></th>
            <td><?= h($route->Longueur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordonnees') ?></th>
            <td><?= h($route->Coordonnees) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat') ?></th>
            <td><?= h($route->Etat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($route->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($route->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($route->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Routeparametrerehabilitations') ?></h4>
        <?php if (!empty($route->routeparametrerehabilitations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Route Id') ?></th>
                <th scope="col"><?= __('Parametrerehabilitation Id') ?></th>
                <th scope="col"><?= __('Valeur') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($route->routeparametrerehabilitations as $routeparametrerehabilitations): ?>
            <tr>
                <td><?= h($routeparametrerehabilitations->id) ?></td>
                <td><?= h($routeparametrerehabilitations->route_id) ?></td>
                <td><?= h($routeparametrerehabilitations->parametrerehabilitation_id) ?></td>
                <td><?= h($routeparametrerehabilitations->Valeur) ?></td>
                <td><?= h($routeparametrerehabilitations->created) ?></td>
                <td><?= h($routeparametrerehabilitations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'view', $routeparametrerehabilitations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'edit', $routeparametrerehabilitations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'delete', $routeparametrerehabilitations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $routeparametrerehabilitations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Travauxs') ?></h4>
        <?php if (!empty($route->travauxs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Route Id') ?></th>
                <th scope="col"><?= __('Typetravaux Id') ?></th>
                <th scope="col"><?= __('DateDebut') ?></th>
                <th scope="col"><?= __('DureeTravaux') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($route->travauxs as $travauxs): ?>
            <tr>
                <td><?= h($travauxs->id) ?></td>
                <td><?= h($travauxs->route_id) ?></td>
                <td><?= h($travauxs->typetravaux_id) ?></td>
                <td><?= h($travauxs->DateDebut) ?></td>
                <td><?= h($travauxs->DureeTravaux) ?></td>
                <td><?= h($travauxs->created) ?></td>
                <td><?= h($travauxs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Travauxs', 'action' => 'view', $travauxs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Travauxs', 'action' => 'edit', $travauxs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Travauxs', 'action' => 'delete', $travauxs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travauxs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
