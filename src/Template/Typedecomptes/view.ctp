<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typedecompte $typedecompte
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Typedecompte'), ['action' => 'edit', $typedecompte->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Typedecompte'), ['action' => 'delete', $typedecompte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typedecompte->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste Typedecomptes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Typedecompte'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Liste Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typedecomptes view large-9 medium-8 columns content">
    <h3><?= h($typedecompte->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Designation') ?></th>
            <td><?= h($typedecompte->designation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typedecompte->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typedecompte->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typedecompte->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comptes') ?></h4>
        <?php if (!empty($typedecompte->comptes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Utilisateur Id') ?></th>
                <th scope="col"><?= __('Typedecompte Id') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typedecompte->comptes as $comptes): ?>
            <tr>
                <td><?= h($comptes->id) ?></td>
                <td><?= h($comptes->utilisateur_id) ?></td>
                <td><?= h($comptes->typedecompte_id) ?></td>
                <td><?= h($comptes->login) ?></td>
                <td><?= h($comptes->password) ?></td>
                <td><?= h($comptes->email) ?></td>
                <td><?= h($comptes->created) ?></td>
                <td><?= h($comptes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comptes', 'action' => 'view', $comptes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comptes', 'action' => 'edit', $comptes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comptes', 'action' => 'delete', $comptes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comptes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
