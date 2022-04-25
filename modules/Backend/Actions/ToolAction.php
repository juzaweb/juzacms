<?php

namespace Juzaweb\Backend\Actions;

use Juzaweb\Backend\Http\Controllers\ImportController;
use Juzaweb\CMS\Abstracts\Action;
use Juzaweb\CMS\Facades\HookAction;

class ToolAction extends Action
{
    public function handle()
    {
        $this->addAction(Action::BACKEND_CALL_ACTION, [$this, 'addAdminMenu']);
    }

    public function addAdminMenu()
    {
        HookAction::addAdminMenu(
            trans('cms::app.tools'),
            'tools',
            [
                'icon' => 'fa fa-cogs',
                'position' => 91,
            ]
        );

        HookAction::registerAdminPage(
            'imports',
            [
                'title' => trans('cms::app.import'),
                'menu' => [
                    'icon' => 'fa fa-cogs',
                    'position' => 1,
                    'parent' => 'tools',
                ]
            ]
        );
    }
}
