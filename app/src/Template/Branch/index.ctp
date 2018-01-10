<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch[]|\Cake\Collection\CollectionInterface $branch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="branch index large-9 medium-8 columns content">
    <h3><?= __('Branch') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($branch as $branch): ?>
            <tr>
                <td><?= h($branch->name) ?></td>
                <td><?= h($branch->location) ?></td>
                <td><?php
                if (($branch->status) == 0)
                {
                    echo "Open";
                }
                else if (($branch->status) == 1)
                {
                    echo "Renovation";
                }
                else if (($branch->status) == 2)
                {
                    echo "Closed";
                }
                else 
                {
                    echo "Out of Business";
                }
                ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $branch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
