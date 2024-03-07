<?php
define('__DIR__ROOT', __DIR__);
$name_path_script =  'vendor/longdhdev/holaframework/scripts/';
if(count($argv)) unset($argv[0]);
$command = array_values($argv);
$module = explode(':', $command[0]);
$name_control = $module[1];
switch ($name_control) {
    case 'controller':
        unset($command[0]);
        $name_controller = array_values($command)[0] ?? '';
        if(empty($name_controller)) {
            echo 'The controller is not null';
            exit();
        }
        require_once $name_path_script.'controller.php';
        break;
    case 'middleware':
        unset($command[0]);
        $name_middleware = array_values($command)[0] ?? '';
        if(empty($name_middleware)) {
            echo 'The middleware is not null';
            exit();
        }
        require_once $name_path_script.'middleware.php';
        break;

    case 'model':
        unset($command[0]);
        $command = array_values($command);
        $name_model = $command[0] ?? '';
        if(empty($name_model)) {
            echo 'The model is not null';
            exit();
        }
        unset($command[0]);
        $command = array_values($command);
        $name_array_table = $command[0] ?? 'table=default';
        $name_table = explode('=', $name_array_table)[1];
        if(empty($name_table)) {
            echo 'Name table is not null';
            exit();
        }
        require_once $name_path_script.'model.php';
        break;

    case 'view':
        unset($command[0]);
        $name_view = array_values($command)[0] ?? '';
        if(empty($name_view)) {
            echo 'The view is not null';
            exit();
        }
        require_once $name_path_script.'view.php';
        break;
    case 'queue':
        require_once 'core/function.php';
        require_once 'config/constant.php';
        require_once 'config/database.php';
        require_once 'vendor/autoload.php';
        unset($command[0]);
        $command = array_values($command);
        $type_queue = $command[0] ?? '';
        if(empty($type_queue)) {
            echo 'The queue is not null';
            exit();
        }
        unset($command[0]);
        $type_queue2 = array_values($command)[0] ?? '';
        $job_queue = 'job';
        if(!empty($type_queue2) && $type_queue2 === 'rollback_failed_job') {
            $job_queue = 'job_failed';
        }
        require_once $name_path_script.'queue.php';
        break;
}