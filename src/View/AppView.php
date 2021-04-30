<?php


namespace AdminTheme\View;

use Cake\View\View;


class AppView extends View
{
    public function initialize()
    {
        parent::initialize();
        $this->loadHelper('Form', ['templates' => 'admin_form']);
    }
}
