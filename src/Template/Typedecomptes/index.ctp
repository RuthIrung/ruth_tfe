<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typedecompte[]|\Cake\Collection\CollectionInterface $typedecomptes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Typedecompte'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typedecomptes index large-9 medium-8 columns content">
    <h3><?= __('Typedecomptes') ?></h3>
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
            <?php foreach ($typedecomptes as $typedecompte): ?>
            <tr>
                <td><?= $this->Number->format($typedecompte->id) ?></td>
                <td><?= h($typedecompte->designation) ?></td>
                <td><?= h($typedecompte->created) ?></td>
                <td><?= h($typedecompte->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $typedecompte->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $typedecompte->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $typedecompte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typedecompte->id)]) ?>
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
