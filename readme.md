# CakePHP Admin Theme

## Installation

```sh
composer require jbennecker/cakephp-admin-theme
```

```sh
bin/cake plugin load AdminTheme
```

Create `config/admin_theme.php`

```php
<?php

return [
    'AdminTheme.title' => '',
    'AdminTheme.controllers' => [
        [],
    ],
];
```

Set theme e.g in AppController::beforeRender()

```php
if ($this->getRequest()->getParam('prefix') === 'Admin') {
    $this->viewBuilder()->setTheme('AdminTheme');
}
```
