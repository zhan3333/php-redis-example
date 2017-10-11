<?php
/**
 * @desc String
 * @author zhan <grianchan@gmail.com>
 * @since 2017/10/11 17:49
 */

$redis = new Redis();
$redis->connect('127.0.0.1');
$redis->set('name', 'zhan');
$redis->get('name');
$redis->setnx('name', 'zhan');
$redis->setex('name', 10, 'zhan');
$redis->mset(['name' => 'zhan', 'age' => 20]);
$redis->getSet('name', 'new-name');
