<?php
use Hola\Routings\RouterConfig;
RouterConfig::init()
    ->add([
        ['url' => '/', 'file' => 'web'],
        ['url' => 'admin', 'file' => 'api']
    ])
    ->work();