<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $branch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Branch'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="branch form large-9 medium-8 columns content">
    <?= $this->Form->create($branch) ?>
    <fieldset>
        <legend><?= __('Edit Branch') ?></legend>
        <?php
             echo $this->Form->control('name', [
            'label' => [
                'text' => 'Branch']
            ]);
            echo $this->Form->control('location', [
            'label' => [
                'text' => 'Location']
            ]);
            echo "Status";
            echo $this->Form->radio('status', ['Open','Renovation','Closed', 'Out of Business']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
