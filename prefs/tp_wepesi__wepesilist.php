<?php

function prefs_tp_wepesi__wepesilist_list()
{
    return array(
        'tp_wepesi__wepesilist__sample' => [
            'name' => tra('wepesilist pref'),
            'description' => tra('simple wepesi extension to test tiki package extension'),
            'type' => 'flag',
            'default' => 'y',
            'public' => true
        ],
    );
}
