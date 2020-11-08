<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Utility\Inflector;

$controllers = [
    [
        'Pages',
        'Users',
    ],
    [
        'Products',
    ],
    [
        'Reports',
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
