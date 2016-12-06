<?php

return [
    'plugin' => [
        'name' => 'Látogatókövetés',
        'description' => 'Kiegészítő a weboldal statisztikájához.',
        'author' => 'Szabó Gergő'
    ],
    'menu' => [
        'googleevent' => 'Google Event'
    ],
    'title' => [
        'tracking' => 'követés'
    ],
    'new' => [
        'tracking' => 'Új követés'
    ],
    'form' => [
        'id' => 'ID',
        'name' => 'Név',
        'name_comment' => 'A név csak számokat, latin betűket és a következő szimbólumokat tartalmazhatja: _-',
        'category' => 'Kategória',
        'category_comment' => 'Esemény besorolása (pl.: "Videó")',
        'action' => 'Akció',
        'action_comment' => 'Azonosító név az akcióhoz.',
        'label' => 'Címke',
        'label_comment' => 'Esemény csoportosítása (pl.: "Őszi kampány")',
        'value' => 'Érték',
        'value_comment' => 'Számbeli érték (pl.: 42)',
        'auto_category' => 'Kategória automatikus generálása',
        'auto_label' => 'Címke automatikus generálása',
        'common' => 'Megjegyzés',
        'status' => 'Státusz',
        'help' => 'Útmutató: https://developers.google.com/analytics/devguides/collection/analyticsjs/events',
        'status_active' => 'Aktív',
        'status_inactive' => 'Inaktív',
    ],
    'list' => [
        'pieces' => 'darab',
        'created_at' => 'Létrehozva',
        'updated_at' => 'Módosítva'
    ],
    'button' => [
        'activate' => 'Aktiválás',
        'deactivate' => 'Deaktiválás',
        'active' => 'Aktív',
        'inactive' => 'Inaktív',
        'return' => 'Vissza'
    ],
    'flash' => [
        'activate' => 'Az aktiválás sikeresen megtörtént.',
        'deactivate' => 'A deaktiválás sikeresen megtörtént.',
        'delete' => 'Valóban törölni akarja?',
        'remove' => 'Az eltávolítás sikeresen megtörtént.'
    ],
    'component' => [
        'google_name' => 'Google Event',
        'google_description' => 'Google Analytics Event követő'
    ],
    'permission' => [
        'google_event' => 'Google követő kódok kezelése'
    ]
];
