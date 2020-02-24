<?php

return [
    'plugin' => [
        'name' => 'Tracking Visitors',
        'description' => 'Toolkits for website analytics.',
        'author' => 'Gergő Szabó'
    ],
    'menu' => [
        'googleevent' => 'Google Event'
    ],
    'title' => [
        'tracking' => 'tracking'
    ],
    'new' => [
        'tracking' => 'New tracking'
    ],
    'form' => [
        'id' => 'ID',
        'name' => 'Name',
        'name_comment' => 'Name can contain only digits, Latin letters and the following symbols: _-',
        'category' => 'Category',
        'category_comment' => 'Typically the object that was interacted with (e.g. "Video")',
        'action' => 'Action',
        'action_comment' => 'The type of interaction (e.g. "play")',
        'label' => 'Label',
        'label_comment' => 'Useful for categorizing events (e.g. "Fall Campaign")',
        'value' => 'Value',
        'value_comment' => 'A numeric value associated with the event (e.g. 42)',
        'auto_category' => 'Generate category automatically',
        'auto_label' => 'Generate label automatically',
        'common' => 'Common',
        'status' => 'Status',
        'help' => 'Guide: https://developers.google.com/analytics/devguides/collection/analyticsjs/events',
        'status_active' => 'Active',
        'status_inactive' => 'Inactive',
    ],
    'list' => [
        'pieces' => 'pieces',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at'
    ],
    'button' => [
        'activate' => 'Activate',
        'inactivate' => 'Inactivate',
        'active' => 'Active',
        'inactive' => 'Inactive',
        'previous' => 'Previous',
        'next' => 'Next',
        'return' => 'Return'
    ],
    'flash' => [
        'activate' => 'Successfully activated those items.',
        'inactivate' => 'Successfully inactivated those items.',
        'delete' => 'Do you really want to delete this items?',
        'remove' => 'Successfully removed those items.'
    ],
    'component' => [
        'google_name' => 'Google Event',
        'google_description' => 'Google Analytics Event Tracking'
    ],
    'permission' => [
        'google_event' => 'Manage Google trackings'
    ]
];
