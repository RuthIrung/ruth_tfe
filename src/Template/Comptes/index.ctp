<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte[]|\Cake\Collection\CollectionInterface $comptes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Typedecomptes'), ['controller' => 'Typedecomptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Typedecompte'), ['controller' => 'Typedecomptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comptes index large-9 medium-8 columns content">
    <h3><?= __('Comptes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utilisateur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typedecompte_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comptes as $compte): ?>
            <tr>
                <td><?= $this->Number->format($compte->id) ?></td>
                <td><?= $compte->has('utilisateur') ? $this->Html->link($compte->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $compte->utilisateur->id]) : '' ?></td>
                <td><?= $compte->has('typedecompte') ? $this->Html->link($compte->typedecompte->id, ['controller' => 'Typedecomptes', 'action' => 'view', $compte->typedecompte->id]) : '' ?></td>
                <td><?= h($compte->login) ?></td>
                <td><?= h($compte->password) ?></td>
                <td><?= h($compte->email) ?></td>
                <td><?= h($compte->created) ?></td>
                <td><?= h($compte->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $compte->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $compte->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]) ?>
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
