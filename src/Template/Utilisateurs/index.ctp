<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur[]|\Cake\Collection\CollectionInterface $utilisateurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Utilisateur'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utilisateurs index large-9 medium-8 columns content">
    <h3><?= __('Utilisateurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomsUtilisateur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TypeUtilisateur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $utilisateur): ?>
            <tr>
                <td><?= $this->Number->format($utilisateur->id) ?></td>
                <td><?= h($utilisateur->nomsUtilisateur) ?></td>
                <td><?= h($utilisateur->email) ?></td>
                <td><?= h($utilisateur->genre) ?></td>
                <td><?= h($utilisateur->TypeUtilisateur) ?></td>
                <td><?= h($utilisateur->created) ?></td>
                <td><?= h($utilisateur->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $utilisateur->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $utilisateur->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $utilisateur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id)]) ?>
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
