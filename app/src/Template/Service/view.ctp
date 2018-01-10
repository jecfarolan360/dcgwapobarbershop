<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Service'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="service view large-9 medium-8 columns content">
    <h3><?= h($service->name) ?></h3>
    <table class="vertical-table">      
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($service->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($service->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($service->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td>
                <?php
                if (($service->status) == 0)
                {
                    echo "Active";
                }
                else
                {
                    echo "Inactive";
                }
                ?>
                    
            </td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Service Detail') ?></h4>
        <?php if (!empty($service->service_detail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Emp Id') ?></th>
                <th scope="col"><?= __('Service Date') ?></th>
                <th scope="col"><?= __('Client Transaction Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->service_detail as $serviceDetail): ?>
            <tr>
                <td><?= h($serviceDetail->id) ?></td>
                <td><?= h($serviceDetail->service_id) ?></td>
                <td><?= h($serviceDetail->emp_id) ?></td>
                <td><?= h($serviceDetail->service_date) ?></td>
                <td><?= h($serviceDetail->client_transaction_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ServiceDetail', 'action' => 'view', $serviceDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ServiceDetail', 'action' => 'edit', $serviceDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServiceDetail', 'action' => 'delete', $serviceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
