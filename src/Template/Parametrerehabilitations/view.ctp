<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametrerehabilitation $parametrerehabilitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Parametrerehabilitation'), ['action' => 'edit', $parametrerehabilitation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Parametrerehabilitation'), ['action' => 'delete', $parametrerehabilitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametrerehabilitation->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Parametrerehabilitation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parametrerehabilitations view large-9 medium-8 columns content">
    <h3><?= h($parametrerehabilitation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Designation') ?></th>
            <td><?= h($parametrerehabilitation->designation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parametrerehabilitation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($parametrerehabilitation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($parametrerehabilitation->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Routeparametrerehabilitations') ?></h4>
        <?php if (!empty($parametrerehabilitation->routeparametrerehabilitations)): ?>
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
            <?php foreach ($parametrerehabilitation->routeparametrerehabilitations as $routeparametrerehabilitations): ?>
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
</div>
