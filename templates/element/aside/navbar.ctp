<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
use Cake\Utility\Inflector;

$controllers = Configure::read('AdminTheme.controllers');

?>
<nav class="navbar">
    <?php
    foreach ($controllers as $groups) {
        foreach ($groups as $title => $url) {
            if (is_string($url)) {
                echo $this->Html->link(
                    Inflector::humanize($url),
                    [
                        'prefix' => 'admin',
                        'plugin' => false,
                        'controller' => $url,
                        'action' => 'index',
                    ],
                    [
                        'class' => 'link',
                    ]
                );
            } else {
                echo $this->Html->link($title, $url, ['class' => 'link']);
            }
        }
        echo '<hr/>';
    }
    ?>
</nav>
