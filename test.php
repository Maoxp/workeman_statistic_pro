<?php
/**
 * Created by PhpStorm.
 * User: admin-mxp
 * Date: 2019/8/30
 * Time: 8:57
 */

require_once __DIR__."/Applications/Statistics/Clients/StatisticClient.php";

if(PHP_SAPI == 'cli' && isset($argv[0]) && $argv[0] == basename(__FILE__))
{
    StatisticClient::tick("TestModule", 'TestInterface');
    usleep(rand(10000, 600000));
    $success = rand(0,1);
    $code = rand(300, 400);
    $msg = '这个是测试消息';
    var_export(StatisticClient::report('TestModule', 'TestInterface', $success, $code, $msg));;
}