<?php
/**
 * @var \App\View\AppView $this
 * @var array $globals
 */
?>
<nav class="navbar">
    <?php foreach ($globals['user']['stores'] as $store): ?>
        <div class="navbar__heading"><?= h($store['title']) ?></div>
        <?= $this->Html->link(
            'Orders',
            [
                'plugin' => false,
                'prefix' => 'admin',
                'controller' => 'Orders',
                'action' => 'index',
                '?' => [
                    'store_id' => $store['id'],
                ],
            ],
        ) ?>
        <?= $this->Html->link(
            'Workload',
            [
                'plugin' => false,
                'prefix' => 'admin',
                'controller' => 'Stores',
                'action' => 'ampel',
                $store['id'],
            ],
        ) ?>
    <?php endforeach ?>
</nav>
