<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Routeparametrerehabilitation[]|\Cake\Collection\CollectionInterface $routeparametrerehabilitations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Parametrerehabilitations'), ['controller' => 'Parametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Parametrerehabilitation'), ['controller' => 'Parametrerehabilitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="routeparametrerehabilitations index large-9 medium-8 columns content">
    <h3><?= __('Routeparametrerehabilitations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('route_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parametrerehabilitation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Valeur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($routeparametrerehabilitations as $routeparametrerehabilitation): ?>
            <tr>
                <td><?= $this->Number->format($routeparametrerehabilitation->id) ?></td>
                <td><?= $routeparametrerehabilitation->has('route') ? $this->Html->link($routeparametrerehabilitation->route->id, ['controller' => 'Routes', 'action' => 'view', $routeparametrerehabilitation->route->id]) : '' ?></td>
                <td><?= $routeparametrerehabilitation->has('parametrerehabilitation') ? $this->Html->link($routeparametrerehabilitation->parametrerehabilitation->id, ['controller' => 'Parametrerehabilitations', 'action' => 'view', $routeparametrerehabilitation->parametrerehabilitation->id]) : '' ?></td>
                <td><?= $this->Number->format($routeparametrerehabilitation->Valeur) ?></td>
                <td><?= h($routeparametrerehabilitation->created) ?></td>
                <td><?= h($routeparametrerehabilitation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $routeparametrerehabilitation->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $routeparametrerehabilitation->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $routeparametrerehabilitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $routeparametrerehabilitation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
