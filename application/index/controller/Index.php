<?php
namespace app\index\controller;

use think\cache\driver\Redis;

class Index
{
    public function index()
    {
        return 'hello, zhaoliu!';
    }

    public function redis(){
        $redis = new Redis();
        $redis -> connect('127.0.0.1', 6379);
        echo "sucessfully";
        echo "redis".$redis->ping();
    }
}
