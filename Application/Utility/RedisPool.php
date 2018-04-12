<?php
/**
 * Created by PhpStorm.
 * User: windrunner414
 * Date: 3/18/18
 * Time: 12:44 PM
 */

namespace App\Utility;
use EasySwoole\Config;
use EasySwoole\Core\Swoole\Coroutine\AbstractInterface\CoroutinePool;
use EasySwoole\Core\Swoole\Coroutine\Client\Redis;

class RedisPool extends CoroutinePool
{
    public function __construct()
    {
        $conf = Config::getInstance()->getConf('REDIS.pool');
        $min = $conf['min'];
        $max = $conf['max'];
        parent::__construct($min, $max);
    }

    public function getObj($timeOut = 0.1):?Redis
    {
        return parent::getObj($timeOut); // TODO: Change the autogenerated stub
    }

    protected function createObject()
    {
        $conf = Config::getInstance()->getConf('REDIS');
        $redis = new Redis($conf['host'], $conf['port'], $conf['serialize'], $conf['auth']);
        if (is_callable($conf['errorHandler'])) {
            $redis->setErrorHandler($conf['errorHandler']);
        }
        try {
            $redis->exec('select', $conf['dbName']);
        } catch (\Exception $e) {

        }
        return $redis;
    }
}
