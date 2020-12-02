<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Travaux $travaux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Liste Travauxs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Liste Routes'), ['controller' => 'Routes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Route'), ['controller' => 'Routes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste Typetravauxs'), ['controller' => 'Typetravauxs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouveaux Typetravaux'), ['controller' => 'Typetravauxs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="travauxs form large-9 medium-8 columns content">
    <?= $this->Form->create($travaux) ?>
    <fieldset>
        <legend><?= __('Ajouter Travaux') ?></legend>
        <?php
            echo $this->Form->control('route_id', ['options' => $routes]);
            echo $this->Form->control('typetravaux_id', ['options' => $typetravauxs]);
            echo $this->Form->control('DateDebut', ['empty' => true]);
            echo $this->Form->control('DureeTravaux', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
