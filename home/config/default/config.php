<?php

    return array(
        'server_mode' => (PHP_SAPI === 'cli') ? 'Cli' : 'Http',
        'app_path'=>'apps',
        'ctrl_path'=>'ctrl',
        'project'=>array(
            'name'=>'home',                 
        	'view_mode'=>'Str',   		
        	'ctrl_name'=>'a',				
        	'method_name'=>'m',				
        )
    );
