<?php

namespace DamianLewis\Agent;

use App;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails(): array
    {
        return [
            'name' => 'Agent',
            'description' => 'A desktop/mobile user agent parser for OctoberCMS.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-desktop',
        ];
    }

    public function registerMarkupTags(): array
    {
        return [
            'functions' => [
                'agent' => function ($method) {
                    return App::make('agent')->$method();
                },
            ],
        ];
    }
}
