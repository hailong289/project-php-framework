<?php
use Hola\Routings\ConfigRouter;
ConfigRouter::init()
    ->add([
        ['url' => '/', 'file' => 'web'],
        ['url' => 'admin', 'file' => 'api']
    ])
    ->work();