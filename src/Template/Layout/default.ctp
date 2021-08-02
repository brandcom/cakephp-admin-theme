<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
use Cake\Utility\Inflector;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $this->fetch('title') ?> | <?= Configure::read('AdminTheme.title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('main'); ?>
</head>
<body>
    <header class="layout-header">
        <a href="/">
            <?= Configure::read('AdminTheme.title') ?>
        </a>
        <?= $this->element('admin_language_links') ?>
    </header>

    <aside class="layout-sidebar">
        <?= $this->element('navbar_' . $globals['user']['role']) ?>
    </aside>

    <main class="layout-main">
        <?= $this->Flash->render() ?>
        <?php
        $this->Breadcrumbs->add('Admin');
        $this->Breadcrumbs->add(Inflector::humanize($this->request->getParam('controller')), ['action' => 'index']);
        $this->Breadcrumbs->add(Inflector::humanize($this->request->getParam('action')));
        echo $this->Breadcrumbs->render(['class' => 'breadcrumbs'], ['separator' => '/']);
        ?>
        <h1><?= Inflector::humanize($this->request->getParam('controller')) ?></h1>
        <?= $this->fetch('content') ?>
    </main>
</body>
</html>
