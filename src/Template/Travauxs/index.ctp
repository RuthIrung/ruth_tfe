<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Travaux[]|\Cake\Collection\CollectionInterface $travauxs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveaux Travaux'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Typetravauxs'), ['controller' => 'Typetravauxs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveaux Typetravaux'), ['controller' => 'Typetravauxs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="travauxs index large-9 medium-8 columns content">
    <h3><?= __('Travauxs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('route_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typetravaux_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateDebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DureeTravaux') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($travauxs as $travaux): ?>
            <tr>
                <td><?= $this->Number->format($travaux->id) ?></td>
                <td><?= $travaux->has('route') ? $this->Html->link($travaux->route->id, ['controller' => 'Routes', 'action' => 'view', $travaux->route->id]) : '' ?></td>
                <td><?= $travaux->has('typetravaux') ? $this->Html->link($travaux->typetravaux->id, ['controller' => 'Typetravauxs', 'action' => 'view', $travaux->typetravaux->id]) : '' ?></td>
                <td><?= h($travaux->DateDebut) ?></td>
                <td><?= h($travaux->DureeTravaux) ?></td>
                <td><?= h($travaux->created) ?></td>
                <td><?= h($travaux->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $travaux->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $travaux->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $travaux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travaux->id)]) ?>
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
