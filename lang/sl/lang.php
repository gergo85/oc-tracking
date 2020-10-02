<?php

return [
    'plugin' => [
        'name' => 'Tracking Visitors',
        'description' => 'Orodja za spletno analitiko.',
        'author' => 'Gergő Szabó'
    ],
    'menu' => [
        'googleevent' => 'Google Event'
    ],
    'title' => [
        'tracking' => 'sledenje'
    ],
    'new' => [
        'tracking' => 'Novo sledenje'
    ],
    'form' => [
        'id' => 'ID',
        'name' => 'Ime',
        'name_comment' => 'Ime lahko vsebuje samo številke, latinske črke in simbola _ in -',
        'category' => 'Kategorija',
        'category_comment' => 'Običajno objekt preko katerega je imel obiskovalec interakcijo (e.g. "Video")',
        'action' => 'Akcija',
        'action_comment' => 'Tip interakcije (e.g. "play")',
        'label' => 'Oznaka',
        'label_comment' => 'Uporabno za kategoriziranje dogodkov (e.g. "Fall Campaign")',
        'value' => 'Vrednost',
        'value_comment' => 'Numerična vrednost povezana z dogodkom (e.g. 42)',
        'auto_category' => 'Generiraj kategorijo avtomatično',
        'auto_label' => 'Generiraj oznako avtomatično',
        'common' => 'Splošno',
        'status' => 'Status',
        'help' => 'Vodič: https://developers.google.com/analytics/devguides/collection/analyticsjs/events',
        'status_active' => 'Aktiven',
        'status_inactive' => 'Neaktiven',
    ],
    'list' => [
        'pieces' => 'vrednosti',
        'created_at' => 'Ustvarjeno',
        'updated_at' => 'Posodobljeno'
    ],
    'button' => [
        'activate' => 'Aktiviraj',
        'inactivate' => 'Deaktiviraj',
        'active' => 'Aktiven',
        'inactive' => 'Neaktiven',
        'previous' => 'Prejšnji',
        'next' => 'Naslednji',
        'return' => 'Nazaj'
    ],
    'flash' => [
        'activate' => 'Uspešno aktivirano.',
        'inactivate' => 'Uspešno deaktivirano.',
        'delete' => 'Si res želiš izbrisati vse?',
        'remove' => 'Uspešno odstranjeno.'
    ],
    'component' => [
        'google_name' => 'Google Event',
        'google_description' => 'Google Analytics Event Tracking'
    ],
    'permission' => [
        'google_event' => 'Upravljaj Google sledenje'
    ]
];
