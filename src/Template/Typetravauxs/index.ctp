<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typetravaux[]|\Cake\Collection\CollectionInterface $typetravauxs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Typetravaux'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['controller' => 'Travauxs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveau Travaux'), ['controller' => 'Travauxs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typetravauxs index large-9 medium-8 columns content">
    <h3><?= __('Typetravauxs') ?></h3>
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
            <?php foreach ($typetravauxs as $typetravaux): ?>
            <tr>
                <td><?= $this->Number->format($typetravaux->id) ?></td>
                <td><?= h($typetravaux->designation) ?></td>
                <td><?= h($typetravaux->created) ?></td>
                <td><?= h($typetravaux->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $typetravaux->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $typetravaux->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $typetravaux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typetravaux->id)]) ?>
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
