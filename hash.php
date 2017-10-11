<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/10/11
 * Time: 22:29
 */


$redis = new Redis();
$redis->connect('127.0.0.1');

$redis->hSet('1', 'name', 'zhan');
$redis->hSet('1', 'age',23);