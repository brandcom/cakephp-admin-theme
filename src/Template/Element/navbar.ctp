<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Utility\Inflector;

$controllers = [
    [
        'Homepages',
        'Stores',
        'Users',
    ],
    [
        'BusinessHourExceptions',
        'Coupons',
        'Deliveryareas',
        'ItemCategories',
        'Items',
        'Orders',
        'ProductCategories',
        'Products',
    ],
    [
        'Reports',
        'Reviews',
    ],
];
?>
<nav class="navbar">
    <?php
    foreach ($controllers as $groups) {
        foreach ($groups as $controller) {
            echo $this->Html->link(
                Inflector::humanize($controller),
                [
                    'prefix' => 'admin',
                    'plugin' => false,
                    'controller' => $controller,
                    'action' => 'index',
                ],
                [
                    'class' => 'link',
                ]
            );
        }
        echo '<hr/>';
    }
    ?>
</nav>
