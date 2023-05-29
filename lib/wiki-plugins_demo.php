<?php

function demo_info()
{
    return [
        'name' => tra('Tiki Package Plugin Demo'),
        'description' => tra('Description of Tiki Package Plugin Demo'),
        'filter' => 'text',
        'params' => [
            'demoparam' => [
                'required' => true,
                'name' => tra('Demo param'),
                'description' => tr('Description of demo param'),
                'filter' => 'text',
            ],
        ],
    ];
}

function demo(string $content = '', $params)
{
    return "This is a demo plugin: " . $content . $params['demoparam'];
}