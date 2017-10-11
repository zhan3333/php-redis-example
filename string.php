<?php
/**
 * @desc String
 * @author zhan <grianchan@gmail.com>
 * @since 2017/10/11 17:49
 */

$redis = new Redis();
$redis->connect('127.0.0.1');



$redis->set('name', 'zhan');   // set 操作会覆盖


$name = $redis->get('name');

$redis->setnx('name', 'zhan');      // set if not exists
$redis->setex('name', 10, 'zhan');  // set expire
$redis->mset(['name' => 'zhan', 'age' => 20]);
$redis->getSet('name', 'new-name');         // get 旧值，然后设置新值

$redis->exists('name');

$redis->mget(['name', 'age']);      // 值的一个集合


