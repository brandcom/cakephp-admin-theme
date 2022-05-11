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
    <?= $this->fetch('css') ?>
</head>
<body>
    <header class="layout-header">
        <a href="/">
            <?= Configure::read('AdminTheme.title') ?>
        </a>
        <?= $this->element('admin_language_links') ?>
    </header>

    <aside class="layout-sidebar">
        <?= $this->element('aside/navbar') ?>
    </aside>

    <main class="layout-main">
        <?php if (Configure::read('environment') == 'test'): ?>
            <div class="alert alert-warning">
                <strong>ACHTUNG:</strong><br>
                Dies ist die Testumgebung!
            </div>
        <?php endif ?>

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

    <?= $this->fetch('script') ?>
</body>
</html>
