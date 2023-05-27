<?php

function prefs_tp_wepesi_tiki_demo_list()
{
    return array(
        'tp_wepesi_wepesilist__sample' => array(
            'name' => tra('wepesilist pref'),
            'description' => tra('simple wepesi extension to test tiki package extension'),
            'type' => 'flag',
            'default' => 'y',
        ),
    );
}
