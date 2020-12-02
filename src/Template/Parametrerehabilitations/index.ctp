<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametrerehabilitation[]|\Cake\Collection\CollectionInterface $parametrerehabilitations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Parametrerehabilitation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Routeparametrerehabilitations'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Routeparametrerehabilitation'), ['controller' => 'Routeparametrerehabilitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parametrerehabilitations index large-9 medium-8 columns content">
    <h3><?= __('Parametrerehabilitations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parametrerehabilitations as $parametrerehabilitation): ?>
            <tr>
                <td><?= $this->Number->format($parametrerehabilitation->id) ?></td>
                <td><?= h($parametrerehabilitation->designation) ?></td>
                <td><?= h($parametrerehabilitation->created) ?></td>
                <td><?= h($parametrerehabilitation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $parametrerehabilitation->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $parametrerehabilitation->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $parametrerehabilitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametrerehabilitation->id)]) ?>
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
