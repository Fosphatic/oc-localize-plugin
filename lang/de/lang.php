<?php

return [
    'plugin' => [
        'name' => 'YAMLocalizer',
        'description' => 'Erlaubt Admins die Lokalisierungsdateien zu überschreiben direkt aus dem Backend des October CMS.',
    ],
    'localization' => [
        'select_file' => '-- wähle die Sprachdatei aus --',
        'files' => 'Sprachdateien',
        'reset' => 'Überschreibungen reseten',
        'confirm_reset' => 'Die Überschreibung-Sprachdatei zurücksetzen?',
    ],
    'permissions' => [
        'manage_localizations' => [
            'tab' => 'Lokaliserung Plugin',
            'label' => 'Verwalte die Plugins Lokalisierungs Dateien',
        ],
        'manage_settings' => [
            'label' => 'Manage Localization Settings',
        ],
    ],
    'settings' => [
        'label' => 'Lokalisierung',
        'description' => 'Verwalte die Lokalisierungseinstellungen',
        'hide_builder' => 'Verstecke den RainLab.Builder Menüeintrag',
    ],
];