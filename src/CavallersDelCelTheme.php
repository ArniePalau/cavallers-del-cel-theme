<?php

declare(strict_types=1);

namespace CavallersDelCel\Theme;

use Forumify\Plugin\AbstractForumifyTheme;
use Forumify\Plugin\PluginMetadata;
use Forumify\Plugin\ThemeConfig;
use Forumify\Plugin\ThemeVar;
use Forumify\Plugin\ThemeVarType;

class CavallersDelCelTheme extends AbstractForumifyTheme
{
    public function getPluginMetadata(): PluginMetadata
    {
        return new PluginMetadata(
            'Cavallers del Cel Theme',
            'Cavallers del Cel',
            'Official tactical design system, background video hover effects, and scroll animation scrubbing theme for Cavallers del Cel.'
        );
    }

    public function getStylesheets(): array
    {
        return [
            'css/theme.css',
        ];
    }

    public function getThemeConfig(): ThemeConfig
    {
        return new ThemeConfig(
            hasDarkVariant: true,
            vars: [
                new ThemeVar(
                    key: 'cdc-primary',
                    label: 'Primary Accent Color',
                    type: ThemeVarType::Color,
                    defaultValue: '#e5ac00',
                    defaultDarkValue: '#e5ac00'
                ),
                new ThemeVar(
                    key: 'cdc-bg-dark',
                    label: 'Background Dark',
                    type: ThemeVarType::Color,
                    defaultValue: '#090a0f',
                    defaultDarkValue: '#090a0f'
                ),
            ]
        );
    }
}
