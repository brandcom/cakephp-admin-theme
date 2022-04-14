<?php

use Cake\Core\Configure;

Configure::load('AdminTheme.admin_theme');
if (file_exists(ROOT . DS . 'config' . DS . 'admin_theme.php')) {
    Configure::load('admin_theme');
}
