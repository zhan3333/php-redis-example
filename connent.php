<?php
/**
 * @desc php-redis
 * @author zhan <grianchan@gmail.com>
 * @since 2017/10/11 16:48
 */

/**
 * connect, open 连接到服务器
 * pconnect, popen 使用已存在的连接进行连接
 * auth 使用密码进行连接
 * select 选择数据库
 * close 关闭连接
 * setOption 设置选项
 * getOption 获取选项
 * ping ping服务器
 * echo 输出获取到的字符串
 */
$redis = new Redis();

/**
 * 连接到数据库
 * host
 * port
 * timeout 设置超时时间
 * retry_interval 尝试重新连接间隔时间
 *
 */
$redis->connect('127.0.0.1');

//$redis->select(1);

/**
 * select 选择数据库
 */

var_dump($redis->ping());   // +PONE

// 设置键值对
$set_ret = $redis->set('name', 'zhan');
var_dump($set_ret);

// 获取值
$get_ret = $redis->get('name');
var_dump($get_ret);



