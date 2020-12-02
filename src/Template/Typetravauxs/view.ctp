<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typetravaux $typetravaux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Typetravaux'), ['action' => 'edit', $typetravaux->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Typetravaux'), ['action' => 'delete', $typetravaux->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typetravaux->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Typetravauxs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveaux Typetravaux'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['controller' => 'Travauxs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveaux Travaux'), ['controller' => 'Travauxs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typetravauxs view large-9 medium-8 columns content">
    <h3><?= h($typetravaux->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Designation') ?></th>
            <td><?= h($typetravaux->designation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typetravaux->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typetravaux->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typetravaux->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Travauxs') ?></h4>
        <?php if (!empty($typetravaux->travauxs)): ?>
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
            <?php foreach ($typetravaux->travauxs as $travauxs): ?>
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
